<?php

namespace Modules\ProductCategory\Transformers;

use Illuminate\Http\Resources\Json\Resource;

class ProductCategoryResource extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
