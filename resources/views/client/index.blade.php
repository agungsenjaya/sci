@extends('index')
@section('content')
<section>
  <div class="swiper slider-home">
    <div class="swiper-wrapper">
    @foreach($slider->take(3)->reverse() as $slid)
        <div class="swiper-slide">
          <a href="{{ $slid->link }}" target="_blank">
            <div class="d-sm-block d-none">
              <img src="{{ $slid->img }}" alt="" width="100%">
            </div>
            <div class="d-block d-sm-none">
              <img src="{{ $slid->img_mobile }}" alt="" width="100%">
            </div>
          </a>
        </div>
    @endforeach
  </div>
  <!-- <div class="swiper-pagination"></div> -->
  </div>
</section>
<section class="space-m d-none d-sm-block">
  <div class="container">
    <div class="text-center">
      <h2 class="text-uppercase title-5 mb-0">Instagram Post</h2>
      <p class="lead">Dapatkan berita dan promo dari kami</p>
    </div>
  <!-- <div class="elfsight-app-215691ae-90cd-48d1-b0db-64a4961e53bc"></div> -->
  <div
  loading="lazy"
  data-mc-src="d1d68db6-5765-4fc6-9d2d-24d688db1b36#instagram"></div>
  </div>
</div>
</section>
@endsection
@section('css')
<style>
  .Main__Inner-sc-1241y56-0 > a , .eapps-widget-toolbar {
    display: none !important;
  }
</style>
@endsection
@section('js')
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
  <script 
    src="https://cdn2.woxo.tech/a.js#61ef6a05e71b260028e66662" 
    async data-usrc>
  </script>
  <script>
        var swiper = new Swiper(".slider-home", {
          autoplay: true,
          loop:true,
            pagination: {
              clickable: true,
            el: ".swiper-pagination",
            },
        });
  </script>
@endsection
@section('meta')
    <meta property="og:title" content="PT SAN CENTRAL INDAH | SCI PAINT" />
    <meta property="og:url" content="{{ url('') }}">
    <meta property="og:image" content="{{ asset('img/bg-meta.jpg') }}">
    <meta property="og:description" content="PT. San Central Indah (SCI Paint) adalah perusahaan manufaktur cat. Didirikan oleh Edy Darmawan di Bandung, Jawa Barat, pada tahun 1983. Perusahaan ini terutama bergerak dalam pembuatan, pendistribusian, dan penjualan cat, coatings dan produk terkait kepada para profesional, komersial, pelanggan ritel, dan industri. ">
    <title>PT SAN CENTRAL INDAH | SCI PAINT</title>
@endsection