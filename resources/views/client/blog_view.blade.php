@extends('index')
@section('content')

<div class="bg-light z-in-1 py-3">
	<div class="container d-flex justify-content-center">
		<nav aria-label="breadcrumb" class="tabres">
			<ol class="breadcrumb bg-transparent mb-0 p-0 text-uppercase">
				<li class="breadcrumb-item"><a href="{{ route('blog') }}" class="">Blog</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">{{ $data->judul }}</li>
			</ol>
		</nav>
	</div>
</div>
<div class="min-vh-100">
<section class="space-xl">
<div class="container">
<div class="row">
<div class="col-md-2 d-none d-sm-block">
<div class="sticky-top z-in-0 py-0 py-sm-3 d-flex justify-content-start justify-content-sm-center text-left text-sm-center">
<div>
<p class="title-5 text-uppercase">Bagikan</p>
<div class="a2a_kit text-center d-flex align-items-center justify-content-center justify-content-sm-start flex-sm-column">
							<a class="btn-primary btn-icon-2 mb-3 a2a_button_whatsapp" style="padding-top:10px"> <i class="bi bi-whatsapp"></i> 
							</a>
							<a class="btn-primary btn-icon-2 mb-3 a2a_button_facebook" style="padding-top:10px"> <i class="lab la-facebook-f"></i>
							</a>
							<a class="btn-primary btn-icon-2 mb-3 a2a_button_twitter" style="padding-top:10px"> <i class="bi bi-twitter"></i> 
							</a>
							<a class="btn-primary btn-icon-2 mb-3 a2a_button_copy_link" style="padding-top:10px"> <i class="bi bi-share-fill"></i> 
							</a>
						</div>
</div>
</div>
</div>
<div class="col-md-8">
<h1 class="title-5 text-uppercase mb-3">{{ $data->judul }}</h1>
<div class="d-flex justify-content-between text-uppercase title-5 font-12 ">
<div>
<p><i class="bi bi-bookmarks-fill text-primary me-2"></i>{{ $data->akategori->judul }}</p>
</div>
<div>
<p><i class="bi bi-calendar2-event-fill text-primary me-2"></i>{{ Carbon\Carbon::parse($data->created_at)->format('d M Y') }}</p>
</div>
</div>
<img src="{{ $data->img }}" alt="" width="100%" class="rounded">
<br>
<br>
<br>
<div class="blog">
{!! $data->content !!}
</div>
<div class="d-sm-none d-block">
<hr>
<p class="title-1">Bagikan</p>
<div class="a2a_kit text-center d-flex align-items-center justify-content-start">
							<a class="btn-primary btn-icon-2 a2a_button_whatsapp" style="padding-top:10px"> <i class="bi bi-whatsapp"></i> 
							</a>
							<a class="btn-primary btn-icon-2 ml-2 a2a_button_facebook" style="padding-top:10px"> <i class="lab la-facebook-f"></i>
							</a>
							<a class="btn-primary btn-icon-2 ml-2 a2a_button_twitter" style="padding-top:10px"> <i class="bi bi-twitter"></i> 
							</a>
							<a class="btn-primary btn-icon-2 ml-2 a2a_button_copy_link" style="padding-top:10px"> <i class="bi bi-share-fill"></i> 
							</a>
						</div>
</div>
</div>
</div>
</div>
</section>
<section class="space-m">
<div class="container">
<h3 class="mt-0 title-5 text-uppercase">Artikel lainnya</h3>
<div class="row mt-4">
@foreach($artikel->take(3) as $artikel)
<a class="text-dark col-md-4 mb-4" href="{{ route('blog.view',['slug' => $artikel -> slug]) }}">
  <div class="card h-100 border-0 rising">
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
</div>
</section>
</div>
@endsection
@section('css')
<style>
  .sidebar{
    will-change: min-height;
}

.sidebar__inner{
    transform: translate(0, 0); /* For browsers don't support translate3d. */
    transform: translate3d(0, 0, 0);
    will-change: position, transform;
}
</style>
@endsection
@section('js')
<script>
var a2a_config = a2a_config || {};
a2a_config.onclick = 1;
a2a_config.locale = "id";

var sata = $('[style*="font-weight: bolder"]');
for(var i = 0; i < sata.length; i++){
    $(sata[i]).css({'font-weight' : 'normal', 'font-family': 'interstate-bold'});
}
var satu = $('b');
for(var i = 0; i < satu.length; i++){
    $(satu[i]).css({'font-weight' : 'normal', 'font-family': 'interstate-bold'});
}
</script>
<script async src="https://static.addtoany.com/menu/page.js"></script>
@endsection
@section('meta')
    <meta property="og:title" content="{{ $data->judul }}" />
    <meta property="og:url" content="{{ url('blog/read')}}/{{ $data->slug }}">
    <meta property="og:image" content="{{ $data->img }}">
    <meta property="og:description" content="{{ substr($data->content,0,200) }}..">
    <title>{{ $data->judul }} | PT SAN CENTRAL INDAH | SCI PAINT</title>
@endsection