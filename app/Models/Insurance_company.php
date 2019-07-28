<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 15:20:53
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-28 14:23:50
 * @ Description:
 */


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Insurance_company extends Model
{
    protected $table = 'insurance_company';

    use SoftDeletes;

    protected $fillable = [
        'name',
        'identification',
        'type'
    ];

    public function person(){
        return $this->hasOne('Person');
    }
}
