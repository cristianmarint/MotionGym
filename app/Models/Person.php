<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 15:22:12
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-24 16:14:23
 * @ Description:
 */


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'person';

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

    public function insurance_company()
    {
        return $this->belongsTo('Insurance_company');
    }

    public function city()
    {
        return $this->belongsTo('City');
    }

    public function user()
    {
        return $this->hasOne('App\User');
    }

    public function invoice()
    {
        return $this->hasOne('Invoice');
    }
}
