@extends('index')
@section('content')
<div id="rest" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<img src="{{ asset('img/hero-1.jpg') }}" width="100%" alt="PT SAN CENTRAL INDAH | SCI PAINT" class="rounded-top">
			<div class="modal-body text-center">
				<p class="line-menu mb-0">Diperkirakan Anda membutuhkan
					<br> <span id="5"></span> gallon cat <span class="title-6 text-uppercae text-primary" id="7"></span> per 1 lapis.</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button> <a id="6" class="btn btn-primary">Detail Produk</a>
			</div>
		</div>
	</div>
</div>
<!-- <div class="min-vh-100" style="background:url('../img/hero-1.jpg');background-size:cover"> -->
<div class="min-vh-100">
<div class="text-center">
		<div class="d-flex align-items-center justify-content-center" style="background:url('../img/hero-1.jpg');height:300px;background-size:cover;background-position:center">
		<div class="p-3 text-white">
		<h1 class="title-5 display-5 text-uppercase mb-0">Kalkulator Pengecatan</h1>
			<p class="lead">Fitur untuk menghitung kebutuhan pengecatan dinding rumah Anda, <br> agar lebih efisien dan efektif dalam penggunaan cat.</p>
		</div>
		</div>
		</div>
	<div class="">
		<section class="space-m">
			<div class="container">
				<div class="row">
					<div class="col-md-6 offset-md-3">
					<!-- <h3 class="mt-0 title-6 text-uppercase text-center">Kalkulator Pengecatan</h3> -->
						<div class="card card-body">
							<form id="calculator" method="get" action="#">
								<!-- <fieldset> -->
									<div class="mb-3">
										<!-- <label class="form-label">Produk Cat</label> -->
										<div class="form-label">Produk Cat<span class="ms-1 text-primary">*</span></div>
										<select name="merek" class="form-select" id="1" required>
											<option class="active" value="">-- Select Option --</option>
											<option value="25" class="k">Kem-Tone</option>
											<option value="25" class="s">Spectrum</option>
											<option value="11" class="c">ColorTone</option>
											<option value="7" class="t">Tamitex</option>
											<option value="6" class="v">Vinotex</option>
											<option value="6" class="p">Panatex</option>
											<option value="4" class="a">Apollo</option>
										</select>
									</div>
									<div class="mb-3">
										<div class="form-label">Luas Dinding<span class="ms-1 text-primary">*</span></div>
										<div class="input-group bg-white border rounded">
											<input name="luas" class="form-control  number border-0" id="2" placeholder="Masukan Luas" aria-label="Luas dinding" aria-describedby="basic-addon1" required>
											<!-- <div class="input-group-append"><span class="input-group-text btn  border-0 title-1" id="basic-addon1"> Meter </span> -->
											</div>
										</div>
									<div class="row">
										<div class="mb-3 col-sm-6">
										<div class="form-label">Jumlah Pintu</div>
											<select name="pintu" class="form-select   " id="3">
												<option selected disabled>-- Select Option --</option>
												<option value="">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select> 
										</div>
										<div class="mb-3 col-sm-6">
											<div class="form-label">Jumlah Jendela</div>
											<select name="jendela" class="form-select " id="4">
												<option selected disabled>-- Select Option --</option>
												<option value="">0</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select> 
										</div>
									</div>
									<div class="text-center">
										<button type="button" class="btn btn-primary w-100 mb-3" id="button1" value="button">Kalkulasi Cat</button>
										<button type="button" class="btn btn-light w-100" id="button2" value="button">Reset Value</button>
									</div>
								<!-- </fieldset> -->
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>
@endsection
@section('css')
<style>
	.form-control .error {
    border-color: #D7052C;
}
label{
	display:none !important;
}
</style>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.js"></script>
<script src="{{ asset('js/calculator.js') }}"></script>
<script>
	$(document).ready(function () {
    $("#calculator").validate({
        rules: {
            "merek": {
                required: true,
            },
            "luas": {
                required: true,
            }
        },
        messages: {
            "merek": {
                required: ""
            },
            "luas": {
                required: "",
            }
        }
    });
});
</script>
@endsection
@section('meta')
    <meta property="og:title" content="Kalkulator Cat" />
    <meta property="og:url" content="{{ url('paint-calculator') }}">
    <meta property="og:description" content="Hitung kebutuhan cat tembok untuk rumah anda menggunakan tools kalkulator cat.">
    <title>Kalkulator Cat | PT SAN CENTRAL INDAH | SCI PAINT</title>
@endsection