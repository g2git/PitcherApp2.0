@extends('layouts.app')

@section('styles')
  <link href="{{ asset('css/shop.css') }}" rel="stylesheet">
@endsection

@section('content')
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
          <div class="btn-group" role="group" aria-label="Basic example">
            <button id="list" type="button" class="btn btn-secondary"><i class="fas fa-align-justify"></i></button>
            <button id="block" type="button" class="btn btn-secondary"><i class="fas fa-th"></i></button>
          </div>
        </div>
      </div>

      <div class="row" id="product_block"><!--Product block -->
        @foreach($products as $product)


        <div class="col-lg-3 col-md-4 col-sm-6">

            <a href="{{ route('shop.show', $product->slug) }}">
              @if($product->image)
                <img src="{{ asset('storage/'.$product->image) }}" alt="img" class="img-thumbnail">
              @else
                <img src="{{ asset('img/defaults/placeholder_default_350x180.png')}}" alt="img" class="img-thumbnail">
              @endif
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
      </div><!--End prodcut list -->

    </div>
    <div class="col-md-2">

    </div>
  </div>
</div>
<div class="container">
  <!-- Pagination -->
  <div class="row justify-content-center">
  {!!$products->links()!!}
</div>
<!-- /.container -->
@endsection
@section('scripts')
<script type="text/javascript" src="{{ asset('js/shop.js') }}"></script>
@endsection
