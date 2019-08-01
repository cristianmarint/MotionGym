<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    protected $table = 'service';

    use SoftDeletes;

    protected $fillable = [
        'name',
        'photo',
        'description',
        'price'
    ];
}
