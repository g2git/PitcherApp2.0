@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    @if(Cart::count() > 0)
    <h4>{{ Cart::count() }} item(s) in shopping cart</h4>
      @foreach(Cart::content() as $item)
        <h4><a href="{{ route('shop.show', $item->model->slug) }}">{{ $item->name }}</a></h4>
        <h3>{{ $item->model->presentPrice() }}</h3>
        <form action="{{ route('cart.destroy', $item->rowId) }}" method="post">
          {{ csrf_field() }}
          {{ method_field('delete') }}
          <button type="submit" class="btn btn-lg btn-default cart-options">Remove</button>
        </form>
        <form action="{{ route('cart.wishlist', $item->rowId) }}" method="post">
          {{ csrf_field() }}
          <button type="submit" class="btn btn-lg btn-default cart-options">Add to wishlist</button>
        </form>
      @endforeach
      <p>SubTotal: {{ presentPrice(Cart::subtotal()) }}</p>
      <p>tax (21%): {{ presentPrice(Cart::tax()) }}</p>
      <p>Total: {{ presentPrice(Cart::total()) }}</p>
    @else
      <h4>No items in cart</h4>
      <h3><a class="btn btn-info" href="{{ route('shop.index') }}">continue shopping</a></h3>
    @endif


  </div>
  <div class="row">

    Wishlist:
    @if(Cart::instance('saveForLater')->count() > 0)
    <h4>{{ Cart::instance('saveForLater')->count() }} item(s) in wishlist</h4>

      @foreach (Cart::instance('saveForLater')->content() as $item)
      <h4><a href="{{ route('shop.show', $item->model->slug) }}">{{ $item->name }}</a></h4>
      <h3>{{ $item->model->presentPrice() }}</h3>
      <form action="{{ route('wishlist.destroy', $item->rowId) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('delete') }}
        <button type="submit" class="btn btn-lg btn-default cart-options">Remove</button>
      </form>
      <form action="{{ route('wishlist.addtocart', $item->rowId) }}" method="post">
        {{ csrf_field() }}
        <button type="submit" class="btn btn-lg btn-default cart-options">Move to cart</button>
      </form>
      @endforeach

    @else
      <h3>No items in your wishlist</h3>

    @endif
  </div>
  <div class="row">
    <a href="{{ route('shop.index') }}" class="btn btn-info">Continue shopping</a>
    <a href="{{ route('checkout.index') }}" class="btn btn-success">Proceed to checkout</a>
  </div>
  <div class="row">
    <h4>mightAlsoLike</h4>
    @foreach ($mightAlsoLike as $product)
      <h3><a href="{{ route('shop.show', $product->slug) }}">{{ $product->name }}</a></h3>
    @endforeach
  </div>
</div>
@endsection
