@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-2">
    <ul><p><h5 class="text-left">Categories</h5></p>
   @foreach($categories as $category)
     <li class="{{ request()->category == $category->slug ? 'active' : '' }}"><a href="{{ route('shop.index', ['category' => $category->slug]) }}">{{ $category->name }}</a></li>
   @endforeach
 </ul>
</div>

    <div class="products-header col-7">
       <h2 class="stylish-heading">{{ $categoryName }}</h2>
       @forelse($products as $product)
         <!-- <a href="{{ route('shop.show', $product->slug) }}">{{$product->name}}</a> -->
       <div class="row">
         <div class="col-3 text-right">
         <img src="http://placehold.it/700x400" alt="img" class="img-thumbnail">
         <div class="card-body">
           <div class="row"> <p>{{ $product->name }}</p> </div>
           <div class="row"> <p>{{ $product->presentPrice() }}</p> </div>
         </div>
       </div>
     </div>
       <!-- {{ $product->presentPrice() }} -->
       @empty
        <div class="text-left">No items found</div>
       @endforelse<br><br><br>
           {{ $products->appends(request()->input())->links() }}
     </div>
       <div class="text-right col-3">
         <strong>Price</strong>
         <a href="{{ route('shop.index', ['category'=> request()->category, 'sort'=>'high_low']) }}">High to Low</a>|
         <a href="{{ route('shop.index', ['category'=> request()->category, 'sort'=>'low_high']) }}">Low to High</a>
       </div>
    </div>
</div>


  </div>

</div>

@endsection
