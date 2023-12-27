<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Humans extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'status',
        'identification',
        'identification_type',
        'photo',
        'name',
        'middle_name',
        'first_surname',
        'second_surname',
        'blood_group_rh',
        'city_birth_id',
        'birthdate',
        'address',
        'email',
        'phone',
        'gender',
    ];

    protected array $dates = ['deleted_at'];

    public function cityOfBirth(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(City::class, 'city_birth_id');
    }
}
