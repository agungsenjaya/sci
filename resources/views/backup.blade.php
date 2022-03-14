<!-- =====================  Home ================ -->
@extends('index')
@section('content')
<section>
    <div class="slider-1 bg-light swiper-container">
        <div class="swiper-wrapper images">
        <!-- @foreach($slider as $slider)
        <div class="swiper-slide">
            <a href="{{ $slider->link }}">
                <div class="text-center">
                <img src="{{ asset('img/ae-1.jpg') }}" width="100%" alt="">
                </div>
            </a>
        </div>
        @endforeach -->
        <!-- <div class="swiper-slide">
            <a href="javascript:void(0)">
                <div class="text-center">
                <img src="//via.placeholder.com/1349x500" width="100%" alt="">
                </div>
            </a>
        </div> -->
        <div class="swiper-slide">
            <a href="javascript:void(0)">
                <div class="text-center">
                <img src="{{ asset('img/ae-1.jpg') }}" width="100%" alt="">
                </div>
            </a>
        </div>
        <div class="swiper-slide">
            <a href="javascript:void(0)">
                <div class="text-center">
                <img src="{{ asset('img/ae-2.jpg') }}" width="100%" alt="">
                </div>
            </a>
        </div>
        <div class="swiper-slide">
            <a href="javascript:void(0)">
                <div class="text-center">
                <img src="{{ asset('img/ae-3.jpg') }}" width="100%" alt="">
                </div>
            </a>
        </div>
        </div>
    <!-- <div class="overlay-hero"></div> -->
        <div class="swiper-pagination"></div>
    </div>
</section>
<section class="space-m">
<div class="container text-center">
  <div class="text-left">
  <h1 class="text-capitalize title-3 mb-0 ">Warna-Warni</h1>
  <p class="lead mb-5">Temani momen kebersamaan dengan penuh warna</p>
  </div>
  <div class="row">
  <div class="col-md-3">
  <div class=" h-100">
		<a href="#" target="" class="text-dark">
			<div class="promo__item__thumbnail">
			<img alt="" src="https://www.ppgpaints.com/cms/getmedia/3e0fc1b2-e4bc-4a12-b1e9-13b503ed1012/fan-deck-1.jpg?width=500&height=500&ext=.jpg" class="" width="100%">
			</div>
			<div tops="promo__item__heade5">
      <h5 class=" title-2">Palet Warna</h5>
      <!-- <div class="divider-3"></div> -->
			<p class="tx-darken">Jelajahi ribuan warna terbaik untuk interior dan exterior rumah.</p>
			</div>
		</a>
		</div>
  </div>
  <div class="col-md-3" >
  <div class=" h-100">
		<a href="#" target="" class="text-dark">
			<div class="promo__item__thumbnail">
			<img alt="" src="{{ asset('img/in-2.png') }}" class="" width="100%">
			</div>
			<div tops="promo__item__heade5">
      <h5 class=" title-2">Simulasi Warna</h5>
      <!-- <div class="divider-3"></div> -->
			<p class="tx-darken">Konsultasi warna rumah yang baik secara gratis.</p>
			</div>
		</a>
		</div>
  </div>
  <div class="col-md-3" >
  <div class=" h-100">
		<a href="#" target="" class="text-dark">
			<div class="promo__item__thumbnail">
			<img alt="" src="{{ asset('img/in-3.png') }}" width="100%">
			</div>
			<div tops="promo__item__heade5">
      <h5 class=" title-2">Kartu Warna</h5>
      <!-- <div class="divider-3"></div> -->
			<p class="tx-darken">Koleksi kartu warna terbaru untuk inspirasi warna rumah.</p>
			</div>
		</a>
		</div>
  </div>
  <div class="col-md-3" >
  <div class=" h-100">
		<a href="#" target="" class="text-dark">
			<div class="promo__item__thumbnail">
			<img alt="" src="{{ asset('img/in-4.png') }}" class="" width="100%">
			</div>
			<div tops="promo__item__heade5">
      <h5 class=" title-2">Tren Warna</h5>
      <!-- <div class="divider-3"></div> -->
			<p class="tx-darken">Dapatakan trend warna terbaru {{ date('Y') }} yang dekoratif.</p>
			</div>
		</a>
		</div>
  </div>
  </div>
