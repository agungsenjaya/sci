@extends('index')

@section('content')
<section class="">
<!-- Search -->
<div class="vh-70 bg-blog d-flex align-items-center justify-content-center">
<div class="container">
<div class="text-center">
					<div class="text-white">
						<h1 class="text-uppercase title-2 display-4 mb-0">Berita dan inspirasi</h1>
						<p class="mb-0 lead">Dapatkan artikel terbaru seputar mendekorasi <br>  dan promo terbaru sci paint.</p>
					</div>
					<!-- <div class="d-none d-md-block align-self-center">
					</div> -->
				</div>
				</div>
				</div>
				<!-- <div class="grad-hero"></div> -->
				<!-- End Search -->
	<div class="container space-m">
		<div class="col-md-6 offset-md-3 d-flex">
			<!-- <i class="fa fa-filter text-dark opacity fa-2x mr-3 align-self-center"></i> -->
	<select id="select-box" class="form-control  text-capitalize">
		<option disabled selected>FILTER KATEGORI</option>
		<option value="0">Semua Artikel</option>
		@foreach($akategori as $data)
		<option value="{{ $data->id }}">{{ $data->judul }}</option>
		@endforeach
	</select>
	</div>
	<div class="row">
		<div class="col-md ">
				<div class="tab-content mt-5" id="v-pills-tabContent">
			      <div class="tab-pane fade show active" id="v-all-0" role="tabpanel" aria-labelledby="v-all">
			      	<div class="row">
			      	@foreach($blog as $art)
			      	<div class="col-md-4 mb-3">
						<a href="{{ route('blog.view',['slug' => $art -> slug]) }}" class="text-dark card sh-0 border-0 h-100 hvr-brd" title="">
							<!-- <div class="mb-3 rounded-top gr" style="background:url('{{ $art->img  }}')no-repeat;width: 100%; height: 180px;background-size: cover;background-position: center">
					      		</div> -->
							<img class="rounded-top" src="{{ $art->img }}" width="100%" alt="" height="200">
							<div class="py-3 h-100">
								<p class="text-capitalize title-2">{{ substr($art->judul, 0,30) }}..</p>
							</div>
							<div class="card-footer bg-transparent border-0 p-0">
							<div class="d-flex justify-content-between">
							<div class="text-capitalize">
							 {{ $art->akategori->judul }}
							 </div>
							<div class="text-dark">
							 	{{ $art->created_at->format('d M Y') }}
							</div>
							</div>
							<hr class="divider-2">
							</div>
						</a>
					</div>
			      	@endforeach
			      	</div>
			      </div>
			      @foreach($akategori as $data)
			      <div class="tab-pane fade show" id="v-all-{{ $data->id }}" role="tabpanel" aria-labelledby="vb-all">
			      	@if(count($data->artikels))
					  <div class="row">
			      	@foreach($data->artikels as $data)
					<div class="col-md-4 mb-3">
						<a href="{{ route('blog.view',['slug' => $data -> slug]) }}" class="text-dark card sh-0 border-0 h-100 hvr-brd" title="">
						<img class="rounded-top " src="{{ $data->img }}" width="100%" alt="" height="200">
							<div class="py-3 h-100">
							<p class="text-capitalize title-2">{{ substr($data->judul, 0,30) }}..</p>
							</div>
							<div class="card-footer bg-transparent border-0 p-0">
							<div class="d-flex justify-content-between">
							<div class="text-capitalize">
							 {{ $data->akategori->judul }}
							 </div>
							<div class="text-dark">
							 	{{ $data->created_at->format('d M Y') }}
							</div>
							</div>
							<hr class="divider-2">
							</div>
						</a>
					</div>
					
			      	@endforeach
					  </div>
			      	@else
			      	<div class="text-center">
			      		<!-- <img src="{{ asset('img/404.jpg') }}" width="90%" alt=""> -->
						  <img src="//via.placeholder.com/600x400" width="50%" alt="" class="mb-3">
			      		<div>
							Maaf untuk kategori artikel <span class="text-capitalize text-primary">{{ $data->judul }}</span> yang Anda maksud <br>belum ada artikel,silahkan pilih artikel lainnya.
						</div>
					</div>
			      	@endif
			      </div>
			      @endforeach
			    </div>
			<!-- Maaf untuk kategori yang Anda maksud <br>tidak ada / belum tersedia artikel -->
		</div>
	</div>
	</div>
</section>
@endsection
@section('js')
<script>
	$(document).ready(function(){
		  //hide all tabs first
			$('.tab-pane').hide();
			//show the first tab content
			$('#v-all-0').show();

			$('#select-box').change(function () {
			   dropdown = $('#select-box').val();
			  //first hide all tabs again when a new option is selected
			  $('.tab-pane').hide();
			  //then show the tab content of whatever option value was selected
			  $('#' + "v-all-" + dropdown).show();                                    
			});
	});
	// Search 
	// window.addEventListener('load', function() {
	//   var text = document.getElementById('market');
	//   var overlay = document.getElementById('overlay')
	//   text.onfocus = function() {
	//     overlay.style.display = 'block';
	//   };
	//   text.onblur = function() {
	//     overlay.style.display = 'none';
	//   };
	// });
</script>
@endsection
@section('css')
<style type="text/css" media="screen">
	.bsd {
		background: #ddd;
	}
</style>
@endsection
@section('meta')
    <meta property="og:title" content="SCI PAINT | SAN CENTRAL INDAH" />
    <meta property="og:url" content="{{ url('blog') }}">
    <meta property="og:image" content="{{ asset('img/bg-meta.jpg') }}">
    <meta property="og:description" content="Dapatkan informasi seputar news, promo, dan inspirasi menarik sputar pengecatan dan dekorasi rumah dari sci paint.">
    <title>Blog | SCI PAINT</title>
@endsection