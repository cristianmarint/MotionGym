<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 15:26:17
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-24 15:55:05
 * @ Description:
 */


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $table = 'invoice';

    protected $fillable = [
        'client_person_id',
        'seller_user_id',
        'payment_method_id',
        'status',
        'total'
    ];

    public function detail()
    {
        return $this->hasOne('Detail');
    }

    public function client_person()
    {
        return $this->belongsTo('Person');
    }

    public function seller_user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function payment_method()
    {
        return $this->belongsTo('Payment_method');
    }
}
