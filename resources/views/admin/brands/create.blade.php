@extends('layouts.app')
@section('content')
<div class="card shadow-sm p-4">
  <div class="d-flex justify-content-end mb-3">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('brands.index') }}">Brands</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
  </ol>
</nav>
  </div>
        <form method="POST" action="{{ route('brands.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md">
                    <div class="mb-3">
                        <label for="" class="form-label">judul brands</label>
                        <input type="text" class="form-control" name="judul" placeholder="Masukan judul" required>
                    </div>
                </div>
                <div class="col-md">
                    <div class="mb-3">
                    <label for="" class="form-label">Foto Brands</label>
    <div class="position-relative">
    <input type="file" class="file form-control" name="img" required accept=".jpg,.jpeg,.png">
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
            </div>
            
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Insert Now</button>
            </div>
        </form>
</div>
@endsection
@section('js')
<script>
    $('.a1').on('click', function(){
        $('.file').trigger('click');
      });

      $(".file").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        if (fileName) {
          $('.a2').text(fileName);
        }else{
          $('.a2').text('Masukan Gambar');
        }
      });
</script>
@endsection