@extends('layouts.app')

@section('styles')
  <link href="{{ asset('css/shop.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">
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

   <div class="row" id="product_block"><!--Product block -->

           @foreach($products as $product)
           <div class="col-lg-3 col-md-4 col-sm-6">
               <a href="{{ route('shop.show', $product->slug) }}">
                 <img src="{{ asset('img/defaults/placeholder_default_350x180.png')}}" alt="img" class="img-thumbnail">
               </a>
             <div class="card-body">
               <div class="row">


               </div>
               <div class="row"><a href="{{ route('shop.show', $product->slug) }}"><p>{{ $product->name }}</p></a></div>
               <div class="row">
                 <p>
                   <i class="far fa-star"></i>
                   <i class="far fa-star"></i>
                   <i class="far fa-star"></i>
                   <i class="far fa-star"></i>
                   <i class="far fa-star"></i>
                 </p>
               </div>
               <div class="row"> <p>{{ $product->presentPrice() }}</p> </div>
               <div class="row">
                 <div class="btn-group" role="group" aria-label="Basic example">
                   <button type="button" class="btn btn-success">Cart</button>
                   <button type="button" class="btn btn-info">Wishlist</button>
                 </div>
               </div>
             </div>
           </div>
           @endforeach
         </div><!--End Product block -->

         <div class="row" id="product_list"><!--Prodcut list -->
           @foreach($products as $product)
           <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
             <div class="panel panel-default">
               <div class="panel-body">
                 <div class="row">
                   <div class="col-md-4">
                       <a href="{{ route('shop.show', $product->slug) }}">
                         <img src=src="{{ asset('img/defaults/placeholder_default_350x180.png')}}" alt="img" class="img-thumbnail">
                       </a>
                   </div>
                   <div class="col-md-5">
                     <div class="row"><a href="{{ route('shop.show', $product->slug) }}"><p>{{ $product->name }} - {{ $product->presentPrice() }}</p></a></div>
                     <div class="row">
                       <p>
                         <i class="far fa-star"></i>
                         <i class="far fa-star"></i>
                         <i class="far fa-star"></i>
                         <i class="far fa-star"></i>
                         <i class="far fa-star"></i>
                       </p>
                     </div>
                     <div class="row"> {{ $product->description }}</div>
                   </div>
                   <div class="col-md-3">
                     <div class="row"><button type="button" class="btn btn-success">Add to cart</button></div>
                     <div class="row"><button type="button" class="btn btn-info">Add to wishlist</button></div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           @endforeach
         </div><!--End prodcut list -->

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

</div> <!-- end of div row -->
</div> <!-- end of div container-fluid -->
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('js/shop.js') }}"></script>
@endsection
