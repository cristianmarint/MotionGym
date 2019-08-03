<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-30 9:05:28
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-08-03 12:48:55
 * @ Description:
 */

    namespace App\Http;

    use App\Models\Product;
    use App\Models\Detail;
    use App\Models\Invoice;
    use App\Models\Membership;
    use App\Models\Person;

    use Illuminate\Support\Collection;

    use Illuminate\Http\Request;

    use Illuminate\Support\Facades\Auth; 
    
    class Helpers
    {
        /**
         * Updates the total for a given invoice ID base on product,product amount  price and discounts or surcharges.
         *
         * @param integer $id
         * @return void
         */
        public static function updateTotalInvoice($id){

            // Products
            $products  = Detail::select('detail.amount','product.sale_price')
                        ->join('product','detail.product_id','=','product.id')
                        ->where('detail.invoice_id',$id)->get();
        $extrasDetail  = Detail::select('extra.percentage','extra.name')
                        ->join('extra','detail.extra_id','=','extra.id')
                        ->where('detail.invoice_id',$id)->get();


            // Memberships
            $memberships = Membership::select('price')
                        ->where('invoice_id',$id)->get();
     $extrasMembership  = Membership::select('extra.percentage')
                        ->join('extra','membership.extra_id','=','extra.id')
                        ->where('membership.invoice_id',$id)->get();




                        

            
            $total = 0;
            $extraTotal = 0;
            $totalPay = 0;
            foreach ($products as $key ) {
                $total += ($key->sale_price * $key->amount);
            }


            if($memberships->isNotEmpty()){
                foreach ($memberships as $key ) {
                    $total += ($key->price);
                }
                if($extrasMembership->isNotEmpty()){
                    foreach ($extrasMembership as $key ) {
                        $extraTotal = $extraTotal + $key->percentage;
                    }
                    $totalPay = $total - ($total * abs($extraTotal/100));
                }else {
                    $totalPay = $total;                
                }
            }else{
                $totalPay = $total;                
            }

                        
            if($extrasDetail->count()>0){
                foreach ($extrasDetail as $key ) {
                    $extraTotal = $extraTotal + $key->percentage;
                }
                $totalPay = $total - ($total * abs($extraTotal/100));
            }



            Invoice::where('id',$id)->update(['total'=>$totalPay]);
            //dd('total ('.$total.') |  extraTotal ('.$extraTotal.') |  totalPay ('.$totalPay.')');
        }




        /**
         * Updates the total for a given detail ID base on  deleted_at and calculate the current inventory for each product
         *
         * @param integer $id
         * @return void
         */
        public static function updateAmountProduct($id=null,$product_id=null,$product_amount=null){
            if($id!=null){
                $detail    = Detail::withTrashed()->select('*')->where('id',$id)->first();
            }

            if($product_id != null){
                $currentInventory   = Product::select('*')->where('id',$product_id)->first();
            }else{
                $currentInventory   = Product::select('*')->where('id',$detail->product_id)->first();
            }

            if($id!=null){
                if($detail->trashed()){
                    // SoftDelete
                    $finalAmount = ($detail->amount+$currentInventory->amount);                    
                }else{
                    if($product_amount==null){
                        // Undo SoftDelete
                        $finalAmount = ($currentInventory->amount-$detail->amount);                    
                    }else{
                        // Edit
                        if($detail->amount > $product_amount){
                            // dd('Taking out of inventory');
                            $finalAmount = ($currentInventory->amount+($detail->amount-$product_amount));
                        }else{
                            // dd('Returning to inventory');
                            $finalAmount = ($currentInventory->amount-($product_amount-$detail->amount));                    
                        }
                    }
                }
            }else{
                // Add
                $finalAmount = ($currentInventory->amount-$product_amount);                    
            }
            
            Product::where('id',$currentInventory->id)->update(['amount'=>$finalAmount]);
        }
        
        /**
         * For e given date("Y-m-d") returns date("Y-m")
         *
         * @param [date] $date
         * @return void
         */
        public static function removeDayFromDate($date){
            return date("Y-m",strtotime($date));
        }



        /**
        * Set status Active for a given Person id
        *
        * @param [App/Models/Person] $id
        * @return void
        */
        public static function setPersonStatusActive($id){
            Person::where('id',$id)->update(['status'=>'Active']);
        }

        /**
         * Set status Inactive for a given Person id
         *
         * @param [App/Models/Person] $id
         * @return void
         */
        public static function setPersonStatusInactive($id){
            Person::where('id',$id)->update(['status'=>'Inactive']);
        }


        
       
        /**
         * Create a new memberchip invoice for a given Person id or all for the current month
         * For the membership price,it will use the default value
         *
         * @param [App/Models/Person] $id
         * @return void
         */
        public static function setMembershipInvoice($id=null,$all = false){
            if($all){
                    $persons = Person::where('status','active')->get();
                    
                    foreach ($persons as $people) {
                        Helpers::createMembershipInvoice($people->id);
                    }
                    return  header(url('/admin/invoice/'));
            }else{
                if(is_numeric($id) ){
                    $exist = Person::where('id',$id)->first();
                    if($exist){                         
                            return  header( url('/admin/invoice/').'/'.Helpers::createMembershipInvoice($id));
                        }
                }else{
                    dd('invalid');
                }
            }
        }

        /**
         * Shortcut function for setMembershipInvoice
         *
         * @param [App\Models\Person] $id
         * @return [App\Models\Invoice] $id
         */
        public static function createMembershipInvoice($id){
            $personMembership = Membership::select('month')->where('person_id',$id)->orderBy('month', 'desc')->first();
            $invoice = new Invoice;
            $invoice->client_person_id = $id;
            $invoice->status = 0;
            $invoice->seller_user_id = Auth::user()->id;
            $invoice->save();
            
            $membership = new Membership;
            
            if($personMembership !=null){
                // if the person allready has a membership for the current month will create an invoice for the next one
                if($personMembership->month >= date("Y-m") ){
                    $membership->month = date("Y-m-d", strtotime("+1 month", strtotime($personMembership->month) ));
                }else{
                    // if the person DOESNT have a membership for the current month will create one
                    $membership->month = date("Y-m-d H:i:s");
                }
            }

            
            $membership->person_id = $id;
            $membership->invoice_id = $invoice->id;
            $membership->save();

            Helpers::updateTotalInvoice($invoice->id);
            
            return $invoice->id;
    }


    }
?>