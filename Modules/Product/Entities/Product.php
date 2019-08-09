<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\ProductCategory\Entities\ProductCategory;

class Product extends Model
{
    protected $fillable = [
        'id',
        'brand_id',
        'category_id',
        'name',
        'slug',
        'avatar',
        'description',
        'price',
        'discount_price',
        'stock',
        'status',
        'seo_description',
        'seo_title',
    ];

    public function Category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }
}
