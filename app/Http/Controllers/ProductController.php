<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::get();

        if($product->count() >0)
        {
             return ProductResource::collection($product);
       


        }
        else
        {

            return response()->json(['message'=>'No records found'],200);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();

            $product->name        = $request->name;
            $product->content     = $request->content;
            $product->qty         = $request->qty;
            // $product->created_at  = $request->created_at;
            // $product->updated_at  = $request->updated_at;


            // $customer->remarks         = $request->remarks;
            // $customer->status          = $request->status;
            // $customer->created_by = $request->created_by;
            // $customer->updated_by = $request->updated_by;
            // $customer->created_at      = $request->created_at;
            // $customer->updated_at      = $request->updated_at;
            // $customer->deleted_by      = $request->deleted_by;
            // $customer->deleted_date    = $request->deleted_date;

            $product->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
