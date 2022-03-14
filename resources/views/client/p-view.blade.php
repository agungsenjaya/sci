@extends('index') @section('content')
<!-- <div class="bg-light z-in-1 py-3 font-12">
    <div class="container justify-content-center d-flex">
        <nav aria-label="breadcrumb" class="tabres">
            <ol class="breadcrumb bg-transparent mb-0 p-0 text-uppercase">
                <li class="breadcrumb-item"><a href="{{ route('products') }}" class="">Products</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/brands')}}/{{ $data->brand->slug }}" class="">{{ $data->brand->judul }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $data->judul }}</li>
            </ol>
        </nav>
    </div>
</div> -->
<div class="min-vh-100">
    <section class="space-m">
        <div class="container">
            <div class="">
                <div class="d-flex justify-content-between row mb-4">
                    <div class="col-md text-center text-sm-start">
                        <a href="{{ url('/category')}}/{{ $data->kategori->slug }}" class="badge bg-light text-secondary mb-2">{{ $data->kategori->judul }} </a>
                        <h3 class="title-6 text-uppercase">{{ $data->judul }}</h3>
                    </div>
                    <div class="col-md">
                    <nav aria-label="breadcrumb" class="tabres justify-content-center justify-content-sm-end d-flex">
            <ol class="breadcrumb bg-transparent mb-0 p-0 text-uppercase">
                <li class="breadcrumb-item"><a href="{{ route('products') }}" class="">Products</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/brands')}}/{{ $data->brand->slug }}" class="">{{ $data->brand->judul }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $data->judul }}</li>
            </ol>
        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 text-center mb-4 mb-sm-0">
                        <div class="card mb-3 h-100">
                            <img src="{{ $data->img }}" alt="" width="100%" class="" />
							<div class="card-footer h-100 d-flex align-items-center">
							<div class="a2a_kit text-center d-flex align-items-center justify-content-center w-100">
                            <a class="btn-primary btn-icon-2 a2a_button_whatsapp" style="padding-top: 10px;"> <i class="bi bi-whatsapp"></i> </a>
                            <a class="btn-primary btn-icon-2 ms-2 a2a_button_facebook" style="padding-top: 10px;"> <i class="lab la-facebook-f"></i> </a>
                            <a class="btn-primary btn-icon-2 ms-2 a2a_button_twitter" style="padding-top: 10px;"> <i class="bi bi-twitter"></i> </a>
                            <a class="btn-primary btn-icon-2 ms-2 a2a_button_copy_link" style="padding-top: 10px;"> <i class="bi bi-share-fill"></i> </a>
                        </div>
							</div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card h-100">
                        <div class="card-header p-0 border-0">
                            <nav class="tabres">
                                <div class="nav nav-tabs d-flex title-5 text-uppercase" id="nav-tab" role="tablist">
                                    <a class="nav-link py-3 flex-fill active" id="nav-content-tab" data-bs-toggle="tab" href="#nav-content" role="tab" aria-controls="nav-content" aria-selected="true">
                                        <i class="bi bi-list-nested me-2"></i>Deskripsi
                                    </a>
                                    <a class="nav-link py-3 flex-fill" id="nav-color-tab" data-bs-toggle="tab" href="#nav-color" role="tab" aria-controls="nav-color" aria-selected="false"><i class="bi bi-grid-fill me-2"></i>Warna</a>
                                </div>
                            </nav>
                        </div>
                            <div class="tab-content card-body" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-content" role="tabpanel" aria-labelledby="nav-content-tab">
                                    <div class="">
                                        <p class="mb-0">{{ $data->content }}</p>
                                        <!-- <div class="mt-4">  -->
                                        <div class="row mt-4">
                                            <div class="col-md-4 mb-sm-0 mb-3">
                                                <a href="{{ url('') . '/'. $data->pdf }}" class="btn btn-primary w-100"><i class="bi bi-file-earmark-pdf-fill me-2"></i>data teknis</a>
                                            </div>
                                            <div class="col-md-4">
                                                <a href="{{ route('market') }}" class="btn btn-light w-100"><i class="me-2 fa fa-map-marker-alt"></i>Cari Toko</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-video" role="tabpanel" aria-labelledby="nav-video-tab"></div>
                                <div class="tab-pane fade" id="nav-color" role="tabpanel" aria-labelledby="nav-color-tab">
                                    <div class="">
                                        <div class="row no-gutters text-center d-flex justify-content-start" id="colors"></div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <a class="btn w-100 btn-primary" href="http://localhost:7000/palet-warna/{{ $data->slug }}" target="_blank" class="">Warna lainnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="bg-dark text-white">
  <div class="">
  <div class="row no-gutters flex-column-reverse flex-lg-row">
  <div class="col-md-6 align-self-center">
  <div class="p-5">
  <h1 class="text-capitalize">{{ $data->kategori->judul }}</h1>
  <p class="lead">{{ $data->kategori->content }}</p>
  </div>
  </div>
  <div class="col-md-6">
  <img src="{{ $data->kategori->img }}" alt="" width="100%">
  </div>
  </div>
  </div>
  </section> -->
    <section class="space-m">
        <div class="container">
            <div class="text-center mb-3">
                <h3 class="mt-0 title-5 text-uppercase">Produk {{ $data->brand->judul }} lainnya</h3>
            </div>
            <div>
                <div class="swiper slider-3">
                    <div class="swiper-wrapper text-center">
                        @foreach($data->brand->products as $b)
                        <div class="swiper-slide text-center">
                            <a class="text-dark card h-100" href="{{ route('products.view',['slug' => $b -> slug]) }}">
                                <div class="h-100">
                                    <div class="rounded-top">
                                        <img src="{{ $b->img }}" class="card-img-top rounded-top" alt="PT SAN CENTRAL INDAH | SCI PAINT" />
                                    </div>
                                    <div class="card-body">
                                        <div class="badge bg-light text-secondary mb-3 w-100">{{ $b->kategori->judul }}</div>
                                    </div>
                                </div>
                                <div class="card-footer bg-primary text-center p-0">
                                    <div class="">
                                        <div>
                                            <div class="btn text-white">Lihat Produk</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination mt-4 position-relative"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section>
		<div class="images">
			<div style="background:url('http://localhost:8000/img/hero-1.jpg');background-size:cover;height:400px;background-position:center"></div>
			<div class="position-absolute" style="top:0;right:0;left:0;bottom:0;">
				<div class="container h-100 align-items-center d-flex justify-content-center text-center center-mobile">
					<div class="text-white">
						<h1 class="title-2 display-5 mb-0">Temukan Toko</h1>
						<p class="h5">Dapatkan produk {{ $data->judul }}
							<br>ditoko bangunan terdekat rumah Anda.</p> <a href="/market" class="btn btn-primary">Selengkapnya</a>
					</div>
				</div>
			</div>
		</div>
	</section> -->
