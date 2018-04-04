@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/productpage/related-product-slider.css') }}" type="text/css" rel="stylesheet">
@endsection

@section('content')
<div class="container">

  <!-- New product slider -->
  <br>
    <p> <h3 style="text-align:center;">You might also like</h3> </p>
  <div class="row mx-auto my-auto">
      <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
          <div class="carousel-inner w-100" role="listbox">
            @foreach ($mightAlsoLike as $key=>$product)
              <div class="carousel-item {{ ($key == 0) ? "active" : ""}} mx-2" >
                <a class="d-block col-3 img-fluid" href="{{ route('shop.show', $product->slug) }}">
                  <img style="width:100%;" src="{{ asset('img/defaults/placeholder_default_350x180.png')}}"></a>
              </div>
              @endforeach
          </div>
          <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
          </a>
      </div>
    </div>


  <div class="row">

    <!-- Page Heading -->
    <h1 class="my-4">Page Heading
      <small>Secondary Text</small>
    </h1>

    <div class="row">
      <div class="col-lg-4 col-sm-6 portfolio-item mt-5">
        <div class="card h-100">
          <h4 class="card-title">
            <a href="#">Category One</a>
          </h4>
          <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>

        </div>
      </div>

  </div>
  </div>

  @section('scripts')
<script type="text/javascript" src="{{ asset('js/homepage/mightalsolike-product-slider.js') }}"></script>
@endsection


</div>
@endsection
