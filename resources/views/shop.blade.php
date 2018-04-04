@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    @foreach($products as $product)
      <a href="{{ route('shop.show', $product->slug) }}">{{$product->name}}</a>
    {{ $product->presentPrice() }}
    @endforeach

  </div>
  
</div>

@endsection
