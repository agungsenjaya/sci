@extends('index')
@section('content')

<section>
		<div class="images">
		<div style="background:url('../img/hero-1.jpg');background-size:cover;height:400px;background-position:center"></div>
		<!-- <div class="to-center"></div> -->
			<div class="position-absolute" style="top:0;right:0;left:0;bottom:0;">
				<div class="container h-100 align-items-center d-flex justify-content-center text-center center-mobile">
					<div class="text-white">
						<h2 class="display-5 text-uppercase title-5 mb-0">Berita dan kegiatan</h2>
						<p class="h5">Dapatkan informasi terbaru seputar pengecatan
              <br class="d-none d-sm-block"><span class="">dan kegiatan sci paint.</span>
              </p>
						
					</div>
				</div>
			</div>
		</div>
	</section>
  <section class="bg-light">
	<div class="container tabres">
  <ul class="nav nav-tabs d-flex text-uppercase text-center title-5" id="pills-tab" role="tablist">
  <li class="nav-item flex-fill" >
    <a class="nav-link py-3 active" id="pills-all-tab" data-bs-toggle="pill" href="#nav-all" role="tab" aria-controls="nav-all" aria-selected="true">All Kategori</a>
  </li>
  <li class="nav-item flex-fill" >
    <a class="nav-link py-3" id="pills-kegiatan-tab" data-bs-toggle="pill" href="#nav-kegiatan" role="tab" aria-controls="nav-kegiatan" aria-selected="false">Kegiatan CSR</a>
  </li>
  <li class="nav-item flex-fill" >
    <a class="nav-link py-3" id="pills-promo-tab" data-bs-toggle="pill" href="#nav-promo" role="tab" aria-controls="nav-promo" aria-selected="false">Promo</a>
  </li>
  <li class="nav-item flex-fill" >
    <a class="nav-link py-3" id="pills-artikel-tab" data-bs-toggle="pill" href="#nav-artikel" role="tab" aria-controls="nav-artikel" aria-selected="false">Artikel</a>
  </li>
  </ul>
</div>
</section>
<div class="min-vh-100">
  <section class="space-m">
  <div class="container">
  <div class="">
  <!-- <nav class="position-relative">
  <div class="d-sm-none d-block">
  <select class="form-control form-control-lg border-dark col-md-6 offset-md-3">
      <option value="0">-- Filter Kategori --</option>
      <option value="1">All Kategori</option>
      <option value="2">Kegiatan CSR</option>
      <option value="3">Promo</option>
      <option value="4">Artikel</option>
  </select>
  </div>
</nav> -->

<div class="tab-content mt-5" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
  <div class="row">
  @foreach($artikels as $artikel)
  <a class="text-dark col-md-4 mb-4" href="{{ route('blog.view',['slug' => $artikel -> slug]) }}">
  <div class="card h-100 rising border-0">
  <div class="images">
  <div style="background-image:url('{{ $artikel->img }}');width:100%;height:250px;background-position:center; background-size:cover" class="card-img-top"></div>
  <div class="grad-hero-2 rounded-top"></div>
  </div>
  <div class="card-body">
    <h5 class="card-title title-5 text-uppercase m-0">{{ $artikel->judul }}</h5>
    <!-- <p class="card-text"></p> -->
  </div>
  <div class="card-footer bg-transparent">
  <div class="d-flex justify-content-between title-5 font-12">
  <div>
  <div class="rounded-pill text-uppercase ">
  {{ $akategori[$artikel->akategori_id - 1]->judul }}
  </div>
  </div>
  <div class=" text-uppercase align-self-center">
  <i class="bi bi-calendar2-event-fill text-primary me-2"></i>{{ Carbon\Carbon::parse($artikel->created_at)->format('d M Y') }}
  </div>
  </div>
  </div>
</div>
  </a>
  @endforeach
  </div>
  <div class="d-flex justify-content-center">
  <div>
  
  {{ $artikels->render() }}
  </div>
  </div>
  </div>
  <div class="tab-pane fade" id="nav-kegiatan" role="tabpanel" aria-labelledby="nav-kegiatan-tab">
  <div class="row">
  @foreach($blog->reverse() as $blogs)
  @if($blogs->akategori->judul == 'kegiatan')
  <a class="text-dark col-md-4 mb-4" href="{{ route('blog.view',['slug' => $blogs -> slug]) }}">
  <div class="card h-100 rising border-0">
  <div class="images">
  <div style="background-image:url('{{ $blogs->img }}');width:100%;height:250px;background-position:center; background-size:cover" class="card-img-top"></div>
  <div class="grad-hero-2 rounded-top"></div>
  </div>
  <div class="card-body">
    <h5 class="card-title title-5 text-uppercase m-0">{{ $blogs->judul }}</h5>
    <!-- <p class="card-text"></p> -->
  </div>
  <div class="card-footer bg-transparent">
  <div class="d-flex justify-content-between title-5 font-12">
  <div>
  <div class="rounded-pill text-uppercase ">
    {{ $blogs->akategori->judul }}
  </div>
  </div>
  <div class=" text-uppercase align-self-center">
  <i class="bi bi-calendar2-event-fill text-primary me-2"></i>{{ $blogs->created_at->format('d M Y')}}
  </div>
  </div>
  </div>
