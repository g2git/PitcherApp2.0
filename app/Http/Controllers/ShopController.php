<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
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
      $pagination = 9;
      $categories = Category::all();
<<<<<<< HEAD
=======

>>>>>>> 13e2931375ecac1bee588203ec36b346b95d720b
      if(request()->category){
         $products = Product::with('categories')->whereHas('categories', function ($query) {
         $query->where('slug', request()->category);
      });
        // $categories = Category::all();
         $categoryName = optional($categories->where('slug', request()->category)->first())->name;
      }else{
         $products = Product::take(12);
         // $categories = Category::all();
         $categoryName = 'Featured';
      }
<<<<<<< HEAD
=======

>>>>>>> 13e2931375ecac1bee588203ec36b346b95d720b
       //If statement to sort the category page by price
      if(request()->sort == 'low_high'){
        $products = $products->orderBy('price')->paginate($pagination);
      }elseif (request()->sort == 'high_low') {
        $products = $products->orderBy('price', 'desc')->paginate($pagination);
      }else{
        $products = $products->paginate($pagination);
      }
<<<<<<< HEAD
=======

>>>>>>> 13e2931375ecac1bee588203ec36b346b95d720b
      return view('shop')->with([
        'products' => $products,
        'categories' => $categories,
        'categoryName' => $categoryName,
      ]);
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

    public function search(Request $request)
    {
    $request->validate([
        'query' => 'required|min:3',
    ]);
    $query = $request->input('query');

    $products = Product::search($query)->paginate(10);
    return view('search-results')->with('products', $products);
    }


}
