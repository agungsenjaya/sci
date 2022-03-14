<footer class="bg-dark">
	<div class="space-m bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-md text-center">
				<ul class="list-inline mb-0">
						<li class="list-inline-item">
							<a class="btn-icon-2 btn btn-primary text-center" href="https://www.facebook.com/scipaint" target="_blank"> <i class="lab la-facebook-f"></i></a>
						</li>
						<li class="list-inline-item">
							<a class="btn-icon-2 btn btn-primary text-center" href="https://twitter.com/scipaint" target="_blank"> <i class="bi bi-twitter"></i></a>
						</li>
						<li class="list-inline-item">
							<a class="btn-icon-2 btn btn-primary text-center" href="https://www.instagram.com/scipaint" target="_blank"> <i class="bi bi-instagram"></i></a>
						</li>
						<li class="list-inline-item">
							<a class="btn-icon-2 btn btn-primary text-center" href="https://www.youtube.com/scipaint" target="_blank"> <i class="bi bi-youtube"></i></a>
						</li>
						<li class="list-inline-item">
							<a class="btn-icon-2 btn btn-primary text-center" href="javascript:void(0)"> <i class="lab la-linkedin-in"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<hr class="m-0 hr-1 bg-white">
	<div class="container">
		<div class="space-m">
			<div class="row justify-content-lg-between">
				<div class="col-6 col-md-4 col-lg mb-5 mb-lg-0">
					<p class="title-5 text-uppercase text-white">Perusahaan</p>
					<ul class="nav nav-sm nav-foot flex-column">
						<li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
						</li>
						<li class="nav-item"><a class="nav-link" href="http://karir.sci-paint.com/" target="_blank">Karir</a>
						</li>
						<li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Berita</a>
						</li>
						<li class="nav-item"><a class="nav-link" href="{{ route('about') }}">Partnership</a>
						</li>
						<li class="nav-item"><a class="nav-link" href="{{ route('service') }}">Layanan</a>
						</li>
					</ul>
				</div>
				<div class="col-6 col-md-4 col-lg mb-5 mb-lg-0">
					<p class="title-5 text-uppercase text-white">Halaman</p>
					<ul class="nav nav-sm nav-foot flex-column">
						<li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Hubungi Kami</a>
						</li>
						<li class="nav-item"><a class="nav-link" href="{{ route('calculator') }}">Kalkulator Cat</a>
						</li>
						<li class="nav-item"><a class="nav-link" href="{{ route('market') }}">Lokasi Toko</a>
						</li>
						<li class="nav-item"><a class="nav-link" href="http://warna.sci-paint.com/">Jelajah Warna</a>
						</li>
						<li class="nav-item"><a class="nav-link" href="http://cbm.co.id/project" target="_blank">Proyek</a>
						</li>
					</ul>
				</div>
				<div class="col-6 col-md-4 col-lg">
					<p class="title-5 text-uppercase text-white">Produk Kami</p>
					<ul class="nav nav-sm nav-foot flex-column">@foreach($brands->take(5) as $ah)
						<li class="nav-item"><a class="nav-link" href="{{ route('brands.view',['slug' => $ah -> slug]) }}">{{ $ah->judul }}</a>
						</li>
						@endforeach</ul>
				</div>
				<div class="col-6 col-md-3 col-lg">
					<p class="title-5 text-uppercase text-white">Download</p>
					<ul class="nav nav-sm nav-foot flex-column">
						<li class="nav-item"><a class="nav-link" href="/img/PT%20SAN_CENTRAL_INDAH.pdf">Company Profile</a>
						</li>
						<li class="nav-item"><a class="nav-link" href="{{ route('brosur') }}">Brosur</a>
						</li>
						<li class="nav-item"><a class="nav-link" href="{{ route('datateknis') }}">Data Teknis</a>
						</li>
						<li class="nav-item"><a class="nav-link" href="javascript:void(0)">Kartu Warna</a>
						</li>
						<li class="nav-item"><a class="nav-link" href="https://play.google.com/store/apps/details?id=com.sci.app" target="_blank">Aplikasi Mobile</a>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
			<hr class="m-0 hr-1 bg-white">
		<div class="py-3">
		<ul class="nav d-flex nav-foot-2 mb-3">
  <li class="nav-item flex-fill d-none d-sm-block">
    <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
  </li>
  <li class="nav-item flex-fill d-none d-sm-block">
    <a class="nav-link" href="{{ route('contact') }}">Hubungi Kami</a>
  </li>
  <li class="nav-item flex-fill text-center">
    <a class="nav-link" href="{{ route('index.home') }}"><img src="{{ asset('img/logo-1.png') }}" alt="" class="" width="200" /></a>
  </li>
  <li class="nav-item flex-fill text-end d-none d-sm-block">
    <a class="nav-link" href="http://karir.sci-paint.com/" target="_blank">Bangun Karir</a>
  </li>
  <li class="nav-item flex-fill d-none d-sm-block text-end">
    <a class="nav-link" href="{{ route('market') }}">Lokasi toko</a>
  </li>
</ul>
			<hr class="m-0 hr-1 bg-white">
			<div class="py-4 text-white text-center font-13"> <span class="">© 1983 - {{ date('Y') }}</span> PT. San Central Indah. All rights reserved
			<br><span class="d-none d-sm-block">Paint manufacturing & coating system.</span></div>
		</div>
	</div>
</footer>