@extends('layouts.app')
@section('content')
<div class="card shadow-sm p-4">
<div class="d-flex justify-content-end mb-3">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('artikel.index') }}">Artikel</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
  </ol>
</nav>
  </div>
    <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Judul artikel</label>
            <input type="text" class="form-control" name="judul" required>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="mb-3">
                    <label for="" class="form-label">Kategori Artikel</label>
                    <select class="form-select" name="akategori_id" required>
                        <option value="">-- Select Option --</option>
                        @foreach($akategori as $data)
                        <option value="{{ $data->id }}">{{ $data->judul }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md">
                <div class="mb-3">
                    <label for="" class="form-label">Gambar Artikel</label>
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
        <div class="mb-3">
            <label for="" class="form-label">Description</label>
            <textarea id="summer" name="content" required></textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Insert Now</button>
        </div>
    </form>
</div>
@endsection
@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $('#summer').summernote({
        tabsize: 2,
        height: 300,
        toolbar: [
          ['style', ['bold', 'italic', 'underline', 'clear']],
          ['font', ['strikethrough', 'superscript', 'subscript']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
      
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