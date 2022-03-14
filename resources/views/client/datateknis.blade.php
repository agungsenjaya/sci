@extends('index')
@section('content')

<div class="modal-backdrop opacity-2 show fade z-in-1 mda" style="display:none !important"></div>
<section>
	<div class="images">
		<div style="background:url('../img/hero-1.jpg');background-size:cover;height:400px;background-position:center"></div>
		<div class="position-absolute" style="top:0;right:0;left:0;bottom:0;">
			<div class="container h-100 align-items-center d-flex justify-content-center text-center center-mobile">
				<div class="text-white w-100">
					<h1 class="text-uppercase title-5 mb-0 display-5">Data teknis</h1>
					<p class="lead">Dapatkan data teknis produk secara online
						<br>update terbaru dari kami</p>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="min-vh-100">

<section class="space-m">
<div class="container">
<table id="example" class="table" style="width:100%">
  <thead class="bg-primary text-white">
    <tr class="title-3 text-uppercase">
      <td scope="col">#</td>
      <td scope="col">Produk</td>
      <td scope="col">Merek</td>
      <td scope="col">Tanggal Post</td>
      <td scope="col">Download</td>
    </tr>
  </thead>
  <tbody>
  @foreach($teknis as $teknis)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td class="text-capitalize">{{ $teknis->judul }}</td>
      <td class="text-capitalize"><i class="bi bi-check-circle-fill text-primary me-2"></i> {{ $teknis->brand->judul }}</td>
      <td>{{ $teknis->created_at->format('d M Y') }}</td>
      <td>
	  	<a href="{{ url('/') . '/' . $teknis->pdf }}" class="badge bg-primary w-100"><i class="bi bi-file-earmark-pdf-fill me-2"></i>Download</a>
	  </td>
    </tr>
	@endforeach
  </tbody>
</table>
</div>
</section>
</div>
@endsection
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
@endsection
@section('js')
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
<script>
  $('#example').DataTable();
</script>
@endsection
@section('meta')
    <meta property="og:title" content="Data Teknis" />
    <meta property="og:url" content="{{ url('data-teknis') }}">
    <meta property="og:description" content="Dapatkan pengetahuan lebih lanjut seputar data teknis produk sci paint.">
    <title>Data Teknis | PT SAN CENTRAL INDAH | SCI PAINT</title>
@endsection