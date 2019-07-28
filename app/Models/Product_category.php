<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product_category extends Model
{
    protected $table = 'product_category';

    use SoftDeletes;

    protected $fillable = [
        'product_id',
        'category_id'
    ];

    public function product()
    {
        return $this->belongsTo('Product');
    }

    public function category()
    {
        return $this->belongsTo('Category');
    }
}
