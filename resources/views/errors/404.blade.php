@extends('index')
@section('content')

<div class="d-flex align-items-center justify-content-center text-center  vh-100">
<div class="p-1">
	<i class="las la-tired display-1"></i>
	<p>Maaf halaman yang Anda maksud tidak ditemukan <br> harap periksa kembali url, Terima kasih.</p>
	<a href="{{ route('index.home') }}" title="" class="btn btn-danger rounded-pill">kembali ke awal</a>
	</div>
</div>
@endsection
@section('meta')
    <title>TIdak Ditemukan | PT SAN CENTRAL INDAH | SCI PAINT</title>
@endsection