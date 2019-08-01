<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Extra extends Model
{
    protected $table = 'extra';

    use SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'description',
        'percentage'
    ];

    public function detail()
    {
        return $this->hasOne('Detail');
    }

    public function membership()
    {
        return $this->hasOne('Membership');
    }
}
