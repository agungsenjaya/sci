@extends('index')
@section('content')

<div class="py-3 bg-dark d-none d-sm-block">
<div class="container text-center small text-white">
<div>
    <p class="m-0 text-uppercase sp-2">dapatkan produk sci paint ditoko bangunan terdekat rumah anda.</p>
</div>
</div>
</div>
<div class="min-vh-100">
  <section class="space-m">
    <div class="container">
    <div class="text-center mb-4">
<h1 class="title-2 text-uppercase mb-0 display-4">Produk Kami</h1>
<p class="lead text-secondary">Sesuaikan Dengan Kebutuhan Pengecatan Anda</p>
</div>
    <div class="card rd-image ">
<div class="container">
<div class="row flex-column-reverse flex-sm-row center-mobile">
<div class="col-md-4 align-self-center d-flex justify-content-center h-100">
<div class="p-3">
<p class="lead text-capitalize">Spectrum cat tembok <br> keluarga indonesia</p>
<div>
<a href="{{ url('/brands/spectrum') }}" class="btn btn-danger rounded-pill">Lihat Produk</a>
</div>
</div>
</div>
<div class="col-md-8 pr-0 bg-white-mobile rd-image-mobile">
<img src="{{ asset('img/pr-1.png') }}" alt="PT SAN CENTRAL INDAH | SCI PAINT" width="100%" class="rd-image">
</div>
</div>
</div>
</div>
    </div>
  </section>
<section class="space-xl border-bottom border-top">
<div class="container">
  <div class="d-flex justify-content-center">
  <div class="media">
    <i class="fab fa-cloudsmith fa-3x mr-2 opacity mr-4"></i>
    <div class="media-body">
      <p class="lead mb-5 text-secondary text-normali">Rekomendasi produk yang kami sarankan <br class="d-none d-sm-block"> untuk pengecatan anda.</p>
  </div>
  </div>
  </div>
<div class="swiper-container slider-1">
<div class="swiper-wrapper">
  @foreach($slide as $slide)
      <a href="{{ $slide->link }}" class="swiper-slide images">
      <img src="{{ $slide->img }}" alt="PT SAN CENTRAL INDAH | SCI PAINT" width="100%" class="">
      <!-- <div class="grad-odd"></div> -->
      <!-- <div class="bottom-right p-4 d-none d-sm-block">
        <div class="btn-danger btn-sm rounded-pill btn px-3">lihat produk</div>
      </div> -->
</a>
      @endforeach
    </div>
    <div class="d-none d-sm-block swiper-button-next">
      <div class="px-1 py-3 bg-danger rounded-left">
      <div class="icons-chevron-right text--white" style="width:20px;height:20px"></div>
    </div>
    </div>
    <div class="d-none d-sm-block swiper-button-prev">
    <div class="px-1 py-3 bg-danger rounded-right">
      <div class="icons-chevron-left text--white" style="width:20px;height:20px"></div>
    </div>
    </div>
    <div class="swiper-pagination d-sm-none d-block"></div>
  </div>

</div>
</section>
<section class="space-m">
<div class="container">
<ul class="nav nav-pills sort-tabs my-5 d-flex col-md-8 offset-md-2" id="pills-tab" role="tablist">
  <li class="nav-item flex-fill" role="presentation">
    <a class="nav-link active" id="pills-kategori-tab" data-toggle="pill" href="#pills-kategori" role="tab" aria-controls="pills-kategori" aria-selected="true">kategori cat</a>
  </li>
  <li class="nav-item flex-fill" role="presentation">
    <a class="nav-link" id="pills-brands-tab" data-toggle="pill" href="#pills-brands" role="tab" aria-controls="pills-brands" aria-selected="false">merek cat</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-kategori" role="tabpanel" aria-labelledby="pills-kategori-tab">
  <div class="row">
@foreach($kategori as $kaka)
<a href="{{ url('/category')}}/{{ $kaka->slug }}" class="col-md-4 mb-4 hvr-float">
<div class="card">
<div class="images">
<img src="{{ $kaka->img }}" alt="PT SAN CENTRAL INDAH | SCI PAINT" width="100%" class="card-img-top">
<div class="grad-img"></div>
</div>
<div class="card-body">
<div class="d-flex justify-content-between">
<div>
<p class="text-uppercase mb-0 sp-2 ">{{ $kaka->judul }}</p>
</div>
</div>
</div>
</div>
</a>
@endforeach

</div>
  </div>
  <div class="tab-pane fade" id="pills-brands" role="tabpanel" aria-labelledby="pills-brands-tab">

  <div class="row">
  <div class="col-md-8 offset-md-2">
  <div class="over-x">
<div class="over-x-res">
  <ul class="list-group list-group-flush">
  @foreach($brands as $brandd)
  <a href="{{ url('/brands')}}/{{ $brandd->slug }}" class="list-group-item">
  <div class="py-2">
  <div class="d-flex justify-content-between">
  <div>
  <p class="text-uppercase sp-2 lead mb-0">
  {{ $brandd->judul }}
  </p>
  </div>
  <div>
  <!-- <img src="{{ asset('icons/chevron-right.svg') }}" alt="PT SAN CENTRAL INDAH | SCI PAINT" width="20" class="opacity"> -->
  </div>
  </div>
  </div>
  </a>
  @endforeach
</ul>
  </div>
  </div>
  </div>
  </div>

  </div>
</div>
</div>
</section>
</div>
@endsection
@section('css')
<style>
  .swiper-pagination{
    position:sticky !important;
    bottom: -15px !important;
    /* margin-bottom:-15px !important; */
  }
</style>
@endsection
@section('js')
<script>
var swiper = new Swiper('.slider-1', {
      loop:true,
      speed: 1000,
      slidesPerView: 2,
      spaceBetween: 20,
      autoplay:true,
      effect:'slide',
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        1024: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
        640: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        320: {
          slidesPerView: 1,
          spaceBetween: 10,
        }
      }
    });

</script>
@endsection
@section('meta')
    <meta property="og:title" content="Produk" />
    <meta property="og:url" content="{{ url('products') }}">
    <meta property="og:description" content="Lengkapi semua kebutuhan cat rumah dan proyek anda bersama kami.">
    <title>Tentang Kami | PT SAN CENTRAL INDAH | SCI PAINT</title>
@endsection