<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 15:47:49
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-24 16:15:33
 * @ Description:
 */


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = 'detail';

    protected $fillable = [
        'discount_id',
        'product_id',
        'invoice_id',
        'amount'
    ];

    public function refund()
    {
        return $this->hasOne('Refund');
    }

    public function invoice()
    {
        return $this->belongsTo('Invoice');
    }

    public function product()
    {
        return $this->belongsTo('Product');
    }

    public function discount()
    {
        return $this->belongsTo('Discount');
    }
}
