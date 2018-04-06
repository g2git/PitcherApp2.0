<div id="accordion">

  <div class="card  mb-2">
    <div class="card-header">
      <a class="card-link" data-toggle="collapse" data-parent="#accordion" href="#categories-menu">
        Categories
      </a>
    </div>
    <div id="categories-menu" class="collapse show">
      <ul class="list-group">
        @foreach($categories as $category)
          <li class="{{ request()->category == $category->slug ? 'active' : '' }}"><a href="{{ route('shop.index', ['category' => $category->slug]) }}">{{ $category->name }}</a></li>
     @endforeach
      </ul>

    </div>
  </div>


  <div class="card  mb-2">
    <div class="card-header">
      <a class="collapsed card-link" data-toggle="collapse" data-parent="#accordion" href="#price-menu">
        Price
      </a>
    </div>
    <div id="price-menu" class="collapse">
      <div class="card-body">
        <p><input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;"></p>
        <div id="slider-range"></div>
      </div>
    </div>
  </div>

</div>
