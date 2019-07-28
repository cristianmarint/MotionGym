<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 15:47:49
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-28 14:23:42
 * @ Description:
 */


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detail extends Model
{
    protected $table = 'detail';

    use SoftDeletes;

    protected $fillable = [
        'extra_id',
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

    public function extra()
    {
        return $this->belongsTo('Extra');
    }
}
