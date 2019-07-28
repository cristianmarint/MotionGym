<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 15:55:22
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-28 14:24:25
 * @ Description:
 */


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Refund extends Model
{
    protected $table = 'refund';

    use SoftDeletes;

    protected $fillable = [
        'detail_id',
        'reason',		
        'description',			
        'amount',
        'date'
    ];

    public function detail()
    {
        return $this->belongsTo('Detail');
    }
}
