<?php

namespace Modules\Product\Services;
use Modules\Product\Services\ProductServiceContract;
use Modules\Product\Repositories\ProductRepositoryContract;

class ProductService implements ProductServiceContract
{   
    protected $repository;
    
    public function __construct(ProductRepositoryContract $productRepository)
    {
        $this->repository = $productRepository;
    }

    public function paginate()
    {
        return $this->repository->paginate();
    }

    public function find($id)
    {
        return $this->repository->find($id);
    }

    public function store($attributes)
    {
        return $this->repository->store($attributes);
    }

    public function update($id, $attributes)
    {
        return $this->repository->update($id, $attributes);
    }
    
    public function destroy($id)
    {
        return $this->repository->destroy($id);
    }
}