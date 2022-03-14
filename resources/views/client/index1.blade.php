<section class="space-m">
	<div class="container">
		<div class="col-md-8 offset-md-2 text-center mb-5">
			<p class="lead">PT.San Central Indah Paint manufacturing & coatings system
				<br>Kami bergerak dalam pembuatan, pendistribusian, dan penjualan cat.
				<br>Our Vision "From Experiment To Experience"</p>
		</div>
		<div class="row mb-5">
			<a href="" class="mb-4 mb-sm-0 col-md-4 text-white offset-md-2">
				<div class="images" data-aos="fade-up" data-aos-duration="1000">
					<img src="{{ asset('img/h-1.jpg') }}" alt="" width="100%" class="rd-1">
					<div class="rd-1 to-center bg-danger"></div>
					<div class="to-center px-4 pt-4">
						<div>
							<h4 class="title-2">About Us</h4>
							<p>Ketahui lebih lanjut seputar perushaaan dan company profile.</p>
						</div>
					</div>
					<div class="to-bottom px-4 pb-4">
					<div class="btn-icon-2 btn btn-white text-center"> <i class="bi bi-chevron-right"></i> </div>
					</div>
					<div class="to-bottom text-right">
					<img src="{{ asset('img/h-4.png') }}" alt="" width="100%" style="transform: translate(88px, 131px);">
					</div>
				</div>
			</a>
			<a href="" class="mb-4 mb-sm-0 col-md-4 text-white" style="margin-top:48px;margin-left:30px">
			<div class="images" data-aos="fade-up" data-aos-duration="1500">
					<img src="{{ asset('img/h-2.jpg') }}" alt="" width="100%" class="rd-1">
					<div class="rd-1 to-center bg-danger-1"></div>
					<div class="to-center px-4 pt-4">
						<div>
							<h4 class="title-2">Find Products</h4>
							<p>Temukan berbagai kebutuhan pengecatan rumah dan proyek.</p>
						</div>
					</div>
					<div class="to-bottom px-4 pb-4">
					<div class="btn-icon-2 btn btn-white text-center"> <i class="bi bi-chevron-right"></i> </div>
					</div>
					<div class="to-bottom text-right">
					<img src="{{ asset('img/h-5.png') }}" alt="" width="80%" style="transform: translate(35px, 68px);">
					</div>
				</div>
			</a>
		</div>
		<div class="row">
		<a href="" class="mb-4 mb-sm-0 col-md-4 text-white offset-md-4">
		<div class="images" data-aos="fade-up" data-aos-duration="2000">
					<img src="{{ asset('img/h-3.jpg') }}" alt="" width="100%" class="rd-1">
					<div class="rd-1 to-center bg-danger"></div>
					<div class="to-center px-4 pt-4">
						<div>
							<h4 class="title-2">Find Colors</h4>
							<p>Jelajahi panduan warna untuk inspirasi warna rumah Anda.</p>
						</div>
					</div>
					<div class="to-bottom px-4 pb-4">
					<div class="btn-icon-2 btn btn-white text-center"> <i class="bi bi-chevron-right"></i> </div>
					</div>
					<div class="to-bottom text-right">
					<img src="{{ asset('img/h-6.png') }}" alt="" width="90%" style="transform: translate(52px, 87px);">
					</div>
				</div>
			</a>
		</div>
	</div>
	<br>
</section>
<section class="space-m">
<div class="images">
<div class="" style="height:500px;background:url('https://i.pinimg.com/originals/62/b3/e1/62b3e1b98a352fbb8d2c5239298a9aa2.jpg');background-size:cover;background-position:center"></div>
<div class="to-center bg-overlay-1"></div>
<div class="container to-center align-items-center d-flex">
<div class="text-center text-white w-100">
<h1 class="my-0 text-uppercase display-5">Color of the years 2021</h1>
<div class="d-flex justify-content-center my-3">
<div>
	<div class="round-icon bg-light mr-3" style="height:120px;width:120px"></div>
</div>
<div>
	<div class="round-icon bg-light mr-3" style="height:120px;width:120px"></div>
