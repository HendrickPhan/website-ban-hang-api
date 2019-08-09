<?php

namespace Modules\ProductCategory\Services;
use Modules\ProductCategory\Services\ProductCategoryServiceContract;
use Modules\ProductCategory\Repositories\ProductCategoryRepositoryContract;

class ProductCategoryService implements ProductCategoryServiceContract
{   
    protected $repository;
    
    public function __construct(ProductCategoryRepositoryContract $productCategoryRepository)
    {
        $this->repository = $productCategoryRepository;
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