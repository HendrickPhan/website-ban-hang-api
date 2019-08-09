<?php

namespace Modules\ProductCategory\Services;

interface ProductCategoryServiceContract
{   
    public function paginate();

    public function find($id);

    public function store($attributes);

    public function update($id, $attributes);

    public function destroy($id);
}