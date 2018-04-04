@foreach($product->sizes as $size)
  <option value="{{ $size->id }}">{{ $size->name }} </option>
@endforeach

@foreach($product->colors as $color)
  <option value="{{ $color->id }}">{{ $color->name }} </option>
@endforeach

@foreach ($mightAlsoLike as $product)
<div class="carousel-item">
    <img class="d-block col-3 img-fluid" src="http://placehold.it/350x180?text=6">
<!-- <a href="{{ route('shop.show', $product->slug) }}">{{$product->name}}</a> -->
</div>
@endforeach

<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
         <?php foreach($slider_info as $key=>$slider) { ?>

            <div class="item <?php echo ($key == 0) ? "active" : ""; ?> ">
                <img style="height: 300px;width:100%;" src="<?php  echo $slider['file_name']; ?>" height="100" alt="Image of every carousel"/>
           </div>

        <?php } ?>
        </div>
        </div>














        <div id="myCarousel" class="carousel slide" data-ride="carousel">
           <!-- Indicators -->
           <ol class="carousel-indicators">
             <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
             <li data-target="#myCarousel" data-slide-to="1"></li>
             <li data-target="#myCarousel" data-slide-to="2"></li>
             <li data-target="#myCarousel" data-slide-to="3"></li>
             <li data-target="#myCarousel" data-slide-to="4"></li>
             <li data-target="#myCarousel" data-slide-to="5"></li>
           </ol>
           <div class="carousel-inner">
             @foreach ($mightAlsoLike as $key=>$product)
             <div class="item <?php echo ($key == 0) ? "active" : ""; ?> ">
                <img style="height: 30%;width:100%;" src="http://placehold.it/350x180?text=2" height="100" alt="Image of every carousel"/>
           </div>
             @endforeach
           </div>
           <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
         </div>
