<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 15:09:18
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-24 15:47:32
 * @ Description:
 */


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'state';
    
    protected $fillable =[
      'name'  
    ];

    public function city(){
        return $this->hasOne('City');
    }
}
