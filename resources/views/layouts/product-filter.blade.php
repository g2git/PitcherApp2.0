<div id="accordion">

  <div class="card  mb-2">
    <div class="card-header">
      <a class="card-link" data-toggle="collapse" data-parent="#accordion" href="#categories-menu">
        Categories
      </a>
    </div>
    <div id="categories-menu" class="collapse show">
      <ul class="list-group">
        <li class="list-group-item button" data-filter="shoes">Shoes</li>
        <li class="list-group-item button" data-filter="shirts">Shirts</li>
        <li class="list-group-item button" data-filter="shorts">shorts</li>
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
