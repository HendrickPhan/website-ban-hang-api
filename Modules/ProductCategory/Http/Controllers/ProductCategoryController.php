<?php

namespace Modules\ProductCategory\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\ProductCategory\Http\Requests\StoreProductCategoryRequest;
use Modules\ProductCategory\Http\Requests\UpdateProductCategoryRequest;
use Modules\ProductCategory\Services\ProductCategoryServiceContract;
use Modules\ProductCategory\Transformers\ProductCategoryCollection;
use Modules\ProductCategory\Transformers\ProductCategoryResource;

class ProductCategoryController extends Controller
{
    protected $service;

    public function __construct(ProductCategoryServiceContract $productCategoryService)
    {
        $this->service = $productCategoryService;
    }
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {  
        $productCategories = $this->service->paginate();
        return new ProductCategoryCollection($productCategories);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(StoreProductCategoryRequest $request)
    {
        $validated = $request->validated();

        return new ProductCategoryResource(
            $this->service->store($request->all())
        );
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return new ProductCategoryResource($this->service->find($id));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(UpdateProductCategoryRequest $request, $id)
    {
        $validated = $request->validated();

        return new ProductCategoryResource(
            $this->service->update($id, $request->all())
        );
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        return response()->json($this->service->destroy($id));
    }
}
