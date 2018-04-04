<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::inRandomOrder()->take(12)->paginate();
      return view('shop')->with('products', $products);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
      $product = Product::where('slug', $slug)->firstOrFail();
      $mightAlsoLike = Product::where('slug', '!=', $slug)->mightAlsoLike()->get();

      return view('product', compact('product', 'mightAlsoLike'));
    }


}
