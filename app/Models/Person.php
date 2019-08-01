<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 15:22:12
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-31 19:55:01
 * @ Description:
 */


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    protected $table = 'person';

    use SoftDeletes;

    protected $fillable = [
        'insurance_company_id',
        'city_birth_id',
        'identification',
        'identification_type',
        'photo',
        'name',
        'middle_name',
        'first_surname',
        'second_surname',
        'blood_group_rh',
        'birthdate',
        'address',
        'email',
        'phone',
        'gender'
    ];

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function invoice()
    {
        return $this->hasOne('Invoice');
    }

    public function membership()
    {
        return $this->hasOne('Membership');
    }
    
    public function insurance_company()
    {
        return $this->belongsTo('Insurance_company');
    }

    public function city()
    {
        return $this->belongsTo('City');
    }

}
