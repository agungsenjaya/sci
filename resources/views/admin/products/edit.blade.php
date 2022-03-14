@extends('layouts.app')
@section('content')
<div class="card shadow-sm p-4">
  <div class="d-flex justify-content-end mb-3">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('products.index') }}">Products</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
  </ol>
</nav>
  </div>
		<form method="POST" action="{{ route('products.update',['id' => $data -> id]) }}" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-md">
					<div class="mb-3">
						<label for="" class="form-label">judul produk</label>
						<input type="text" class="form-control" name="judul" placeholder="Masukan judul" required value="{{ $data->judul }}">
					</div>
				</div>
				<div class="col-md">

				<div class="mb-3">
    <label for="" class="form-label">Gambar Produk<span class="ms-2 fw-light"> <a href="javascript:void(0)" data-caption="{{ $data->judul }}" data-fancybox="{{ $data->id }}" data-src="{{ url($data->img) }}" class="">
          <i class="bi bi-eye-fill me-2"></i>Current Images
        </a></span>
    </label>
    <div class="position-relative">
    <input type="file" class="file-1 form-control" name="img" accept=".jpg,.jpeg,.png">
    <div class="to-center d-flex align-items-center justify-content-between px-3 form-control a1 hvr-input">
      <div>
        <span class="a2 opacity-50">Masukan Gambar</span>
      </div>
      <div>
        <div class="ps-3 border-start">
          <i class="bi bi-image-fill text-secondary"></i> 
        </div>
      </div>
    </div>
    </div>
  </div>
					</div>
				<div class="col-md">

				<div class="mb-3">
    <label for="" class="form-label">Datateknis<span class="ms-2 fw-light"> <a href="javascript:void(0)" data-caption="{{ $data->judul }}" data-fancybox="{{ $data->id }}" data-src="{{ url($data->pdf) }}" class="">
          <i class="bi bi-eye-fill me-2"></i>Current Pdf
        </a></span></label>
    <div class="position-relative">
    <input type="file" class="file-2 form-control" name="pdf" accept=".pdf">
    <div class="to-center d-flex align-items-center justify-content-between px-3 form-control a3 hvr-input">
      <div>
        <span class="a4 opacity-50">Masukan Datateknis</span>
      </div>
      <div>
        <div class="ps-3 border-start">
          <i class="bi bi-image-fill text-secondary"></i> 
        </div>
      </div>
    </div>
    </div>
  </div>
					</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="mb-3">
						<label for="" class="form-label">brands </label>
						<select class="form-select" name="brand_id" required>
							<option value="">-- Select Option --</option>
							@foreach($brand as $dat)
							<option {{ ($dat->id == $data->brand_id) ? 'selected' : '' }} value="{{ $dat->id }}">{{ $dat->judul }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="mb-3">
					  <label for="" class="form-label">kategori Produk</label>
					  <select class="form-select" name="kategori_id" required>
							<option value="">-- Select Option --</option>
							@foreach($kategori as $dat)
							<option {{ ($dat->id == $data->kategori_id) ? 'selected' : '' }} value="{{ $dat->id }}">{{ $dat->judul }}</option>
							@endforeach
						</select>
					</div>
				</div>
			</div>
			<div class="mb-3">
				<label for="" class="form-label">Keterangan Produk</label>
				<textarea name="content" class="form-control" placeholder="Masukan keterangan" required rows="6">{{ $data->content }}</textarea>
			</div>
			<div class="mb-3">
				<button type="submit" class="btn btn-primary me-2">Update Now</button>
				<!-- <a class="btn btn-secondary"><i class="bi bi-slash-circle me-2"></i>Delete Now</a> -->
			</div>
		</form>
</div>
<!-- End Content -->
@endsection
@section('js')
<script>

$('.a1').on('click', function(){
        $('.file-1').trigger('click');
      });

      $(".file-1").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        if (fileName) {
          $('.a2').text(fileName);
        }else{
          $('.a2').text('Masukan Gambar');
        }
      });
      
      $('.a3').on('click', function(){
        $('.file-2').trigger('click');
      });

      $(".file-2").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        if (fileName) {
          $('.a4').text(fileName);
        }else{
          $('.a4').text('Masukan Datateknis');
        }
      });
	
</script>
@endsection