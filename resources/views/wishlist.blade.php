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
<h4>{{ Cart::instance('saveForLater')->count() }} item(s) in wishlist</h4>
