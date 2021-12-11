<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    //
    protected $table = 'products';
    protected $fillable = [
        'name', 'price', 'image', 'description', 'created_at', 'updated_at',
    ];
    public function categories(){
        return $this->belongsToMany(CategoryModel::class,'category_product','product_id','category_id')->withTimestamps();
    }
}
