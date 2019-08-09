<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id',
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
        'brand_id'
    ];
}
