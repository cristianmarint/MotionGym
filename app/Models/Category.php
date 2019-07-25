<?php
/**
 * @ Author: @CristianMarinT
 * @ Create Time: 2019-07-24 16:05:22
 * @ Modified by: @CristianMarinT
 * @ Modified time: 2019-07-24 17:32:01
 * @ Description:
 */


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    protected $fillable = [
        'name',
        'description',
        'category_id'
    ];

    public function product_category()
    {
        return $this->hasOne('Product_category');
    }    

    public function categories()
    {
        return $this->belongsTo('Category','parent_category_id','category_id');
    }

    // [Just in case] Documentacion: https://stackoverflow.com/questions/26652611/laravel-recursive-relationships
}