</div>
</section>
<section class="space-m">
<div class="container">
<div class="text-left">
<h1 class="text-capitalize title-3 mb-0 ">Produk unggulan</h1>
  <p class="lead mb-5">Penuhi segala kebutuhan cat untuk rumah Anda</p>
  </div>
  <div class="row">
    <div class="col-md-6">
    
    <div class=" h-100">
		<a href="#" target="" class="text-dark">
			<div class="promo__item__thumbnail images h-100 d-flex align-items-end">
			<!-- <img alt="" src="//via.placeholder.com/700x600" class="op-0" width="100%"> -->
			<img alt="" src="https://c.ekstatic.net/ecl/airport/coronavirus/cabin-crew-on-board-wearing-ppe-d600x400.jpg?h=2AsnJwRGPvIN9iuyv7hoVA" class="" width="100%">
      <!-- <img src="{{ asset('img/af-5.jpg') }}" width="100%" alt=""> -->
			</div>
			<div class=" top-left m-5">
      <h1 class="flex flex-align--v-top  promo-heading title-2 mb-0">Cat Tinting</h1>
      <div class="divider-3"></div>
			<p class="m-0 line-menu-2 tx-darken">Cat tembok tinting untuk keluarga <br> indonesia</p>
			</div>
		</a>
		</div>

    </div>
    <div class="col-md-6">
      <div class="row ">
        <div class="col-md-6">
        <div class=" h-100">
		<a href="#" target="" class="text-dark">
			<div class="promo__item__thumbnail images h-100 d-flex align-items-end pt-hr">
			<img alt="" src="https://c.ekstatic.net/ecl/destinations/middle-east/united-arab-emirates/view-of-dubai-canal-at-sunset-d600x400d.jpg?h=YQdvAXQJNvrKfuEca9BIjw" width="100%">
			</div>
			<div class=" top-left m-4">
      <h4 class=" title-2 mb-0">Cat Dekoratif</h4>
      <div class="divider-3"></div>
			<p class="m-0 line-menu-2 tx-darken">Cat tembok untuk interior dan exterior </p>
			</div>
		</a>
		</div>
        </div>
        <div class="col-md-6">
        <div class=" h-100">
		<a href="#" target="" class="text-dark">
			<div class="promo__item__thumbnail images h-100 d-flex align-items-end pt-hr">
			<img alt="" src="https://c.ekstatic.net/ecl/aircraft-exterior/airbus-A380/a380-on-the-runway-d600.jpg?h=3i6llFwx5mBdd7kx0KRrhg" width="100%">
			</div>
			<div class=" top-left m-4">
      <h4 class=" title-2 mb-0">Cat Industri</h4>
			<div class="divider-3"></div>
			<p class="m-0 line-menu-2 tx-darken">Cat untuk kebutuhan industri</p>
			</div>
		</a>
		</div>
        </div>
        <div class="col-md-6 mt-4">
        <div class=" h-100">
		<a href="#" target="" class="text-dark">
			<div class="promo__item__thumbnail images h-100 d-flex align-items-end pt-hr">
			<img alt="" src="https://c.ekstatic.net/ecl/logos/skywards/skywards-membership-tier-d600x400.jpg?h=6wbi4aDKal7JdHAlN-K9IQ" width="100%">
			</div>
			<div class=" top-left m-4">
      <h4 class=" title-2 mb-0">Cat Kayu</h4>
			<div class="divider-3"></div>
			<p class="m-0 line-menu-2 tx-darken">Cat untuk segala kebutuhan kayu</p>
			</div>
		</a>
		</div>
        </div>
        <div class="col-md-6 mt-4">
        <div class=" h-100">
		<a href="#" target="" class="text-dark">
			<div class="promo__item__thumbnail images h-100 d-flex align-items-end pt-hr">
			<img alt="" src="https://c.ekstatic.net/ecl/aircraft-exterior/boeing-777/emirates-boeing-777-300er-flying-above-sea-d600x400.jpg?h=xVDCnzToEwzxjvQouUMazQ" width="100%">
			</div>
			<div class=" top-left m-4">
      <h4 class=" title-2 mb-0">Cat Spesial</h4>
			<div class="divider-3"></div>
			<p class="m-0 line-menu-2 tx-darken">Cat untuk kebutuhan lainnya </p>
			</div>
		</a>
		</div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- <section class="space-m">
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <h1 class="text-capitalize title-3 mb-0 ">Warna-Warni</h1>
      <p class="lead">Dapatkan produk sci paint di toko <br> bangunan terdekat</p>
      <a href="">Find Store</a>
      </div>
      <div class="col-md-6">
      <img alt="" src="//via.placeholder.com/700x400" width="100%">
      </div>
    </div>
  </div>
