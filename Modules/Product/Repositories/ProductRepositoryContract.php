<?php

namespace Modules\Product\Repositories;

interface ProductRepositoryContract
{   
    public function paginate();

    public function find($id);

    public function store($attributes);

    public function update($id, $attributes);

    public function destroy($id);
}