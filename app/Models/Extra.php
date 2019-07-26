<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    protected $table = 'extra';

    protected $fillable = [
        'name',
        'description',
        'percentage'
    ];

    public function detail()
    {
        return $this->hasOne('Detail');
    }
}
