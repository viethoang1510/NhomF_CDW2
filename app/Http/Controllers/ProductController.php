<?php

namespace App\Http\Controllers;

use App\CategoryModel;
use App\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = ProductModel::all();

        return view('pages.product.list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $categories = CategoryModel::all();
        return view('pages.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product = new ProductModel;

        $file = $request->has('product_image') ? $request->file('product_image') : null;
        $path = is_null($file) ? null : $file->storeAs('uploads', $file->getClientOriginalName(), 'public');

        $product->image = $path;
        $product->name = $request->product_name;
        $product->price = $request->product_price;
        $product->description = $request->product_desc;
        $product->save();

        $product->categories()->attach($request->category_id);
        return redirect()->route('manage-product.index')->with(
            ['success' => 'Add new product success']
        );

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categories = CategoryModel::all();
        $product = ProductModel::find($id);

        return view('pages.product.update', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $product = ProductModel::find($id);
        $file = $request->has('product_image') ? $request->file('product_image') : null;
        $path = is_null($file) ? null : $file->storeAs('uploads', $file->getClientOriginalName(), 'public');

        $product->image = $path;
        $product->name = $request->product_name;
        $product->price = $request->product_price;
        $product->description = $request->product_desc;
        $product->save();

        $catId = $product->categories[0]->id;

        $product->categories()->updateExistingPivot($catId,[
          'category_id'=> $request->category_id,
        ]);

        return redirect()->route('manage-product.index')->with(
            ['success' => 'Update product success']
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $product = ProductModel::find($id);
        $product->categories()->detach($id);
        $product->delete();
        return redirect()->route('manage-product.index')->with([
            'success' => 'Delete product success']);
    }
}
