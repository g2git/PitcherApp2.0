<?php

namespace App\Http\Controllers;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $mightAlsoLike = Product::mightAlsoLike()->get();
        return view('cart', compact('mightAlsoLike'));
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
      $duplicates = Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id === $request->id;
        });
        if ($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->with('success', 'Item is already in your cart!');
        }

        Cart::add($request->id, $request->name, 1, $request->price)->associate('App\Product');

        return redirect()->route('cart.index')->with('success', 'Item added to your cart');
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
        Cart::remove($id);

        return back()->with('success','Item has been removed!');
    }

    public function wishlist($id)
    {
        $item = Cart::get($id);

        Cart::remove($id);

        Cart::instance('saveForLater')->add($item->id, $item->name, 1, $item->price)->associate('App\Product');

        return redirect()->route('cart.index')->with('success', 'Item had been saved in your wishlist');
    }
}
