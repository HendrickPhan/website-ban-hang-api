<?php

namespace Modules\ProductCategory\Entities;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class ProductCategory extends Model
{
    use NodeTrait;

    protected $fillable = [
        'id',
        'name',
        'slug',
        'avatar',
        'description',
        'seo_title',
        'seo_description',
        '_lft',
        '_rgt',
        'parent_id'
    ];
}
