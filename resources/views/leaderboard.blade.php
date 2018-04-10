@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/leaderboard.css') }}" type="text/css" rel="stylesheet">
@endsection

@section('content')


  <div class='slider row'>
    <div class='col movie'>
        <a href="{{ route('shop.index') }}">
    <img src="{{ asset('img/Stockimages/Boutique-Jimmy-Choo-Anouk-120mm-Escarpins-Noirs-Ornes-De-Clous-en-Cuir-Floque-et-Bout-Pointu-Femme-En-Ligne.jpg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/Stockimages/flame-metal-leaf-wing-high-heel-sandals-gold.jpg') }}" alt="img" class="img-thumbnail">
  </a>
</div>
<div class='col movie'>
  <a href="{{ route('shop.index') }}">
<img src="{{ asset('img/Stockimages/rBVaI1j17_KAXe4TAAC2X_EA_P0467.jpg') }}" alt="img" class="img-thumbnail">
</a>
</div>
<div class='col movie'>
  <a href="{{ route('shop.index') }}">
<img src="{{ asset('img/Stockimages/shopping.jpeg') }}" alt="img" class="img-thumbnail">
</a>
</div>
<div class='col movie'>
  <a href="{{ route('shop.index') }}">
<img src="{{ asset('img/Stockimages/Tods-lady-shoes-orange-166.jpg') }}" alt="img" class="img-thumbnail">
</a>
</div>
<div class='col movie'>
  <a href="{{ route('shop.index') }}">
<img src="{{ asset('img/Stockimages/shopping1.jpeg') }}" alt="img" class="img-thumbnail">
</a>
</div>
  </div>

<!-- new slider -->
  <div class='slider row' id='slider2'>
    <div class='col movie'>
        <a href="{{ route('shop.index') }}">
    <img src="{{ asset('img/Stockimages/Boutique-Jimmy-Choo-Anouk-120mm-Escarpins-Noirs-Ornes-De-Clous-en-Cuir-Floque-et-Bout-Pointu-Femme-En-Ligne.jpg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/Stockimages/-brown-leather-derby-shoes.jpg') }}" alt="img" class="img-thumbnail">
  </a>
</div>
<div class='col movie'>
  <a href="{{ route('shop.index') }}">
<img src="{{ asset('img/Stockimages/-brown-leather-derby-shoes1.jpg') }}" alt="img" class="img-thumbnail">
</a>
</div>
<div class='col movie'>
  <a href="{{ route('shop.index') }}">
<img src="{{ asset('img/Stockimages/1201797_1.jpg') }}" alt="img" class="img-thumbnail">
</a>
</div>
<div class='col movie'>
  <a href="{{ route('shop.index') }}">
<img src="{{ asset('img/Stockimages/1201798_1.jpg') }}" alt="img" class="img-thumbnail">
</a>
</div>
<div class='col movie'>
  <a href="{{ route('shop.index') }}">
<img src="{{ asset('img/Stockimages/Jimmy-Choo-Luna-100mm-Escarpins-a-Plateforme-en-Lame-Gris-Anthracite-Paillete-Femme-Nouvelle-500x500.jpg') }}" alt="img" class="img-thumbnail">
</a>
</div>
  </div>

  <!-- new slider -->
  <div class='slider row'>
    <div class='col movie'>
        <a href="{{ route('shop.index') }}">
    <img src="{{ asset('img/Stockimages/Boutique-Jimmy-Choo-Anouk-120mm-Escarpins-Noirs-Ornes-De-Clous-en-Cuir-Floque-et-Bout-Pointu-Femme-En-Ligne.jpg') }}" alt="img" class="img-thumbnail">
  </a>
  </div>
  <div class='col movie'>
    <a href="{{ route('shop.index') }}">
  <img src="{{ asset('img/Stockimages/flame-metal-leaf-wing-high-heel-sandals-gold.jpg') }}" alt="img" class="img-thumbnail">
  </a>
</div>
<div class='col movie'>
  <a href="{{ route('shop.index') }}">
<img src="{{ asset('img/Stockimages/rBVaI1j17_KAXe4TAAC2X_EA_P0467.jpg') }}" alt="img" class="img-thumbnail">
</a>
</div>
<div class='col movie'>
  <a href="{{ route('shop.index') }}">
<img src="{{ asset('img/Stockimages/shopping.jpeg') }}" alt="img" class="img-thumbnail">
</a>
</div>
<div class='col movie'>
  <a href="{{ route('shop.index') }}">
<img src="{{ asset('img/Stockimages/Tods-lady-shoes-orange-166.jpg') }}" alt="img" class="img-thumbnail">
</a>
</div>
<div class='col movie'>
  <a href="{{ route('shop.index') }}">
<img src="{{ asset('img/Stockimages/shopping1.jpeg') }}" alt="img" class="img-thumbnail">
</a>
</div>
  </div>
@endsection
