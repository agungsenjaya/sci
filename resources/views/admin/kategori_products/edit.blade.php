@extends('layouts.app')
@section('content')
<div class="sh-2">
<div class="card p-5">
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
<div class="pt-4">
<div class="row">
<div class="col-md-6">
<img src="{{ $data->img }}" alt="" width="100%" id="preview">
</div>
<div class="col-md-6">
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
							<input type="file" class="custom-file-input cs-1" id="" aria-describedby="" name="img" accept=".jpg,.jpeg,.png">
							<label class="custom-file-label" for="">{{ $data->img }}</label>
						</div>
						</div>
	        	</div>
				<a href="{{ $data->img }}" target="_blank" class="span-1"><span class="small">{{ $data->img }}</span></a>
                <a href="javascript:void(0)" class="badge badge-danger bs-1"><i class="bi bi-x mr-1"></i>Cancel</a>
	        	<div class="form-group mt-3">
	        		<label for="">Konten Kategori</label>
	        		<textarea name="content" rows="6" class="form-control" required placeholder="Masukan konten">{{ $data->content }}</textarea>
	        	</div>
	        <button type="submit" class="btn btn-danger rounded-pill">Update Now</button>
      </form>
	  </div>
	  </div>
</div>
</div>
</div>
@endsection
@section('js')
<script>
$('.bs-1').hide();
var imgg = document.getElementById('preview');
$(".cs-1").on("change", function(event) {
    var fileName = $(this).val().split("\\").pop();
    if ($(this).val()) {
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        $('.span-1').hide();
        $('.bs-1').show();
        imgg.src = URL.createObjectURL(event.target.files[0]);
        imgg.onload = function() {
            URL.revokeObjectURL(imgg.src) // free memory
        }
    }else{
        $(this).siblings(".custom-file-label").addClass("selected").html($('.span-1 span').text());
        imgg.src = $('.span-1 span').text();
        $('.span-1').show();
        $('.bs-1').hide();
    }
});
$('.bs-1').on('click', function(){
    var a = $('.cs-1').val(null);
    $('.cs-1').siblings(".custom-file-label").addClass("selected").html($('.span-1 span').text());
    imgg.src = $('.span-1 span').text();
    $('.span-1').show();
    $(this).hide();
});
</script>
@endsection