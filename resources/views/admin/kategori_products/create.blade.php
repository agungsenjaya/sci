@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between">
	<div>
	<h4 class="mb-0 title-2">Kategori Produk Page Add</h4>
    <p>Halaman tambah kategori produk</p>
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
<form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
        	@csrf
        	<div class="form-group">
        		<label for="">Judul Kategori</label>
        		<input type="text" class="form-control" name="judul" required placeholder="Masukan judul">
        	</div>
        	<div class="form-group">
				<label for="">foto kategori</label>
				<!-- <div class="file-h">
					<input type="file" class="form-control form-control-file" name="img" required>
				</div> -->
				<div class="input-group">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="img">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>
        	</div>
        	<div class="form-group">
        		<label for="">Konten Kategori</label>
        		<textarea name="content" class="form-control" required placeholder="Masukan konten"></textarea>
        	</div>
			
        <button type="submit" class="btn btn-danger rounded-pill">Insert Now</button>
      
      </form>
	  </div>
@endsection