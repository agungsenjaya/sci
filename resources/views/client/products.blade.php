@extends('index')
@section('content')
<div class="min-vh-100">
<section>
		<div class="images">
		<div style="background:url('../img/hero-1.jpg');background-size:cover;height:400px;background-position:center"></div>
			<div class="position-absolute" style="top:0;right:0;left:0;bottom:0;">
				<div class="container h-100 align-items-center d-flex justify-content-center text-center center-mobile">
					<div class="text-white">
					<h1 class="title-5 text-uppercase display-5 mb-0">Temukan Produk</h1>
				<p class="lead">Penuhi setiap kebutuhan pengecatan rumah anda
					<br class="d-none d-sm-block"><span class="">tersedia banyak pilihan terbaik.</span>
				</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="bg-light">
		<div class="container">
			<nav class="position-relative tabres">
				<ul class="nav nav-tabs nav-justified hidden-xs text-uppercase text-center title-5 d-flex" id="myTab" role="tablist">
					<li class="nav-item flex-fill" role="presentation"> <a class="nav-link py-3 active" id="kategori-tab" data-bs-toggle="tab" href="#kategori" role="tab" aria-controls="kategori" aria-selected="true">Kategori Produk</a>
					</li>
					<li class="nav-item flex-fill" role="presentation"> <a class="nav-link py-3" id="brands-tab" data-bs-toggle="tab" href="#brands" role="tab" aria-controls="brands" aria-selected="false">Kategori Merek</a>
					</li>
				</ul>
			</nav>
		</div>
	</section>
	<section class="">
		<div class="">
			<div class="">
				<div class="container">
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="kategori" role="tabpanel" aria-labelledby="kategori-tab">
						<div class="space-m">
							<div class="row">@foreach($kategori as $kaka)
								<a href="{{ url('/category')}}/{{ $kaka->slug }}" class="col-md-4 mb-4 text-dark">
									<div class="card hvr-tr card-cs">
										<div class="images">
											<img src="{{ $kaka->img }}" alt="PT SAN CENTRAL INDAH | SCI PAINT" width="100%" class="gr-1 card-cs">
											<div class="to-center bg-overlay-1 card-cs"></div>
											<div class="to-center text-white d-flex align-items-center text-center justify-content-center">
												<p class="text-uppercase title-6 mb-0">{{ $kaka->judul }}</p>
											</div>
										</div>
									</div>
								</a>@endforeach</div>
						</div>
						</div>
						<div class="tab-pane fade" id="brands" role="tabpanel" aria-labelledby="brands-tab">
						<div class="space-m">
							<div class="row">@foreach($brands as $brandd)
								<a href="{{ url('/brands')}}/{{ $brandd->slug }}" class="col-md-4 text-dark mb-4">
									<div class="card bg-primary text-white card-cs hvr-tr">
										<div class="card-body">
												<h4 class="title-6 text-uppercase">{{ $brandd->judul }}</h4>
												<p class="">Ekslpor produk untuk pengecatan
													<br>rumah anda.</p>
										</div>
										<div class="card-footer bg-primary p-0">
											<span class="btn text-white">Lihat Produk<i class="ms-2 bi bi-chevron-right"></i> </span>
										</div>
									</div>
								</a>
                @endforeach
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
  .gallery-top {
      height: 80%;
      width: 100%;
    }

    .gallery-thumbs {
      height: 20%;
      box-sizing: border-box;
      padding: 10px 0;
    }

    .gallery-thumbs .swiper-slide {
      width: 25%;
      height: 100%;
      opacity: 0.4;
      border:2px solid #ffffff;
    }
    .gallery-thumbs .swiper-slide-thumb-active {
      opacity: 1;
      border:2px solid #232323;
    }
</style>
@endsection
@section('js')
<script>
var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      autoplay:true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      thumbs: {
        swiper: galleryThumbs
      },
    });
</script>
@endsection
@section('meta')
    <meta property="og:title" content="Produk" />
    <meta property="og:url" content="{{ url('products') }}">
    <meta property="og:description" content="Lengkapi semua kebutuhan cat rumah dan proyek anda bersama kami.">
    <title>Temukan Produk | PT SAN CENTRAL INDAH | SCI PAINT</title>
@endsection