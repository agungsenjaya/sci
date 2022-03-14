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
						<h2 class="display-5 text-uppercase title-5 mb-0">San Central Indah</h2>
						<p class="h5">Paint manufacturing & coatings system
							<br class="d-none d-sm-block"><span class="">mewarnai dan menginspirasi.</span>
						</p> 
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="bg-light">
	<div class="container tabres">
	<ul class="nav nav-tabs d-flex text-uppercase text-center title-5" id="pills-tab" role="tablist">
  <li class="nav-item flex-fill" role="presentation">
    <a class="nav-link py-3 active" id="pills-about-tab" data-bs-toggle="pill" href="#pills-about" role="tab" aria-controls="pills-about" aria-selected="true">About us</a>
  </li>
  <li class="nav-item flex-fill" role="presentation">
    <a class="nav-link py-3" id="pills-partner-tab" data-bs-toggle="pill" href="#pills-partner" role="tab" aria-controls="pills-partner" aria-selected="false">Partnership</a>
  </li>
  <li class="nav-item flex-fill" role="presentation">
    <a class="nav-link py-3" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Download</a>
  </li>
</ul>
</div>
</section>
<div class="tab-content" id="pills-tabContent">
<!-- === About === -->
  <div class="tab-pane fade show active" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">
  <section class="space-m">
	<div class="container">
	<div class="row flex-column-reverse flex-lg-row">
	<div class="col-md-6 align-self-center">
	<h1 class="text-capitalize display-5">Tentang Kami</h1>
	<p class="mb-0 lead">PT. San Central Indah (SCI-Paint) adalah perusahaan manufaktur cat. Didirikan oleh Edy Darmawan di Bandung, Jawa Barat, pada tahun 1983. Perusahaan ini terutama bergerak dalam pembuatan, pendistribusian, dan penjualan cat, coatings dan produk terkait kepada para profesional, komersial, pelanggan ritel, dan industri.</p>
	</div>
	<div class="col-md-6">
	<div class="images">
	<img src="{{ asset('img/h-10.jpg') }}" alt="" width="100%" class="gr-1">
	<!-- <img src="https://dummyimage.com/600x500" alt="" width="100%" class=""> -->
	<div class="to-center "></div>
	</div>
	</div>
	</div>
	</div>
	</section>
	<div class="container">
	<hr class="m-0">
	</div>
	<section class="space-m">
		<div class="container">
		<div class="row flex-column-reverse flex-lg-row">
		<div class="col-md-8 align-self-center  offset-md-2">
		<div class="">
		<!-- <p class="">Wilayah pemasaran</p> -->
		<div class="images">
		<img src="{{ asset('img/h-11.png') }}" alt="" width="100%">
		<img src="{{ asset('img/h-12.png') }}" alt="" width="100%" class="to-center">
		</div>
		<div class=" mt-4">
			<h1 class="text-capitalize display-5">Our Market</h1>
			<p class="lead">Fokus kami untuk memberikan pelayanan terbaik kepada konsumen dan mempunyai partner bisnis lebih dari <span class="toko"></span> toko yang tersebar diseluruh nusantara dan 14 cabang <a href="https://nusasarana.id/" target="_blank">distributor</a> resmi.</p>
			<a href="{{ route('market') }}" class="btn btn-primary">Temukan lokasi toko</a>
		</div>
		</div>
		</div>
		<!-- <div class="col-md-6">
		<div class="w-80 w-mobile" >
		<img src="{{ asset('img/ab-2.jpg') }}" alt="PT SAN CENTRAL INDAH | SCI PAINT" width="100%" class="">
		</div>
		</div> -->
		</div>
		</div>
	</section>
	<div class="container">
	<hr class="m-0">
	</div>
	<!-- <section class="space-m bg-light">
	<div class="container">
	<div class="row flex-column-reverse flex-lg-row">
	<div class="col-md-5 align-self-center">
	<h1 class="text-capitalize display-5">Our History</h1>
			<p class="">
			Lebih dari {{ date('Y') - 1983 }} tahun merupakan perjalanan yang sangat berharga dan kami terus berinovasi dalam mengembangkan produk, Serta konsisten memberikan layanan terbaik kami kepada konsumen.</p>
	</div>
	<div class="col-md-7">
	<div class="images">
		<img src="{{ asset('img/h-13.jpg') }}" alt="" width="100%" class="gr-1">
	</div>
	</div>
	</div>
	</div>
	</section> -->
	<!-- <div class="py-1 bg-danger"></div> -->
	<section class="space-xl">
		<div class="container">
			<div class="row">
				<div class="col-md-6 flex-column-reverse flex-lg-row mb-res" >
				<div class="p-0 p-sm-4">
					<div class="">
					<div class="images">
							<img src="{{ asset('img/ab-2.jpg') }}" alt="PT SAN CENTRAL INDAH | SCI PAINT" width="100%" class="w-res-100 gr-1 mb-res">
						</div>
					</div>
					<div>
						<div class="d-none d-sm-block">
							<br>
							<br>
							<br>
						</div>
						<div class="">
							<h2 class="display-5 text-capitalize  text-dark">Mision</h2>
							<p class="h5 title-1">Kami yakin bahwa dengan inovasi, kualitas, dan pelayanan, kami akan menciptakan masa depan yang sangat baik bersama dengan setiap pelanggan.</p>
						</div>
					</div>
					</div>
				</div>
				<div class="col-md-6" >
				<div class="p-0 p-sm-4">
					<div>
						<div class="d-none d-sm-block">
							<br>
							<br>
							<br>
						</div>
						<div class="images">
							<img src="{{ asset('img/ab-3.jpg') }}" alt="PT SAN CENTRAL INDAH | SCI PAINT" width="100%" class="d-sm-none d-block gr-1 mb-res">
						</div>
						<div class="">
							<h2 class="display-5 text-capitalize text-dark ">Vision</h2>
							<p class="h5 title-1">“ Inovasi adalah arah kemajuan kami, kualitas adalah fokus perhatian kami, pelayanan adalah jalan dari pengembangan kami. ”</p>
						</div>
					</div>
					<div class="">
						<div class="d-none d-sm-block">
							<br>
							<br>
						</div>
						<div class="images">
						<img src="{{ asset('img/ab-3.jpg') }}" alt="PT SAN CENTRAL INDAH | SCI PAINT" width="100%" class="d-none d-sm-block gr-1">
						<div class="to-center "></div>
					</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
	<hr class="m-0">
	</div>
	<section class="space-m">
		<div class="container text-center">
			<div class="">
				<div class="text-center mb-4">
					<h2 class="text-capitalize display-5 mb-0 text-dark" >Our Brands</h2>
					<p  class="h5">Penuhi setiap kebutuhan
						<br class="d-none d-sm-block"><span class="">pengecatan rumah dan proyek. </span>
					</p>
				</div>
				<div class="row text-center">
					<a href="/brands/kem-tone" class="col-md-3 col-6" >
						<img src="{{ asset('img/logo/KemTone.png') }}" alt="" width="100%" class="hvr-1">
					</a>
					<a href="/brands/spectrum" class="col-md-3 col-6 border-start border-light" >
						<img src="{{ asset('img/logo/Spectrum.png') }}" alt="" width="100%" class="hvr-1">
					</a>
					<a href="/brands/colortone" class="col-md-3 col-6 border-start border-light" >
						<img src="{{ asset('img/logo/ColorTone.png') }}" alt="" width="100%" class="hvr-1">
					</a>
					<a href="/brands/sterling-powder-coatings" class="col-md-3 col-6 border-start border-light" >
						<img src="{{ asset('img/logo/Sterling-Powder.png') }}" alt="" width="100%" class="hvr-1">
					</a>
				</div>
				<div class="opacity d-sm-block d-none">
						<hr>
				</div>
				<div class="d-sm-block d-none">
				<div class="row text-center">
					<a href="/brands/vinotex" class="col-md-3 col-6" >
						<img src="{{ asset('img/logo/Vinotex.png') }}" alt="" width="100%" class="hvr-1">
					</a>
					<a href="/brands/epo-tone" class="col-md-3 col-6 border-start border-light" >
						<img src="{{ asset('img/logo/EpoTone.png') }}" alt="" width="100%" class="hvr-1">
					</a>
					<a href="/brands/tamitex" class="col-md-3 col-6 border-start border-light" >
						<img src="{{ asset('img/logo/Tamitex.png') }}" alt="" width="100%" class="hvr-1">
					</a>
					<a href="/brands/panatex" class="col-md-3 col-6 border-start border-light" >
						<img src="{{ asset('img/logo/Panatex.png') }}" alt="" width="100%" class="hvr-1">
					</a>
				</div>
				</div>
			</div> 
			<a href="{{ route('products') }}" class="left btn btn-primary mt-5">Produk Lainnya</a>
		</div>
	</section>

  </div>
  <!-- === Partner === -->
  <div class="tab-pane fade" id="pills-partner" role="tabpanel" aria-labelledby="pills-partner-tab">
  <section class="space-m">
  <div class="container">
  <div class="row flex-column-reverse flex-lg-row">
  <div class="col-md-6 align-self-center">
  <h1>Nusa Sarana Indonesia</h1>
  <p class="lead">PT. Nusa Sarana Indonesia (NSI) merupakan perusahaan yang bergerak di bidang distributor Material Building, khususnya dalam hal pengadaan dan pemasaran produk cat (decorative paint, roof paint, wood paint, waterproof coatings, floor coatings, auto refinish).</p>
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
  <h1>Central Bangun Mandiri</h1>
  <p class="lead">CV. Central Bangun Mandiri (CBM) adalah perusahaan yang bergerak di bidang jasa pengecatan (Paint Applicator). Telah berpengalaman lebih dari 20 tahun dalam bidang jasa pengecatan.</p>
  <a href="http://cbm.co.id/" target="_blank" class="btn btn-primary">Selengkapnya</a>
  </div>
  <div class="col-md-6">
  <img src="{{ asset('img/h-15.jpg') }}" alt="" width="100%" class="gr-1">
  </div>
  </div>
  </div>
  </section>
  </div>
  <!-- === Download === -->
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
  <section class="space-m">
  <div class="col-md-8 offset-md-2">
  <div class="container">
  <div class="row">
  <div class="col-md-6 mb-res">
  <a class="card card-cs hvr-tr text-white bg-primary" href="/img/PT%20SAN_CENTRAL_INDAH.pdf">
  <div class="pt-4 px-4 card-body">
      <h4 class="card-title title-6 text-uppercase">Company Profile</h4>
      <p class="card-text lead">Dapatkan company profile PT.San Central Indah dalam bentuk file pdf.</p>
    </div>
	<div class="card-footer bg-transparent">
	<div class="d-flex justify-content-between">
	<div>
	<div class="btn text-white">
	<i class="mr-2 bi bi-file-earmark-pdf-fill me-2"></i>Download file
	</div>
	</div>
	</div>
    </div>
  </a>
  </div>
  <div class="col-md-6">
  <a class="card card-cs hvr-tr text-white bg-primary" href="/img/Coating_Sistem.pdf">
  <div class="pt-4 px-4 card-body">
      <h4 class="card-title title-6 text-uppercase">Coating System</h4>
      <p class="card-text lead">Dapatkan Coating System simulasi pengecatan dalam bentuk file pdf.</p>
    </div>
	<div class="card-footer bg-transparent">
	<div class="d-flex justify-content-between">
	<div>
	<div class="btn text-white">
	<i class="mr-2 bi bi-file-earmark-pdf-fill me-2"></i>Download File
	</div>
	</div>
	</div>
    </div>
  </a>
  </div>
  </div>
  </div>
  </div>
  </section>
  </div>
</div>
</div>
@endsection
@section('js')
<script>
$.getJSON("http://localhost:8000/json/toko.json", function (data) {
	$('.toko').text(data.length);
});
</script>
@endsection
@section('meta')
    <meta property="og:title" content="Tentang Kami" />
    <meta property="og:url" content="{{ url('about') }}">
    <meta property="og:description" content="PT. San Central Indah Perusahaan ini terutama bergerak dalam pembuatan, pendistribusian, dan penjualan cat, coatings dan produk terkait kepada para profesional, komersial, pelanggan ritel, dan industri.">
    <title>Tentang Kami | PT SAN CENTRAL INDAH | SCI PAINT</title>
@endsection