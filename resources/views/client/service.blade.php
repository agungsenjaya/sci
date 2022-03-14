@extends('index')
@section('content')

<div class="min-vh-100">
<section>
		<div class="images">
		<div style="background:url('../img/hero-1.jpg');background-size:cover;height:400px;background-position:center"></div>
		<!-- <div class="to-center"></div> -->
			<div class="position-absolute" style="top:0;right:0;left:0;bottom:0;">
				<div class="container h-100 align-items-center d-flex justify-content-center text-center center-mobile">
					<div class="text-white">
						<h2 class="display-5 text-uppercase title-5 mb-0">Jasa dan layanan</h2>
						<p class="h5">Berikut layanan kami yang tersedia untuk<br> partner bisnis dan pelanggan.
						</p> 
						
					</div>
				</div>
			</div>
		</div>
	</section>
<!-- <div class="space-m">
<div class="container">
<div class="text-center">
<h2 class="text-uppercase title-2 display-4">Our Service</h2>
<p class="lead mb-0 text-secondary">Berikut layanan yang tersedia <br> untuk konsumen dan toko bangunan.</p>
</div>	
</div>
</div> -->
<section class="space-m">
  <div class="container">
  <div class="row flex-column-reverse flex-lg-row">
  <div class="col-md-6 align-self-center">
  <h1>Gabung mitra bisnis</h1>
  <p class="lead">Mulai jual produk PT.San Central Indah dan dapatkan keuntungannya untuk toko bangunan Anda. Untuk informasi lebih lanjut silahkan hubungi kami.</p>
  <a href="https://nusasarana.id/" target="_blank" class="btn btn-primary">Selengkapnya</a>
  </div>
  <div class="col-md-6">
  <img src="{{ asset('img/h-14.jpg') }}" alt="" width="100%" class="gr-1">
  </div>
  </div>
  </div>
  </section>
  <div class="container">
  <hr>
  </div>
  <section class="space-m">
  <div class="container">
  <div class="row flex-column-reverse flex-lg-row">
  <div class="col-md-6 align-self-center">
  <h1>Jasa pengecatan rumah</h1>
  <p class="lead">Solusi tepat untuk layanan pengecatan rumah anda yang lebih baik, dikerjakan oleh tim profesional dibidangnya. Untuk informasi lebih lanjut silahkan hubungi kami.</p>
  <a href="http://cbm.co.id/" target="_blank" class="btn btn-primary">Selengkapnya</a>
  </div>
  <div class="col-md-6">
  <img src="{{ asset('img/h-15.jpg') }}" alt="" width="100%" class="gr-1">
  </div>
  </div>
  </div>
  </section>
</div>
@endsection
@section('meta')
    <meta property="og:title" content="Layanan Kami" />
    <meta property="og:url" content="{{ url('service') }}">
    <meta property="og:description" content="Temukan layanan terbaik untuk jasa pengecatan ataupun menjadi mitra bisnis penjualan produk.">
    <title>Layanan Kami | PT SAN CENTRAL INDAH | SCI PAINT</title>
@endsection