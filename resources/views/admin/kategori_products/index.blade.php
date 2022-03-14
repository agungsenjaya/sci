@extends('layouts.app')
@section('content')
<!-- <div class="justify-content-between d-flex">
    <div>
        <h6 class="mg-b-0 tx-spacing--1">kategori products</h6>
    </div>
    <div>
    	<ol class="bl-admin breadcrumb p-0  bg-transparent title text-uppercase">
		    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
		    <li class="breadcrumb-item"><a href="{{ route('products.index') }}">products</a></li>
		    <li class="breadcrumb-item active" aria-current="page">kategori products</li>
		  </ol>
    </div>
</div>
<hr> -->
<div class="d-flex justify-content-between">
	<div>
	<h4 class="mb-0 title-2">Kategori Produk Page</h4>
    <p>Halaman kategori produk</p>
	</div>
	<div>
    <ol class="breadcrumb p-0  bg-transparent text-uppercase font-13 title-1">
		    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
		    <li class="breadcrumb-item"><a href="{{ route('products.index') }}">products</a></li>
		    <li class="breadcrumb-item active" aria-current="page">Kategori Products</li>
		  </ol>
	</div>
</div>
<!-- Content -->
<div class="card py-4">
<table class="table table-bordered table-striped w-100" id="example">
		<thead class="table-light">
			<tr class="title-3 font-14 text-uppercase">
				<td>ID</td>
				<td>Judul</td>
				<td>Jumlah Products</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody class="text-capitalize font-14">
			@foreach($kategori as $kat)
			<tr class="items-{{ $kat->id }}">
				<th>{{ $kat->id }}</th>
				<td>{{ $kat->judul }}</td>
				<td>{{ count($kat->products) }} QTY</td>
				<!-- <td><a href="javascript:void(0)" data-toggle="modal" data-target="#a-{{ $kat->id }}"><i class="fal fa-external-link mr-2"></i>Actions</a></td> -->
				<td><a href="{{ route('kategori.edit',['id' => $kat -> id]) }}"><i class="fal fa-external-link mr-2"></i>Actions</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<!-- End Content -->
<!-- Modal Edit -->
@foreach($kategori as $data)
<div class="modal fade" id="a-{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    	<div class="modal-content rounded">
		<div class="modal-header">
					<p class="modal-title title-3 text-uppercase" id="exampleModalLabel">Edit Kategori</p>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="bi bi-x"></i>
					</button>
				</div>
	      <div class="modal-body">
	        <form action="{{ route('kategori.update',['id' => $data -> id]) }}" method="POST" enctype="multipart/form-data">
	        	@csrf
	        	<div class="form-group">
	        		<label for="">Judul Kategori</label>
	        		<input type="text" class="form-control" name="judul" required placeholder="Masukan judul" value="{{ $data->judul }}">
	        	</div>
	        	<div class="form-group">
					<label for="">foto kategori</label>
					<div class="input-group">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="img">
							<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
						</div>
						</div>
					<!-- <div class="file-h">
						<input type="file" class="form-control form-control-file" name="img">
					</div> -->
	        	</div>
	        	<div class="form-group">
	        		<label for="">Konten Kategori</label>
	        		<textarea name="content" rows="6" class="form-control" required placeholder="Masukan konten">{{ $data->content }}</textarea>
	        	</div>
				</div>
				<div class="modal-footer">
	        <button type="button" class="btn" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-danger rounded-pill">Update Now</button>
      </form>
	      </div>
    </div>
  </div>
</div>
@endforeach
<!-- End Modal Edit -->
@endsection
@section('js')
<script>
	$(document).ready(function() {
	    $('#example').DataTable();
	});
</script>
@endsection