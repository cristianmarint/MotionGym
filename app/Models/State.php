<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 15:09:18
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-28 14:24:37
 * @ Description:
 */


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model
{
    protected $table = 'state';

    use SoftDeletes;
    
    protected $fillable =[
      'name'  
    ];

    public function city(){
        return $this->hasOne('City');
    }
}
