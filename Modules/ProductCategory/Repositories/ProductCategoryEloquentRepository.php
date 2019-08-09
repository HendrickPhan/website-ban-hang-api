<?php

namespace Modules\ProductCategory\Repositories;

use Modules\ProductCategory\Repositories\ProductCategoryRepositoryContract;
use Modules\ProductCategory\Entities\ProductCategory;

class ProductCategoryEloquentRepository implements ProductCategoryRepositoryContract
{   
    protected $productCategory;

    public function __construct(ProductCategory $productCategory)
    {
        $this->productCategory = $productCategory;
    }

    public function paginate()
    {
        return $this->productCategory->paginate();
    }

    public function find($id)
    {
        return $this->productCategory->findOrFail($id);
    }

    public function store($attributes)
    {
        return $this->productCategory->create($attributes);
    }

    public function update($id, $attributes)
    {
        $productCategory = $this->find($id);
        return $productCategory->update($attributes);
    }

    public function destroy($id)
    {
        $productCategory = $this->find($id);
        return $productCategory->delete();
    }

}