@extends('layouts.app')
@php
function ress($data){
    $a = strlen($data);
    switch ($a) {
        case 1:
            echo '0' . $data;
            break;
        case 2:
            echo $data;
            break;
        case 3:
            echo $data;
            break;
        default:
            echo $data;
            break;
    }
}
@endphp
@section('content')
<div class="card-deck">
  <div class="card bg-primary text-white">
    <div class="card-header">
      <i class="bi bi-archive me-2"></i>Total produk
    </div>
    <div class="card-body">
      <h2>{{ ress(count($product)) }}</h2>
      <p class="card-text">Berikut total produk yang teindeks sistem</p>
    </div>
  </div>
  <div class="card bg-primary text-white">
  <div class="card-header">
      <i class="bi bi-bookmark-plus me-2"></i>Total Merek
    </div>
    <div class="card-body">
      <h2>{{ ress(count($brand)) }}</h2>
      <p class="card-text">Berikut total brands yang teindeks sistem</p>
    </div>
  </div>
  <div class="card bg-primary text-white">
  <div class="card-header">
      <i class="bi bi-collection me-2"></i>Total artikel
    </div>
    <div class="card-body">
      <h2>{{ ress(count($artikel)) }}</h2>
      <p class="card-text">Berikut total artikel yang teindeks</p>
    </div>
  </div>
  
</div>
<section class="space-m">
  <div class="container">
    <h6 class="title-6 text-uppercase mb-4">Produk Terbaru</h6>
    <div class="card-deck">
      @foreach($products->reverse()->take(4) as $pro)
  <a class="card rising text-dark" href="{{ route('products.view',['slug' => $pro -> slug]) }}" target="_blank">
    <img src="{{ $pro->img }}" class="card-img-top" alt="...">
    <div class="card-body">

    <div class="badge bg-light text-secondary mb-3 w-100">{{ $pro->kategori->judul }}</div>
    <h5 class="card-title title-5 text-uppercase">{{ $pro->judul }}</h5>
    <p class="card-text ">{{ substr($pro->content, 0,50) }}..</p>
      
    </div>
    <div class="card-footer p-0 bg-primary text-center">
      <div class="btn text-white">Lihat Produk</div>
    </div>
</a>
  @endforeach
</div>
  </div>
</section>
@endsection
