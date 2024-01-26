<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductOption;
use App\Models\ProductSize;
use Illuminate\Http\Request;

class ProductSizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($productId)
    {
        $product = Product::findOrFail($productId);
        $sizes = ProductSize::where('product_id', $productId)->get();
        $options = ProductOption::where('product_id', $productId)->get();
        return view('admin.product-size.index', compact('product', 'sizes', 'options'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'price' => ['required', 'numeric'],
            'product_id' => ['required', 'integer']
        ],[
            'name.required' => 'Product Size Name is Required',
            'name.max' => 'Product Size Name max Length must be 255 char',
            'price.required' => 'Product Size Price Is Required',
            'price.numeric' => 'Product Size Price must be Numeric',
        ]);

        $size = new ProductSize();

        $size->product_id = $request->product_id;
        $size->name = $request->name;
        $size->price = $request->price;
        $size->save();

        toastr()->success('Size Added Successfully');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $size = ProductSize::findOrFail($id);
            $size->delete();

            return response(['status' => 'success', 'message' => 'Size Deleted Successfully']);
        } catch (\Exception $e) {
            return response(['status' => 'error', 'message' => 'Something went Wrong']);
            //return response(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }
}
