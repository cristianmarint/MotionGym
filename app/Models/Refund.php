<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 15:55:22
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-24 16:14:35
 * @ Description:
 */


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    protected $table = 'refund';

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
