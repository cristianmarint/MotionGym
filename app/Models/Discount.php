<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $table = 'discount';

    protected $fillable = [
        'name',
        'description',
        'percentage'
    ];

    public function detail()
    {
        return $this->hasOne('Detailt');
    }
}
