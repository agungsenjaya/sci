@extends('layouts.app')
@section('content')
<div class="card shadow-sm p-4">
  <div class="d-flex justify-content-end mb-3">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('index.slider') }}">Slider</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
  </ol>
</nav>
  </div>
        <form method="POST" action="{{ route('store.slider') }}" enctype="multipart/form-data">
            @csrf
			<div class="row">
                    <div class="col-md">
                    <div class="mb-3">
                        <label for="" class="form-label">judul slider</label>
                        <input type="text" class="form-control" name="judul" placeholder="Masukan judul" required>
                    </div>
                    </div>
                    <div class="col-md">
                    <div class="mb-3">
                        <label for="" class="form-label">link slider</label>
                        <div class="input-group">
							<span class="input-group-text" id=""><i class="bi bi-link-45deg"></i> </span>
							<input type="text" class="form-control" name="link" placeholder="Masukan Link" aria-label="Username" aria-describedby="" required>
						</div>

                    </div>
                    </div>
                    </div>
            <div class="row">
                <div class="col-md">
                    <div class="mb-3">
                    <label for="" class="form-label">Mode Web</label>
    <div class="position-relative">
    <input type="file" class="file-1 form-control" name="img" required accept=".jpg,.jpeg,.png">
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
                    <label for="" class="form-label">Mode Mobile</label>
    <div class="position-relative">
    <input type="file" class="file-2 form-control" name="img_mobile" required accept=".jpg,.jpeg,.png">
    <div class="to-center d-flex align-items-center justify-content-between px-3 form-control a3 hvr-input">
      <div>
        <span class="a4 opacity-50">Masukan Gambar</span>
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
          $('.a4').text('Masukan Gambar');
        }
      });
</script>
@endsection