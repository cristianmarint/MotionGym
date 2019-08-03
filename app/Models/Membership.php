<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Membership extends Model
{
    use SoftDeletes;

    protected $table = 'membership';
    
    protected $fillable = [
        'person_id',
        'invoice_id',
        'month',
        'price'
    ];

    public function person()
    {
        return $this->belongsTo('Person');
    }

    public function extra()
    {
        return $this->belongsTo('Extra');
    }

    public function invoice()
    {
        return $this->belongsTo('Invoice');
    }
}
