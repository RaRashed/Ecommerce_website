<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProducts;
use App\Http\Requests\UpdateProductsRequest;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        return view('products.index')->with('products',Product::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProducts $request)
    {

        $image= $request->image->store('products');

       $post = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $image



        ]);


        return redirect(route('products.index'))->with('status', 'Product Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

        return view('products.edit')->with('product',$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductsRequest $request, Product $product)
    {
        $data = $request->only(['name','description']);
        //Check if new image
        if($request->hasFile('image')){
             //upload it
             $image= $request->image->store('products');
             //delete old image
             $product->deleteImage();
             $data['image'] = $image;


        }

        $product->update($data);

        return redirect(route('products.index'))->with('status', 'Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($product)
    {

        $product=Product::find($product);


            $product->delete();

        return redirect(route('products.index'))->with('status', 'Post Deleted Successfully');
    }
}