</div>
@endsection @section('css')
<style>
    .swiper-container {
        width: 100%;
        /* height: 300px; */
        margin-left: auto;
        margin-right: auto;
    }

    .swiper-slide {
        background-size: cover;
        background-position: center;
    }

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
        opacity: 0.7;
    }

    .gallery-thumbs .swiper-slide-thumb-active {
        opacity: 1;
    }
</style>
@endsection @section('js')
<script>
    var a2a_config = a2a_config || {};
    a2a_config.onclick = 1;
    a2a_config.icon_color = "#0E1116";
    a2a_config.locale = "id";
</script>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<script>
    bas.show();
    var swiper = new Swiper('.slider-3', {
         slidesPerView: 3,
      spaceBetween: 20,
      pagination: {
    	el: '.swiper-pagination',
    	clickable: true,
         },
         autoplay:true,
         breakpoints: {
           1024: {
             slidesPerView: 4,
           },
           768: {
             slidesPerView: 3,
           },
           640: {
             slidesPerView: 1,
           },
           320: {
             slidesPerView: 1,
           }
         }
    });
    $('.gambar-1,.gambar-2').hide();
        var obs = <?php echo json_encode($data->id); ?>;
        var ocs = <?php echo json_encode($data->slug); ?>;
         var success = false;
         $.getJSON(`http://localhost:7000/api/products/${obs}?token=` + "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTkyLjE2OC4xMDAuMjIzOjgwODAvYXBpL2F1dGgvbG9naW4iLCJpYXQiOjE2MDkzODc4MDcsIm5iZiI6MTYwOTM4NzgwNywianRpIjoiS0M5VzZjT2l4VWI0ZDBnaSIsInN1YiI6MSwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.NVdNWa0g2kg5OwNwpcofVDaNFGZR9lf0pzLQWc1YbwA",
         function (res2) {
           success = true;
    		  if (res2) {
    			  $('.gambar-2').show();
    			$.getJSON(`http://localhost:7000/api/warnas/?token=` + "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMTkyLjE2OC4xMDAuMjIzOjgwODAvYXBpL2F1dGgvbG9naW4iLCJpYXQiOjE2MDkzODc4MDcsIm5iZiI6MTYwOTM4NzgwNywianRpIjoiS0M5VzZjT2l4VWI0ZDBnaSIsInN1YiI6MSwicHJ2IjoiODdlMGFmMWVmOWZkMTU4MTJmZGVjOTcxNTNhMTRlMGIwNDc1NDZhYSJ9.NVdNWa0g2kg5OwNwpcofVDaNFGZR9lf0pzLQWc1YbwA",
    			function (res3) {
    				var abs = [];
    				$.each(res3, function (inn, vall) {
    					 if (res2.kate_id == vall.kate_id) {
    						 abs.push(vall);
    					 }
    				});
    				for (let ino = 0; ino < 9; ino++) {
    					const eme = abs[ino];
    					$('#colors').append(`
    					<a href="http://localhost:7000/palet-warna/spectrum-interior-exterior-paint/${eme.slug}" class="col-md-2 mb-3 col-4 text-dark" target="_blank">
    					<div class="round-icon ricon-mobile" style="height:120px;width:100%;background-color:#${eme.rgb}">
    						<div class="h-100 d-flex align-items-center justify-content-center">
    							<div class="title-2 small">${eme.kode}</div>
    						</div>
    					</div>
    					</a>
    					`)
    				}
    			});
    		  }
       }).done(function(){
         bas.hide();
       }).fail(function(){
    	bas.hide();
    	$('.gambar-1').show();
       });

       setTimeout(function() {
       if (!success){
          $('#nav-color-tab').hide();
       }}, 2000);
</script>
@endsection @section('meta')
<meta property="og:title" content="{{ $data->judul }}" />
<meta property="og:url" content="{{ url('product/view')}}/{{ $data->slug }}" />
<meta property="og:image" content="{{ $data->img }}" />
<meta property="og:description" content="{!! substr($data->content,0,200) !!}.." />
<title>{{ $data->judul}} | SCI PAINT</title>
@endsection
