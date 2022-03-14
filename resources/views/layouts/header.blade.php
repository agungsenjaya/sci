	@if(Route::currentRouteName() == 'index.home')
	<div>
<div class="py-3 bg-dark">
<div class="container text-center text-white">
<p class="m-0">
Tetap aman dan tetap produktif di masa pandemi Covid-19
</p>
</div>
</div>
</div>
	<div class="position-absolute w-100 grad-menu" style="z-index:2">
	<nav class="navbar navbar-light z-in-1" id="navs">
		<div class="container d-flex justify-content-between">
			<div>
				<a class="navbar-brand mr-0" href="/">
					<img src="{{ asset('img/logo-1-w.png') }}" alt="" class="" width="200" id="san-2" />
				</a>
			</div>
			<div class="d-none d-sm-block" style="margin-right:60px">
				<ul class="nav justify-content-start nav-top-home">
					<li class="nav-item"> <a class="nav-link" href="{{ route('about') }}">Tentang kami</a>
					</li>

					<li class="nav-item dropdown" style="position:unset"> <a class="nav-link" href="javascript:void(0)" id="dropProduk" data-bs-toggle="dropdown">Produk<i class="bi bi-chevron-down ms-2"></i></a>
						<div class="dropdown-menu bg-white py-0 border-0 rounded-0 mt-0 w-100" aria-labelledby="dropProduk" style="z-index:1">
							<div class="container py-4">
									<p class="title-5 text-uppercase mb-0">Produk Pengecatan</p>
									<hr>
							<div class="row">
							<div class="col-md-6">
							<div class="row">
								<div class="col-md">
									<ul class="list-pro">
										@foreach($brands->take(6) as $bro)
										<li>
											<a href="{{ route('brands.view',['slug' => $bro -> slug]) }}">{{ $bro->judul }}</a>
										</li>
										@endforeach
									</ul>
								</div>
								<div class="col-md">
									<ul class="list-pro">
										@foreach($brands as $bro)
										@if($bro->id > 6)
										<li>
											<a href="{{ route('brands.view',['slug' => $bro -> slug]) }}">{{ $bro->judul }}</a>
										</li>
										@endif
										@endforeach
									</ul>
								</div>
							</div>
							</div>
							<div class="col-md-6">
							<div class="row">
								<div class="col-md">
									<ul class="list-pro">
										@foreach($kategori->take(6) as $bro)
										<li>
											<a href="{{ route('kategori.view', ['slug' => $bro -> slug]) }}">{{ $bro->judul }}</a>
										</li>
										@endforeach
									</ul>
								</div>
								<div class="col-md">
									<ul class="list-pro">
										@foreach($kategori as $bro)
										@if($bro->id > 6)
										<li>
											<a href="{{ route('kategori.view', ['slug' => $bro -> slug]) }}">{{ $bro->judul }}</a>
										</li>
										@endif
										@endforeach
									</ul>
								</div>
							</div>
							</div>
							</div>
								
							</div>
							<a class="btn btn-dark py-3 rounded-0 w-100" href="{{ route('products') }}">
									Halaman produk<i class="ms-1 bi bi-chevron-right"></i>
								</a>
						</div>
					</li>
					
					<li class="nav-item"> <a class="nav-link" href="http://warna.sci-paint.com/">Warna</a>
					</li>
					<li class="nav-item"> <a class="nav-link" href="{{ route('contact') }}">Hubungi Kami</a>
					</li>
				</ul>
			</div>
			<div>
				<ul class="nav justify-content-start nav-top">
					<li class="nav-item dropdown d-none d-sm-block" style="position:unset">
						<a class="nav-link" href="javascript:void(0)" id="dropSearch" data-bs-toggle="dropdown">
							<img src="{{ asset('img/search-w.svg') }}" alt="" class="" width="20" height="20" id="search-2">
						</a>
						<div class="dropdown-menu py-3 bg-white border-0 rounded-0 mt-0 w-100" aria-labelledby="dropSearch">
						<div class="container">
					<div class="col-md-8 offset-md-2">
						<form action="{{ url('query') }}" method="GET" class="text-center w-100">
						<div class="input-group">
								<input type="text" class="form-control bg-transparent border-0 text-dark" placeholder="Enter your search products, colors, etc." aria-label="searching" aria-describedby="addon-wrapping" name="result" autofocus/>
							</div>
						</form>
					</div>
						</div>
						</div>
					</li>
					<li class="nav-item d-sm-none d-block" style="position:unset">
						<a class="nav-link pe-0 text-white" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalMenu">
							<i class="bi bi-list h4 m-0"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	</div>
	@else