</div>
<div>
	<div class="round-icon bg-light" style="height:120px;width:120px"></div>
</div>
</div>
<p class="lead">Inspirasi warna popular yang di adaptasi dari berbagai objek<br>
sangat baik untuk dijadikan warna rumah.</p>
<a href="" class="btn btn-white">Selangkapnya</a>
</div>
</div>
</div>
</section>
<section class="space-m">
<div class="container">
<div class="" style="background:url('../img/hero-1.jpg');background-size:cover">
<div class="row flex-column-reverse flex-lg-row">
<div class="col-md-6 align-self-center text-white">
<div class="p-0 p-sm-5">
<h1 class="mt-0">Aplikasi mobile</h1>
<p class="lead">Download aplikasi mobile sci paint melalui playstore. Temukan berbagai kebutuhan pengecatan rumah dan proyek.</p>
<a href="" class="btn-white btn">Selengkapnya</a>
</div>
</div>
<div class="col-md-6 text-center">
<img src="{{ asset('img/h-7.png') }}" alt="" width="80%">
</div>
</div>
</div>
</div>
</section>
<section class="bg-danger-1 text-white space-m">
<div class="container">
<div class="row flex-column-reverse flex-lg-row">
<div class="col-md-6 align-self-center">
<div class="p-0 p-sm-5">
<h1 class="mt-0">Find Store Location</h1>
<p class="lead">Temukan lokasi toko bangunan terdekat dengan Anda, Dapatkan produknya sekarang juga.</p>
<a href="" class="btn-white btn">Selengkapnya</a>
</div>
</div>
<div class="col-md-6">
<img src="https://dummyimage.com/600x500" alt="" width="100%">
</div>
</div>
</div>
</section>
<section class="position-relative space-m">
<div class="container">
<div class="text-center mb-4">
<h1 class="mb-0">News Update</h1>
<p class="lead">Dapatkan artikel terbaru dan berita seputar perusahaan</p>
</div>
<div class="card-deck">
@foreach($artikel->take(3) as $art)
  <a href="{{ route('blog.view',['slug' => $art -> slug]) }}" class="card sh-1 border-0 text-white bg-danger-1 rd-1">
    <div class="pt-4 px-4 card-body">
      <h4 class="card-title title-4">{{ $art->judul }}</h4>
      <p class="card-text">{!! substr($art->content, 0,100) !!}</p>
    </div>
    <div class="card-footer border-0 bg-transparent pb-4">
	<div class="d-flex justify-content-between">
	<div>
      <small class="text-uppercase">{{ $art->updated_at->format('d M Y') }}</small>
	</div>
	<div>
	<div class="badge badge-light text-capitalize">
		{{ $art->akategori->judul }}
	</div>
	</div>
	</div>
    </div>
  </a>
  @endforeach
</div>
</div>
</section>

<section>
<div class="sliderContainer">
  <div class="slider single-item">
  <div>
  <div class="images">
  <div style="background:url('https://images.squarespace-cdn.com/content/v1/5f3ea156cc2bbc2b4c3c9171/1600273036582-38NF5Z40XWEH2HFPGTA7/ke17ZwdGBToddI8pDm48kMLIFZF-RdJnv53QyKb76bcUqsxRUqqbr1mOJYKfIPR7LoDQ9mXPOjoJoqy81S2I8N_N4V1vUb5AoIIIbLZhVYwL8IeDg6_3B-BRuF4nNrNcQkVuAT7tdErd0wQFEGFSnIOtKmEu9df_BfjCL60WfrLG-xhlkhZ5ekCTmQxIej5k6nlT4eezhur4-uY2HaZbiw/AdobeStock_297874588.jpeg?format=2500w');background-size: cover;background-position:center bottom;height:90vh">
<div class="container space-m h-100 align-items-center d-flex w-100 z-in-1 position-relative">
				<div class="row w-100">
					<div class="col-md-6 offset-md-3 text-white text-center">
						<h1 class="mb-0 display-4 title-5">San central indah</h1>
						<p class="lead">Paint manufacturing & coatings system.</p> 
							<a href="" class="btn btn-dark">Selengkapnya</a>
					</div>
				</div>
			</div>
