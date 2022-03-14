@extends('index')
@section('content')

<section class="min-vh-100">
<div class="text-center">
		<div class="d-flex align-items-center justify-content-center" style="background:url('../img/hero-1.jpg');height:300px;background-size:cover;background-position:center">
		<div class="p-3 text-white">
		<h1 class="title-5 display-5 text-uppercase mb-0">Hubungi Kami</h1>
			<p class="lead">Jika Anda memiliki pertanyaan atau saran <br> jangan ragu untuk menghubungi kami</p>
		</div>
		</div>
		</div>
	<div class="container space-m">
	<div class="row">
	<div class="col-md-6">
	<div class="">
	<!-- <h3 class="title-5 text-uppercase text-sm-start text-center mt-0">PT.San Central Indah</h3> -->
	<!-- <hr> -->
	<!-- <p class="text-sm-start text-center">Jl. Raya Batujajar No.Km. 3,5, Giriasih, Kec. Batujajar, Kabupaten Bandung Barat, Jawa Barat 40561</p> -->
	<div class="row">
	<div class="col-md-6 mb-3">
		<a href="tel:+6226866128" class="text-white">
	<div class="bg-primary p-3 card-cs hvr-tr">
			<div class="media">
				<i class="bi bi-telephone-fill me-3 h4"></i>
				<div class="media-body">
					<p class="mb-0 title-5 text-uppercase">Nomor Telepon</p>
					<p class="mb-0">(022) - 6866128</p>
				</div>
			</div>
		</div>
	</a>
</div>
	<div class="col-md-6 mb-3">
		<a href="mailto:info@sci-paint.com?subject=Contact Pesan" class="text-white">
	<div class="bg-primary p-3 card-cs hvr-tr">
			<div class="media">
				<i class="bi bi-envelope-open-fill me-3 h4"></i>
				<div class="media-body">
					<p class="mb-0 title-5 text-uppercase">Email Address</p>
					<p class="mb-0">info@sci-paint.com</p>
				</div>
			</div>
		</div>
	</a>
</div>
	<div class="col-md-12 mb-3">
		<a href="https://goo.gl/maps/Pp7iUczSeo4hdtNMA" target="_blank" class="text-white">
	<div class="bg-primary p-3 card-cs hvr-tr">
			<div class="media">
				<i class="bi bi-geo-alt-fill me-3 h4"></i>
				<div class="media-body">
					<p class="mb-0 title-5 text-uppercase">Alamat Perusahaan</p>
					<p class="mb-0">Jl. Raya Batujajar No.Km. 3,5, Giriasih, Kec. Batujajar, Kabupaten Bandung Barat, Jawa Barat 40561Maps</p>
				</div>
			</div>
		</div>
	</a>
</div>
	
	<!-- <div class="mt-3">
	<a href="mailto:info@sci-paint.com?subject=Contact Pesan" class="btn btn-primary w-100"><i class="fa fa-envelope-open me-2"></i>info@sci-paint.com</a>
</div>
	<div class="mt-3">
		<a href="https://goo.gl/maps/Pp7iUczSeo4hdtNMA" target="_blank" class="btn btn-primary w-100"><i class="fab fa-google me-2"></i>Google Maps</a>
	</div> -->
	</div>
	</div>
	</div>
		<div class="col-md-6">
		<div class="card card-body">
			@if(Session::has('success'))
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			<p class="mb-0"><i class="bi bi-envelope-open-fill me-2"></i> Email berhasil terkirim, terima kasih.</p>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		@endif
			<form action="{{ route('contact.send') }}" method="POST" id="contact">
				@csrf
				<div class="mb-3">
			    <label for="" class="form-label">Nama lengkap</label>
			    <input type="text" class="form-control "  required="" name="name">
			  </div>
			  <div class="mb-3">
			    <label for="exampleInputEmail1" class="form-label">Email Address</label>
			    <input type="email" class="form-control "  required="" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
			  </div>
			  <div class="mb-3">
			    <label for="" class="form-label">Pesan</label>
			    <textarea name="message" class="form-control "  required="" rows="5"></textarea>
			  </div>
			  
			  <button type="submit" class="btn btn-primary btn-block">Kirim Pesan</button>
			</form>
		</div>
		</div>
	</div>
	</div>
</section>
@endsection
@section('meta')
    <meta property="og:title" content="Hubungi Kami" />
    <meta property="og:url" content="{{ url('contact') }}">
    <meta property="og:description" content="Untuk mengetahui lebih lanjut seputar pemasaran dan info produk atau keluhan konsumen hubungi kami melalui kontak support yang tersedia.">
    <title>Hubungi Kami | PT SAN CENTRAL INDAH | SCI PAINT</title>
@endsection