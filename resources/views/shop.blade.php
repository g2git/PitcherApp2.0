@extends('layouts.app')

@section('styles')
  <link href="{{ asset('css/shop.css') }}" rel="stylesheet">
@endsection

@section('content')

@component('components.breadcrumbs')
    <a href="/">Home</a>
    <i class="fa fa-chevron-right"></i>
    <span>Search</span>
@endcomponent

<div class="container">
    @if (session()->has('success_message'))
        <div class="alert alert-success">
            {{ session()->get('success_message') }}
        </div>
    @endif

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-2"><!-- product filter -->
      @include('layouts/product-filter')
    </div><!--End product filter -->

    <div class="col-md-8">
      <div class="row">
        <div class="col-md">
          <div class="row">
            <h1 class="my-4">All products</h1>
          </div>
        </div>
        <div class="col-md">
          <div class="col-2">
          <ul><p><h5 class="text-left">Categories</h5></p>
         @foreach($categories as $category)
           <li class="{{ request()->category == $category->slug ? 'active' : '' }}"><a href="{{ route('shop.index', ['category' => $category->slug]) }}">{{ $category->name }}</a></li>
         @endforeach
       </ul>
      </div>
          <div class="btn-group" role="group" aria-label="Basic example">
            <button id="list" type="button" class="btn btn-secondary"><i class="fas fa-align-justify"></i></button>
            <button id="block" type="button" class="btn btn-secondary"><i class="fas fa-th"></i></button>
          </div>
        </div>
      </div>

      <div class="products-header col-7" ><!--Product block -->
        <h2 class="stylish-heading">{{ $categoryName }}</h2>

        @foreach($products as $product)
         <!-- @forelse($products as $product) -->


   <div class="row" id="product_block"><!--Product block -->

            <a href="{{ route('shop.show', $product->slug) }}">
              @if($product->image)
                <img src="{{ asset('storage/'.$product->image) }}" alt="img" class="img-thumbnail">
              @else
                <img src="{{ asset('img/defaults/placeholder_default_350x180.png')}}" alt="img" class="img-thumbnail">
              @endif
            </a>
          <div class="card-body">
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
            @endforeach
            <!-- @empty
        <div class="text-left">No items found</div>
       @endforelse<br><br><br>
           {{ $products->appends(request()->input())->links() }} -->
     </div>
       <div class="text-right col-3">
         <!-- <strong>Price</strong> -->
         <a href="{{ route('shop.index', ['category'=> request()->category, 'sort'=>'high_low']) }}">High to Low</a>|
         <a href="{{ route('shop.index', ['category'=> request()->category, 'sort'=>'low_high']) }}">Low to High</a>
</div>
          </div>
        </div>
      </div>
      <!--End Product block -->

      <div class="row" id="product_list"><!--Prodcut list -->
        <!-- @forelse($products as $product) -->
        @foreach($products as $product)
        <div class="col-lg-12 col-md-12 col-sm-12 mb-3">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">
                <div class="col-md-4">
                    <a href="{{ route('shop.show', $product->slug) }}">
                      @if($product->image)
                        <img src="{{ asset('storage/'.$product->image) }}" alt="img" class="img-thumbnail">
                      @else
                        <img src="{{ asset('img/defaults/placeholder_default_350x180.png')}}" alt="img" class="img-thumbnail">
                      @endif
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
                  <div class="row"> {!! $product->description !!}</div>
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
        <!-- @empty
    <div class="text-left">No items found</div>
   @endforelse<br><br><br>
       {{ $products->appends(request()->input())->links() }} -->
      </div>
      <!--End product list -->

    </div>

<div class="container">
  <!-- Pagination -->
  <div class="row justify-content-center">
  {!!$products->links()!!}
</div>
</div>
<!-- /.container -->

@section('scripts')
<script type="text/javascript" src="{{ asset('js/shop.js') }}"></script>
@endsection
</div>
@endsection
