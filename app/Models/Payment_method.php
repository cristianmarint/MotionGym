<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 15:53:51
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-28 14:24:00
 * @ Description:
 */


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment_method extends Model
{
    protected $table = 'payment_method';
    
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description'
    ];

    public function invoice()
    {
        return $this->hasOne('Invoice');
    }
}
