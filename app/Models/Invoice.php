<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 15:26:17
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-31 19:54:23
 * @ Description:
 */


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    protected $table = 'invoice';
    
    use SoftDeletes;

    protected $fillable = [
        'created_at',
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

    public function membership()
    {
        return $this->hasOne('Membership');
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
