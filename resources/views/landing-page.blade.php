@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/productpage/related-product-slider.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/leaderboard.css') }}" type="text/css" rel="stylesheet">
@endsection

@section('content')



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

<div class="container">

  <!-- New product slider -->
  <br>
    <p> <h3 style="text-align:center;">@lang('messages.newproducts')</h3> </p>
  <div class="row mx-auto my-auto">
      <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
          <div class="carousel-inner w-100" role="listbox">
            @foreach ($products as $key=>$product)
              <div class="carousel-item {{ ($key == 0) ? "active" : ""}}" >
                <a class="d-block col-3 img-fluid" href="{{ route('shop.show', $product->slug) }}">
                  <img style="width:100%; height:200px" src="{{ asset('storage/'.$product->image) }}"></a>
              </div>
              @endforeach
          </div>
          <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">@lang('messages.previous')</span>
          </a>
          <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">@lang('messages.next')</span>
          </a>
      </div>
    </div>

    <!-- Page Heading -->
    <h1 class="mt-5">
      @lang('messages.instock')
    </h1>
    <div class='slider row'>
      <div class='col movie'>
          <a href="{{ route('shop.index') }}">
      <img src="{{ asset('img/products/bags.jpeg') }}" alt="img" class="img-thumbnail">
    </a>
    </div>
    <div class='col movie'>
      <a href="{{ route('shop.index') }}">
    <img src="{{ asset('img/products/bags1.jpeg') }}" alt="img" class="img-thumbnail">
    </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/bags2.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/bags3.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/bags4.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/bags5.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/bags6.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/bags7.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/bags8.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/bags9.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/bags10.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/bags11.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/bags12.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/bags13.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/bags14.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/bags15.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/bags16.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/bags17.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/bags18.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
    </div>

  <!-- new slider -->
    <div class='slider row' id='slider2'>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/dia-shopping.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/dia-shopping1.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/dia-shopping2.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/dia-shopping3.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/dia-shopping4.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/dia-shopping5.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/dia-shopping6.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/dia-shopping7.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/dia-shopping8.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/dia-shopping9.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/dia-shopping10.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/dia-shopping11.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/dia-shopping12.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/dia-shopping13.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/dia-shopping14.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/dia-shopping15.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/dia-shopping16.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/dia-shopping17.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/dia-index.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
    </div>

    <!-- new slider -->
    <div class='slider row'>
      <div class='col movie'>
          <a href="{{ route('shop.index') }}">
      <img src="{{ asset('img/products/shoel.jpg') }}" alt="img" class="img-thumbnail">
    </a>
    </div>
    <div class='col movie'>
      <a href="{{ route('shop.index') }}">
    <img src="{{ asset('img/products/shoel1.jpg') }}" alt="img" class="img-thumbnail">
    </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/shoel2.jpg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/shoel3.jpg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/shoel4.jpg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/shoel5.jpg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/shoel6.jpg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/shoel7.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/shoel8.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/shoel9.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/shoel10.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/shoel11.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/shoel12.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/shoel13.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/shoel14.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/shoel15.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/shoel16.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/shoel17.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/products/shoel18.jpeg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
    </div>


</div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/homepage/mightalsolike-product-slider.js') }}"></script>
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->

@endsection