<nav class="navbar navbar-light bg-white sh-2 z-in-1" id="navs">
		<div class="container d-flex justify-content-between">
			<div>
				<a class="navbar-brand mr-0" href="/">
					<img src="{{ asset('img/logo-1.png') }}" alt="" class="" width="200" id="san-1" />
					<img src="{{ asset('img/logo-1-w.png') }}" alt="" class="d-none" width="200" id="san-2" />
				</a>
			</div>
			<div class="d-none d-sm-block" style="margin-right:60px">
				<ul class="nav justify-content-start nav-top">
					<li class="nav-item"> <a class="nav-link" href="{{ route('about') }}">Tentang kami</a>
					</li>

					<li class="nav-item dropdown" style="position:unset"> <a class="nav-link" href="javascript:void(0)" id="dropProduk" data-bs-toggle="dropdown">Produk<i class="bi bi-chevron-down ms-2"></i></a>
					<div class="dropdown-menu bg-white py-0 border-0 rounded-0 mt-0 w-100" aria-labelledby="dropProduk" style="z-index:1">
							<div class="container py-4">
									<p class="title-5 text-uppercase mb-0">Produk Pengecatan</p>
									<hr>
							<div class="row">
							<div class="col-md-6">
							<div class="row">
								<div class="col-md">
									<ul class="list-pro">
										@foreach($brands->take(6) as $bro)
										<li>
											<a href="{{ route('brands.view',['slug' => $bro -> slug]) }}">{{ $bro->judul }}</a>
										</li>
										@endforeach
									</ul>
								</div>
								<div class="col-md">
									<ul class="list-pro">
										@foreach($brands as $bro)
										@if($bro->id > 6)
										<li>
											<a href="{{ route('brands.view',['slug' => $bro -> slug]) }}">{{ $bro->judul }}</a>
										</li>
										@endif
										@endforeach
									</ul>
								</div>
							</div>
							</div>
							<div class="col-md-6">
							<div class="row">
								<div class="col-md">
									<ul class="list-pro">
										@foreach($kategori->take(6) as $bro)
										<li>
											<a href="{{ route('kategori.view', ['slug' => $bro -> slug]) }}">{{ $bro->judul }}</a>
										</li>
										@endforeach
									</ul>
								</div>
								<div class="col-md">
									<ul class="list-pro">
										@foreach($kategori as $bro)
										@if($bro->id > 6)
										<li>
											<a href="{{ route('kategori.view', ['slug' => $bro -> slug]) }}">{{ $bro->judul }}</a>
										</li>
										@endif
										@endforeach
									</ul>
								</div>
							</div>
							</div>
							</div>
								
							</div>
							<a class="btn btn-dark py-3 rounded-0 w-100" href="{{ route('products') }}">
									Halaman produk<i class="ms-1 bi bi-chevron-right"></i>
								</a>
						</div>
					</li>
					
					<li class="nav-item"> <a class="nav-link" href="#">Warna</a>
					</li>
					<li class="nav-item"> <a class="nav-link" href="{{ route('contact') }}">Hubungi Kami</a>
					</li>
				</ul>
			</div>
			<div>
				<ul class="nav justify-content-start nav-top">
					<li class="nav-item dropdown d-none d-sm-block" style="position:unset">
						<a class="nav-link" href="javascript:void(0)" id="dropSearch" data-bs-toggle="dropdown">
							<img src="{{ asset('img/search.svg') }}" alt="" width="20" height="20" id="search-1">
							<img src="{{ asset('img/search-w.svg') }}" alt="" class="d-none" width="20" height="20" id="search-2">
						</a>
						<div class="dropdown-menu py-3 bg-white border-0 rounded-0 mt-0 w-100" aria-labelledby="dropSearch">
						<div class="container">
					<div class="col-md-8 offset-md-2">
						<form action="{{ url('query') }}" method="GET" class="text-center w-100">
						<div class="input-group">
								<input type="text" class="form-control bg-transparent border-0 text-dark" placeholder="Enter your search products, colors, etc." aria-label="searching" aria-describedby="addon-wrapping" name="result" autofocus/>
							</div>
						</form>
					</div>
						</div>
						</div>
					</li>
					<li class="nav-item d-sm-none d-block" style="position:unset">
						<a class="nav-link pe-0" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalMenu">
							<i class="bi bi-list h4 m-0"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	@endif