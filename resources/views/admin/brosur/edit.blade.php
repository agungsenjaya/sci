@extends('layouts.app')
@section('content')
<div class="card shadow-sm p-4">
  <div class="d-flex justify-content-end mb-3">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('index.brosur') }}">Brosur</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
  </ol>
</nav>
  </div>
<form action="{{ route('update.brosur',['id' => $data -> id]) }}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="mb-3">
        <label for="" class="form-label">
            Judul Brosur
        </label>
            <input type="text" class="form-control" placeholder="Masukan judul" required name="judul" value="{{ $data->judul }}">
    </div>
    <div class="row">
    <div class="col-md">

<div class="mb-3">
<label for="" class="form-label">Cover Brosur<span class="ms-2 fw-light"> <a href="javascript:void(0)" data-caption="{{ $data->judul }}" data-fancybox="{{ $data->id }}" data-src="{{ url($data->img) }}" class="">
          <i class="bi bi-eye-fill me-2"></i>Current Images
        </a></span></label>
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
<label for="" class="form-label">Pdf Brosur<span class="ms-2 fw-light"> <a href="javascript:void(0)" data-caption="{{ $data->judul }}" data-fancybox="{{ $data->id }}" data-src="{{ url($data->pdf) }}" class="">
          <i class="bi bi-eye-fill me-2"></i>Current Pdf
        </a></span></label>
<div class="position-relative">
<input type="file" class="file-2 form-control" name="pdf" accept=".pdf">
<div class="to-center d-flex align-items-center justify-content-between px-3 form-control a3 hvr-input">
<div>
<span class="a4 opacity-50">Masukan Brosur</span>
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
    <button type="submit" class="btn btn-primary">Update Now</button>
    </form>
</div>
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
          $('.a4').text('Masukan Brosur');
        }
      });
</script>
@endsection