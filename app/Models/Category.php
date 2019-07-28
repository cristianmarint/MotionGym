<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 16:05:22
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-28 14:23:35
 * @ Description:
 */


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    protected $table = 'category';

    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'category_id',
        'parent_category_id'
    ];

    public function product_category()
    {
        return $this->hasOne('Product_category');
    }    

    public function parent()
    {
        return $this->belongsTo('Category','parent_category_id');
    }
    // [Just in case] Documentacion: https://stackoverflow.com/questions/26652611/laravel-recursive-relationships
}
