<?php

namespace Modules\Product\Repositories;

use Modules\Product\Repositories\ProductRepositoryContract;
use Modules\Product\Entities\Product;

class ProductEloquentRepository implements ProductRepositoryContract
{   
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function paginate()
    {
        return $this->product->paginate();
    }

    public function find($id)
    {
        return $this->product->findOrFail($id);
    }

    public function store($attributes)
    {
        return $this->product->create($attributes);
    }

    public function update($id, $attributes)
    {
        $product = $this->find($id);
        return $product->update($attributes);
    }

    public function destroy($id)
    {
        $product = $this->find($id);
        return $product->delete();
    }

}