@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    {{ $product->name }}
  </div>
  <div class="row">
    <form action="{{ route('cart.store') }}" method="post">
      {{ csrf_field() }}
      <input type="hidden" name="id" value="{{ $product->id }}">
      <input type="hidden" name="name" value="{{ $product->name }}">
      <input type="hidden" name="price" value="{{ $product->price }}">
      <button type="submit" class="button">Add to cart</button>
    </form>
  </div>
  <div class="row">
    <h4>mightAlsoLike</h4>
    @foreach ($mightAlsoLike as $product)
    <a href="{{ route('shop.show', $product->slug) }}">{{$product->name}}</a><br>
    @endforeach
  </div>

</div>

@endsection
