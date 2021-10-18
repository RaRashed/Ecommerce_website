<?php

namespace App\Http\Controllers;

use App\Product;
use Cart;
use Darryldecode\Cart\Cart as CartCart;
use Validator;
use Illuminate\Http\Request;

class FrontendController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        return view('index')->with('products',Product::paginate(2));

    }

    public function singleProduct(Product $product)
    {
        return view('frontend.single-product')->with('product',$product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function cartadd()
    {

    $product = Product::find(request()->pdt_id);

    $cartItem = \Cart::add([
        'id' => $product->id,
        'name' => $product->name,
        'quantity' => request()->qty,
        'price' =>$product->price,
        'image' => $product->image,
        'associatedModel' => $product

    ]);
    //dd(Cart::getContent());
   // \Cart::associate($cartItem->rowId,'App\Product');


    return redirect()->back();


    }

    public function cartitem()
    {

    $product = Product::find(request()->pdt_id);

    $cartItem = \Cart::add([
        'id' => $product->id,
        'name' => $product->name,
        'quantity' => request()->qty,
        'price' =>$product->price,
        'image' => $product->image,
        'associatedModel' => $product

    ]);
    //dd(Cart::getContent());
   // \Cart::associate($cartItem->rowId,'App\Product');


    return redirect()->route('cart.show');


    }

    public function cartshow()
    {


       //Cart::clear();
        return view('frontend.cart');




    }
    public function cart_delete($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }

    public function incr($id,$quantity)

    {
        \Cart::update($id, array('quantity' => array(
            'relative' => false,
            'value' => request()->quantity+1
        ), ));

        return back();
    }
    public function decr($id,$quantity)
    {
        \Cart::update($id, array('quantity' => array(
            'relative' => false,
            'value' => request()->quantity-1
        ), ));

        return back();
    }
    public function checkout()
    {
        return view('frontend.checkout');
    }
}
