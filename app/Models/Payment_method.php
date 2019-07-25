<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 15:53:51
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-24 16:14:15
 * @ Description:
 */


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment_method extends Model
{
    protected $table = 'payment_method';

    protected $fillable = [
        'name',
        'description'
    ];

    public function invoice()
    {
        return $this->hasOne('Invoice');
    }
}
