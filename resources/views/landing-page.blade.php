@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    @foreach($products as $product)
    <p><a href="{{ route('shop.show', $product->slug) }}">{{$product->name}}</a>
    {{$product->presentPrice() }}</p>
    @endforeach

  </div>
  <div class="row">
    <h4>mightAlsoLike</h4>
    @foreach ($mightAlsoLike as $product)
    <a href="{{ route('shop.show', $product->slug) }}">{{$product->name}}</a><br>
    @endforeach
  </div>
</div>
@endsection