</div>
<div class="to-center bg-overlay-4"></div>
</div>
</div>
  <div>
  <div style="background:url('../img/hero-1.jpg');background-size: cover;background-position:center bottom;height:90vh">
<div class="container space-m h-100 align-items-center d-flex">
				<div class="row">
					<div class="col-md-6 text-center">
						<img src="{{ asset('img/products/1594279168Spectrum Waterproof SW 08.png') }}" alt="" width="100%">
					</div>
					<div class="col-md-6 align-self-center text-white text-md-left text-center">
						<h1 class="mb-0 display-5">Cat pelapis anti bocor</h1>
						<p class="lead">Sepctrum waterproof sangat cocok
							<br>untuk melindungi rumah Anda.</p> 
							<a href="" class="btn btn-white">Selengkapnya</a>
					</div>
				</div>
			</div>
</div>
</div>
    </div>
  <div class="progressBarContainer">
  <div class="col-8 offset-2 w-100 row">
    <div class="col">
      <span data-slick-index="0" class="progressBar"></span>
    </div>
    <div class="col">
      <span data-slick-index="1" class="progressBar"></span>
    </div>
    <div class="col">
      <span data-slick-index="2" class="progressBar"></span>
    </div>
  </div>
  </div>
</div>
</section>
<style>
.sliderContainer {
  position: relative;
}
.slider {
  width: 100%;
}
.slick-prev:before,
.slick-next:before {
  color: black;
}

.slick-dots {
  bottom: -30px;
}

.progressBarContainer {
  position: absolute;
  bottom: 20px;
  width:100%;
  left:0;
  right:0;
}

.progressBarContainer div {
  /* display: block; */
  /* width: 20%; */
  padding: 0;
  cursor: pointer;
  margin-right: 2%;
  float: left;
  color: white;
}

.progressBarContainer div:last-child {
  margin-right: 0;
}

.progressBarContainer div span.progressBar {
  width: 100%;
  height: 2px;
  background-color: rgba(255, 255, 255, 0.4);
  display: block;
}

.progressBarContainer div span.progressBar .inProgress {
  background-color: rgba(255, 255, 255, 1);
  width: 0%;
  height: 2px;
}
</style>
<script>
// === Slider ===
$(".slider").slick({
  infinite: true,
  arrows: false,
  dots: false,
  autoplay: false,
  speed: 800,
  fade: true,
  slidesToShow: 1,
  slidesToScroll: 1,
});

 
    var percentTime;
    var tick;
    var time = 1;
    var progressBarIndex = 0;

    $('.progressBarContainer .progressBar').each(function(index) {
        var progress = "<div class='inProgress inProgress" + index + "'></div>";
        $(this).html(progress);
    });

    function startProgressbar() {
        resetProgressbar();
        percentTime = 0;
        tick = setInterval(interval, 10);
    }

    function interval() {
        if (($('.slider .slick-track div[data-slick-index="' + progressBarIndex + '"]').attr("aria-hidden")) === "true") {
            progressBarIndex = $('.slider .slick-track div[aria-hidden="false"]').data("slickIndex");
            startProgressbar();
        } else {
            percentTime += 1 / (time + 5);
            $('.inProgress' + progressBarIndex).css({
                width: percentTime + "%"
            });
            if (percentTime >= 100) {
                $('.single-item').slick('slickNext');
                progressBarIndex++;
                if (progressBarIndex > 2) {
                    progressBarIndex = 0;
                }
                startProgressbar();
            }
        }
    }

    function resetProgressbar() {
        $('.inProgress').css({
            width: 0 + '%'
        });
        clearInterval(tick);
    }
    startProgressbar();

    $('.progressBarContainer div').click(function () {
    	clearInterval(tick);
    	var goToThisIndex = $(this).find("span").data("slickIndex");
    	$('.single-item').slick('slickGoTo', goToThisIndex, false);
    	startProgressbar();
    });
</script>