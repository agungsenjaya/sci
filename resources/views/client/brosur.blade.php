@extends('index')
@section('content')

<div class="modal-backdrop opacity-2 show fade z-in-1 mda" style="display:none !important"></div>
<section>
	<div class="images">
		<div style="background:url('../img/hero-1.jpg');background-size:cover;height:400px;background-position:center"></div>
		<div class="position-absolute" style="top:0;right:0;left:0;bottom:0;">
			<div class="container h-100 align-items-center d-flex justify-content-center text-center center-mobile">
				<div class="text-white w-100">
					<h1 class="text-uppercase title-5 mb-0 display-5">Eksplor brosur</h1>
					<p class="lead">Dapatkan brosur terbaru produk secara online
						<br>update terbaru dari kami</p>
						<div id="users" class="">
						<div class="col-md-6 offset-md-3">
							<div class="justify-content-center d-flex mt-3 mb-4">
								<div class="input-group">
									<span class="input-group-text bg-white border-0" id="basic-addon1">
										<img src="{{ asset('img/search.svg') }}" alt="" class="" width="20" height="20">
									</span>
									<input type="text" id="warnaku" onfocus="cari()" class="search form-control border-0" placeholder="Cari brosur disini.." aria-label="Username" aria-describedby="basic-addon1">
								</div>
							</div>
							<div class="justify-content-center d-flex z-in-1 position-relative">
								<div class="card text-left text-dark p-2 w-100 position-absolute" id="mds" style="height:40vh;overflow-y:auto;display:none">
									<div class="list-group list-group-flush list line-2">@foreach($brosurs as $akk)
										<a href="{{ url('/') . '/' . $akk->pdf }}" class="media list-group-item text-secondary" id="warnakuu">
											<div class="media"><i class="bi bi-file-earmark-pdf-fill text-primary me-3 align-self-center"></i>
												<div class="media-body">
													<p class="ak1 text-dark m-0">{{ $akk->judul }}</p>
												</div>
											</div>
										</a>@endforeach</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>
<section class=" space-m">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1">@if(count($brosur) > 0)
				<div class="row">@foreach($brosur->reverse() as $bray)
					<div class="col-md-4 mb-4">
						<a class="card text-dark rising h-100" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#down-{{ $bray->id }}">
							<div class="images bg-light">
								<img src="{{ $bray->img }}" width="100%" alt="PT SAN CENTRAL INDAH | SCI PAINT" class="card-img-top">
								<!-- <img src="https://dummyimage.com/600x650" width="100%" alt="PT SAN CENTRAL INDAH | SCI PAINT" class="img-card-top"> -->
							</div>
							<div class=" text-capitalize card-body">
							<div class="d-flex justify-content-between font-12 ">
									<div class=""> <i class="bi bi-file-earmark-pdf-fill text-primary me-2 h5"></i>
									</div>
									<div class="title-5 text-uppercase">{{ $bray->created_at->format('D, M Y') }}</div>
								</div>
								<hr>
								<p class="text-uppercase title-6 m-0">{{ $bray->judul }}</p>
							</div>
							<div class="card-footer bg-primary p-0">
								<div class="btn text-white w-100">Download</div>
							</div>
						</a>
					</div>
					<div class="modal fade" tabindex="-1" role="dialog" id="down-{{ $bray->id }}">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title title-6 text-uppercase">Notifications</h5> 
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
								</div>
								<div class="modal-body text-center">
									<p>Apakah anda yakin akan men download brosur <span>{{ $bray->judul }}</span>? klik tombol di bawah untuk melanjutkan.</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button> <a href="{{ url('/') . '/' . $bray->pdf }}" class="btn btn-primary">Download Now</a>
								</div>
							</div>
						</div>
					</div>@endforeach</div>
				<div class="d-flex justify-content-center mt-4">{{$brosur->links()}}</div>@else
				<div class="text-center">
					<img src="{{ asset('img/404.jpg') }}" width="90%" alt="PT SAN CENTRAL INDAH | SCI PAINT">
					<div>Maaf untuk saat ini brosur yang anda cari
						<br>belum tersedia, silahkan pilih menu lainnya.</div>
				</div>@endif</div>
		</div>
	</div>
</section>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/list.js/1.0.2/list.min.js" integrity="sha512-MT5YyrGWqMGkIbwkVUZEWGrRDjlNx8loukEdFyzLo4s8INKVxnDQy2eFcpmnWGrFwJ+X8mRTQOJpWCayXz7+Og==" crossorigin="anonymous"></script>
<script>
function cari(){
  $('#mds, .mda').show();
};
$('.mda').on('click',function(){
  $('#mds').hide();
  $(this).hide();
});
$(document).keyup(function(e) {
  if (e.key === "Escape") { // escape key maps to keycode `27`
    $('#mds, .mda').hide();
    $('input').blur();
 }
});
var options = {
    valueNames: [ 'ak1', 'ak2' ]
  };
  
  var userList = new List('users', options);
</script>
@endsection
@section('meta')
    <meta property="og:title" content="Brosur" />
    <meta property="og:url" content="{{ url('brosur') }}">
    <meta property="og:description" content="Koleksi brosur terbaru dari sci paint untuk informasi lebih lanjut silahkan download.">
    <title>Brosur | PT SAN CENTRAL INDAH | SCI PAINT</title>
@endsection