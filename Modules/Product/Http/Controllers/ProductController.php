<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Product\Http\Requests\StoreProductRequest;
use Modules\Product\Http\Requests\UpdateProductRequest;
use Modules\Product\Services\ProductServiceContract;
use Modules\Product\Transformers\ProductCollection;
use Modules\Product\Transformers\ProductResource;

class ProductController extends Controller
{
    protected $service;

    public function __construct(ProductServiceContract $productService)
    {
        $this->service = $productService;
    }
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $products = $this->service->paginate();
        return new ProductCollection($products);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(StoreProductRequest $request)
    {
        $validated = $request->validated();

        return new ProductResource(
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
        return new ProductResource($this->service->find($id));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(UpdateProductRequest $request, $id)
    {
        $validated = $request->validated();

        return new ProductResource(
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