</section> -->
<!-- <img src="{{ asset('img/test.jpg') }}" alt="" width="100%"> -->
<!-- <img src="https://www.ppgpaints.com/cms/getmedia/053a4fa9-7f2a-4a6a-abfd-53364011394d/ultralast-homepage.jpg?width=1980&amp;height=685&amp;ext=.jpg" alt="" width="100%"> -->
@endsection
@section('css')
<style>
  
</style>
@endsection
@section('js')
<script src=""></script>
<script>
    var swiper = new Swiper('.slider-1', {
      loop:true,
      speed: 2000,
      autoplay:false,
      effect:'fade',
      // effect: 'fade',
      // fadeEffect: {
      //   crossFade: true
      // },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
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
       var swiper = new Swiper('.slider-2', {
      slidesPerView: 3,
      spaceBetween: 20,
      speed: 700,
      autoplay:true,
      loop:false,
      breakpoints: {
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
    // var swiper = new Swiper('.slider-3', {
    //   direction: 'vertical',
    //   effect:'fade',
    //   spaceBetween: 1,
    //   slidesPerView: 1,
    //   loop:true,
    // });

    $(window).scroll(function() { 
    // Get scroll position
    var s = $(window).scrollTop(),
    // scroll value and opacity
    opacityVal = (s / 240);
    // opacity value 0% to 100%
    $('.blur').css('opacity', opacityVal);
});

  </script>
@endsection
@section('meta')
    <meta property="og:title" content="SCI PAINT | SAN CENTRAL INDAH" />
    <meta property="og:url" content="{{ url('') }}">
    <meta property="og:image" content="{{ asset('img/bg-meta.jpg') }}">
    <meta property="og:description" content="PT. San Central Indah (SCI-Paint) adalah perusahaan manufaktur cat. Didirikan oleh Edy Darmawan di Bandung, Jawa Barat, pada tahun 1983. Perusahaan ini terutama bergerak dalam pembuatan, pendistribusian, dan penjualan cat, coatings dan produk terkait kepada para profesional, komersial, pelanggan ritel, dan industri. ">
    <title>SCI PAINT | SAN CENTRAL INDAH</title>
@endsection

<!-- =====================  Home ================ -->

@extends('index')
@section('content')
<section>
    <div class="slider-1 bg-light swiper-container">
        <div class="swiper-wrapper images">
        <div class="swiper-slide">
            <a href="javascript:void(0)">
                <div class="text-center">
                <img src="{{ asset('img/w1.png') }}" width="100%" alt="">
                </div>
            </a>
        </div>
        <div class="swiper-slide">
            <a href="javascript:void(0)">
                <div class="text-center">
                <img src="{{ asset('img/w2.png') }}" width="100%" alt="">
                </div>
            </a>
        </div>
        <div class="swiper-slide">
            <a href="javascript:void(0)">
                <div class="text-center">
                <img src="{{ asset('img/w3.png') }}" width="100%" alt="">
                </div>
            </a>
        </div>
        <div class="swiper-slide">
            <a href="javascript:void(0)">
                <div class="text-center">
                <img src="{{ asset('img/w4.png') }}" width="100%" alt="">
                </div>
            </a>
        </div>
        </div>
        <!-- <div class="swiper-pagination"></div> -->
    </div>
</section>

@endsection
@section('css')
<style>
  
</style>
@endsection
@section('js')
<script src=""></script>
<script>
    var swiper = new Swiper('.slider-1', {
      loop:true,
      speed: 2000,
      autoplay:true,
      effect:'fade',
      // effect: 'fade',
      // fadeEffect: {
      //   crossFade: true
      // },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
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
       var swiper = new Swiper('.slider-2', {
      slidesPerView: 3,
      spaceBetween: 20,
      speed: 700,
      autoplay:true,
      loop:false,
      breakpoints: {
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
    // var swiper = new Swiper('.slider-3', {
    //   direction: 'vertical',
    //   effect:'fade',
    //   spaceBetween: 1,
    //   slidesPerView: 1,
    //   loop:true,
    // });

    $(window).scroll(function() { 
    // Get scroll position
    var s = $(window).scrollTop(),
    // scroll value and opacity
    opacityVal = (s / 240);
    // opacity value 0% to 100%
    $('.blur').css('opacity', opacityVal);
});

  </script>
@endsection
@section('meta')
    <meta property="og:title" content="SCI PAINT | SAN CENTRAL INDAH" />
    <meta property="og:url" content="{{ url('') }}">
    <meta property="og:image" content="{{ asset('img/bg-meta.jpg') }}">
    <meta property="og:description" content="PT. San Central Indah (SCI-Paint) adalah perusahaan manufaktur cat. Didirikan oleh Edy Darmawan di Bandung, Jawa Barat, pada tahun 1983. Perusahaan ini terutama bergerak dalam pembuatan, pendistribusian, dan penjualan cat, coatings dan produk terkait kepada para profesional, komersial, pelanggan ritel, dan industri. ">
    <title>SCI PAINT | SAN CENTRAL INDAH</title>
@endsection



<!-- =====================  Home ================ -->
@extends('index')
@section('content')
<section>
    <div class="slider-1 bg-light swiper-container">
        <div class="swiper-wrapper images">
        <!-- @foreach($slider as $slider)
        <div class="swiper-slide">
            <a href="{{ $slider->link }}">
                <div class="text-center">
                <img src="{{ asset('img/ae-1.jpg') }}" width="100%" alt="">
                </div>
            </a>
        </div>
        @endforeach -->
        <div class="swiper-slide">
            <a href="javascript:void(0)">
                <div class="text-center">
                <img src="https://ppg.com/cms/getmedia/35eeab52-08c0-4c4d-a56f-c66528795dba/homepage-cc-optimized.gif?width=2200&amp;height=1408&amp;ext=.gif" width="100%" alt="">
                </div>
            </a>
        </div>
        <!-- <div class="swiper-slide">
            <a href="javascript:void(0)">
                <div class="text-center">
                <img src="{{ asset('img/ae-1.jpg') }}" width="100%" alt="">
                </div>
            </a>
        </div>
        <div class="swiper-slide">
            <a href="javascript:void(0)">
                <div class="text-center">
                <img src="{{ asset('img/ae-2.jpg') }}" width="100%" alt="">
                </div>
            </a>
        </div>
        <div class="swiper-slide">
            <a href="javascript:void(0)">
                <div class="text-center">
                <img src="{{ asset('img/ae-3.jpg') }}" width="100%" alt="">
                </div>
            </a>
        </div> -->
        </div>
    <!-- <div class="overlay-hero"></div> -->
        <div class="swiper-pagination"></div>
    </div>
</section>
<section class="space-m">
<div class="container text-center">
  <div class="text-center">
  <h1 class="text-capitalize title-4 display-4 mb-0 ">Warna-Warni</h1>
  <p class="lead mb-5">Temani momen kebersamaan dengan penuh warna</p>
  </div>
  <div class="row">
  <div class="col-md-3">
  <div class=" h-100">
		<a href="#" target="" class="text-dark">
			<div class="promo__item__thumbnail">
			<img alt="" src="https://www.ppgpaints.com/cms/getmedia/3e0fc1b2-e4bc-4a12-b1e9-13b503ed1012/fan-deck-1.jpg?width=500&height=500&ext=.jpg" class="" width="100%">
			</div>
			<div tops="promo__item__heade5">
      <h5 class=" title-2">Palet Warna</h5>
      <!-- <div class="divider-3"></div> -->
			<p class="tx-darken">Jelajahi ribuan warna terbaik untuk interior dan exterior rumah.</p>
			</div>
		</a>
		</div>
  </div>
  <div class="col-md-3" >
  <div class=" h-100">
		<a href="#" target="" class="text-dark">
			<div class="promo__item__thumbnail">
			<img alt="" src="{{ asset('img/in-2.png') }}" class="" width="100%">
			</div>
			<div tops="promo__item__heade5">
      <h5 class=" title-2">Simulasi Warna</h5>
      <!-- <div class="divider-3"></div> -->
			<p class="tx-darken">Konsultasi warna rumah yang baik secara gratis.</p>
			</div>
		</a>
		</div>
  </div>
  <div class="col-md-3" >
  <div class=" h-100">
		<a href="#" target="" class="text-dark">
			<div class="promo__item__thumbnail">
			<img alt="" src="{{ asset('img/in-3.png') }}" width="100%">
			</div>
			<div tops="promo__item__heade5">
      <h5 class=" title-2">Kartu Warna</h5>
      <!-- <div class="divider-3"></div> -->
			<p class="tx-darken">Koleksi kartu warna terbaru untuk inspirasi warna rumah.</p>
			</div>
		</a>
		</div>
  </div>
  <div class="col-md-3" >
  <div class=" h-100">
		<a href="#" target="" class="text-dark">
			<div class="promo__item__thumbnail">
			<img alt="" src="{{ asset('img/in-4.png') }}" class="" width="100%">
			</div>
			<div tops="promo__item__heade5">
      <h5 class=" title-2">Tren Warna</h5>
      <!-- <div class="divider-3"></div> -->
			<p class="tx-darken">Dapatakan trend warna terbaru {{ date('Y') }} yang dekoratif.</p>
			</div>
		</a>
		</div>
  </div>
  </div>
</div>
</section>
<section class="space-m">
<div class="container">
<div class="text-center">
<h1 class="text-capitalize display-4 title-4 mb-0 ">Produk unggulan</h1>
  <p class="lead mb-5">Penuhi segala kebutuhan cat untuk rumah Anda</p>
  </div>
  <div class="row">
    <div class="col-md-6">
    
    <div class=" h-100">
		<a href="#" target="" class="text-dark">
			<div class="promo__item__thumbnail images h-100 d-flex align-items-end">
			<!-- <img alt="" src="//via.placeholder.com/700x600" class="op-0" width="100%"> -->
			<img alt="" src="https://c.ekstatic.net/ecl/airport/coronavirus/cabin-crew-on-board-wearing-ppe-d600x400.jpg?h=2AsnJwRGPvIN9iuyv7hoVA" class="" width="100%">
      <!-- <img src="{{ asset('img/af-5.jpg') }}" width="100%" alt=""> -->
			</div>
			<div class=" top-left m-5">
      <h1 class="flex flex-align--v-top  promo-heading title-4 mb-0">Cat Tinting</h1>
      <div class="divider-3"></div>
			<p class="m-0 line-menu-2 tx-darken">Cat tembok tinting untuk keluarga <br> indonesia</p>
			</div>
		</a>
		</div>

    </div>
    <div class="col-md-6">
      <div class="row ">
        <div class="col-md-6">
        <div class=" h-100">
		<a href="#" target="" class="text-dark">
			<div class="promo__item__thumbnail images h-100 d-flex align-items-end pt-hr">
			<img alt="" src="https://c.ekstatic.net/ecl/destinations/middle-east/united-arab-emirates/view-of-dubai-canal-at-sunset-d600x400d.jpg?h=YQdvAXQJNvrKfuEca9BIjw" width="100%">
			</div>
			<div class=" top-left m-4">
      <h4 class=" title-4 mb-0">Cat Dekoratif</h4>
      <div class="divider-3"></div>
			<p class="m-0 line-menu-2 tx-darken">Cat tembok untuk interior dan exterior </p>
			</div>
		</a>
		</div>
        </div>
        <div class="col-md-6">
        <div class=" h-100">
		<a href="#" target="" class="text-dark">
			<div class="promo__item__thumbnail images h-100 d-flex align-items-end pt-hr">
			<img alt="" src="https://c.ekstatic.net/ecl/aircraft-exterior/airbus-A380/a380-on-the-runway-d600.jpg?h=3i6llFwx5mBdd7kx0KRrhg" width="100%">
			</div>
			<div class=" top-left m-4">
      <h4 class=" title-4 mb-0">Cat Industri</h4>
			<div class="divider-3"></div>
			<p class="m-0 line-menu-2 tx-darken">Cat untuk kebutuhan industri</p>
			</div>
		</a>
		</div>
        </div>
        <div class="col-md-6 mt-4">
        <div class=" h-100">
		<a href="#" target="" class="text-dark">
			<div class="promo__item__thumbnail images h-100 d-flex align-items-end pt-hr">
			<img alt="" src="https://c.ekstatic.net/ecl/logos/skywards/skywards-membership-tier-d600x400.jpg?h=6wbi4aDKal7JdHAlN-K9IQ" width="100%">
			</div>
			<div class=" top-left m-4">
      <h4 class=" title-4 mb-0">Cat Kayu</h4>
			<div class="divider-3"></div>
			<p class="m-0 line-menu-2 tx-darken">Cat untuk segala kebutuhan kayu</p>
			</div>
		</a>
		</div>
        </div>
        <div class="col-md-6 mt-4">
        <div class=" h-100">
		<a href="#" target="" class="text-dark">
			<div class="promo__item__thumbnail images h-100 d-flex align-items-end pt-hr">
			<img alt="" src="https://c.ekstatic.net/ecl/aircraft-exterior/boeing-777/emirates-boeing-777-300er-flying-above-sea-d600x400.jpg?h=xVDCnzToEwzxjvQouUMazQ" width="100%">
			</div>
			<div class=" top-left m-4">
      <h4 class=" title-4 mb-0">Cat Spesial</h4>
			<div class="divider-3"></div>
			<p class="m-0 line-menu-2 tx-darken">Cat untuk kebutuhan lainnya </p>
			</div>
		</a>
		</div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- <section class="space-m">
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <h1 class="text-capitalize title-3 mb-0 ">Warna-Warni</h1>
      <p class="lead">Dapatkan produk sci paint di toko <br> bangunan terdekat</p>
      <a href="">Find Store</a>
      </div>
      <div class="col-md-6">
      <img alt="" src="//via.placeholder.com/700x400" width="100%">
      </div>
    </div>
  </div>
</section> -->
<!-- <img src="{{ asset('img/test.jpg') }}" alt="" width="100%"> -->
<!-- <img src="https://www.ppgpaints.com/cms/getmedia/053a4fa9-7f2a-4a6a-abfd-53364011394d/ultralast-homepage.jpg?width=1980&amp;height=685&amp;ext=.jpg" alt="" width="100%"> -->
@endsection
@section('css')
<style>
  
</style>
@endsection
@section('js')
<script src=""></script>
<script>
    var swiper = new Swiper('.slider-1', {
      loop:true,
      speed: 2000,
      autoplay:false,
      effect:'fade',
      // effect: 'fade',
      // fadeEffect: {
      //   crossFade: true
      // },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
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
       var swiper = new Swiper('.slider-2', {
      slidesPerView: 3,
      spaceBetween: 20,
      speed: 700,
      autoplay:true,
      loop:false,
      breakpoints: {
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
    // var swiper = new Swiper('.slider-3', {
    //   direction: 'vertical',
    //   effect:'fade',
    //   spaceBetween: 1,
    //   slidesPerView: 1,
    //   loop:true,
    // });

    $(window).scroll(function() { 
    // Get scroll position
    var s = $(window).scrollTop(),
    // scroll value and opacity
    opacityVal = (s / 240);
    // opacity value 0% to 100%
    $('.blur').css('opacity', opacityVal);
});

  </script>
@endsection
@section('meta')
    <meta property="og:title" content="SCI PAINT | SAN CENTRAL INDAH" />
    <meta property="og:url" content="{{ url('') }}">
    <meta property="og:image" content="{{ asset('img/bg-meta.jpg') }}">
    <meta property="og:description" content="PT. San Central Indah (SCI-Paint) adalah perusahaan manufaktur cat. Didirikan oleh Edy Darmawan di Bandung, Jawa Barat, pada tahun 1983. Perusahaan ini terutama bergerak dalam pembuatan, pendistribusian, dan penjualan cat, coatings dan produk terkait kepada para profesional, komersial, pelanggan ritel, dan industri. ">
    <title>SCI PAINT | SAN CENTRAL INDAH</title>
@endsection