</div>
  </a>
  @endif
  @endforeach
  </div>
  </div>
  <div class="tab-pane fade" id="nav-promo" role="tabpanel" aria-labelledby="nav-promo-tab">
  <div class="row">
  @foreach($blog->reverse() as $blogs)
  @if($blogs->akategori->judul == 'promo')
  <a class="text-dark col-md-4 mb-4" href="{{ route('blog.view',['slug' => $blogs -> slug]) }}">
  <div class="card h-100 rising border-0">
  <div class="images">
  <div style="background-image:url('{{ $blogs->img }}');width:100%;height:250px;background-position:center; background-size:cover" class="card-img-top"></div>
  <div class="grad-hero-2 rounded-top"></div>
  </div>
  <div class="card-body">
    <h5 class="card-title title-5 text-uppercase m-0">{{ $blogs->judul }}</h5>
    <!-- <p class="card-text"></p> -->
  </div>
  <div class="card-footer bg-transparent">
  <div class="d-flex justify-content-between title-5 font-12">
  <div>
  <div class="rounded-pill text-uppercase ">
    {{ $blogs->akategori->judul }}
  </div>
  </div>
  <div class=" text-uppercase align-self-center">
  <i class="bi bi-calendar2-event-fill text-primary me-2"></i>{{ $blogs->created_at->format('d M Y')}}
  </div>
  </div>
  </div>
</div>
  </a>
  @endif
  @endforeach
  </div>
  </div>
  <div class="tab-pane fade" id="nav-artikel" role="tabpanel" aria-labelledby="nav-artikel-tab">
  <div class="row">
  @foreach($blog->reverse() as $blogs)
  @if($blogs->akategori->judul == 'artikel')
  <a class="text-dark col-md-4 mb-4" href="{{ route('blog.view',['slug' => $blogs -> slug]) }}">
  <div class="card h-100 rising border-0">
  <div class="images">
  <div style="background-image:url('{{ $blogs->img }}');width:100%;height:250px;background-position:center; background-size:cover" class="card-img-top"></div>
  <div class="grad-hero-2 rounded-top"></div>
  </div>
  <div class="card-body">
    <h5 class="card-title title-5 text-uppercase m-0">{{ $blogs->judul }}</h5>
    <!-- <p class="card-text"></p> -->
  </div>
  <div class="card-footer bg-transparent">
  <div class="d-flex justify-content-between title-5 font-12">
  <div>
  <div class="rounded-pill text-uppercase ">
    {{ $blogs->akategori->judul }}
  </div>
  </div>
  <div class=" text-uppercase align-self-center">
  <i class="bi bi-calendar2-event-fill text-primary me-2"></i>{{ $blogs->created_at->format('d M Y')}}
  </div>
  </div>
  </div>
</div>
  </a>
  @endif
  @endforeach
  </div>
  </div>
</div>
  </div>

  </div>
  </section>
  <!-- <section class="bg-dark">
		<div class="images">
			<img src="https://dummyimage.com/1349x500" alt="" width="100%" class="d-none d-sm-block opacity-0">
			<img src="https://dummyimage.com/600x700" alt="" width="100%" class="d-sm-none d-block opacity-0">
			<div class="position-absolute z-in-1" style="top:0;right:0;left:0;bottom:0;">
				<div class="container h-100 align-items-center d-flex justify-content-center text-center center-mobile">
					<div class="text-white">
						<h2 class="text-uppercase display-4 title-4 mb-0">Hubungi kami</h2>
						<p class="title-1 lead">Jika anda membutuhkan bantuan dan informasi
							<br><span class="d-none d-sm-block">silahkan hubungi kami.</span>
						</p> <a href="{{ route('contact') }}" class="start btn btn-danger-2 rounded-pill">Hubungi Kami</a>
					</div>
				</div>
			</div>
		</div>
	</section> -->
</div>
@endsection
@section('js')
<script>
var swiper = new Swiper('.swiper-container', {
  slidesPerView: 1.2,
    loop:true,
    centeredSlides:true,
    spaceBetween: 30,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

    $('select').change(function(){
    if($('select').val() == '4'){
      $( "#nav-artikel-tab" ).trigger( "click" );
    } else if($('select').val() == '3'){
      $( "#nav-promo-tab" ).trigger( "click" );
    } else if($('select').val() == '2'){
      $( "#nav-kegiatan-tab" ).trigger( "click" );
    } else if($('select').val() == '1'){
      $( "#nav-all-tab" ).trigger( "click" );
    } else {
        
}
});
</script>
@endsection
@section('css')
@endsection
@section('meta')
    <meta property="og:title" content="Berita Dan Kegiatan" />
    <meta property="og:url" content="{{ url('blog') }}">
    <meta property="og:description" content="Dapatkan informasi seputar berita, promo, dan inspirasi menarik sputar pengecatan dan dekorasi rumah yang baik.">
    <title>Berita Dan Kegiatan | PT SAN CENTRAL INDAH | SCI PAINT</title>
@endsection