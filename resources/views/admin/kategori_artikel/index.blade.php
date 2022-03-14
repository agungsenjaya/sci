@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between">
	<div>
	<h4 class="mb-0 title-2">Kategori Artikel Page</h4>
    <p>Halaman kategori artikel</p>
	</div>
	<div>
          <ol class="breadcrumb p-0  bg-transparent text-uppercase font-13 title-1">
		    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
		    <li class="breadcrumb-item"><a href="{{ route('artikel.index') }}">artikel</a></li>
		    <li class="breadcrumb-item active" aria-current="page">kategori</li>
		  </ol>
	</div>
</div>
<div class="card py-4">
<table class="table table-bordered table-striped w-100" id="example">
		<thead class="table-light">
			<tr class="title-3 font-14 text-uppercase">
                <td>ID</td>
                <td>judul</td>
                <td>artikel</td>
                <td>actions</td>
            </tr>
        </thead>
        <tbody class="text-capitalize font-14">
            @foreach($akategori as $data)
            <tr>
                <th>{{ $data->id }}</th>
                <td>{{ $data->judul }}</td>
                <td>{{ count($data->artikels) }}</td>
                <td>
                    <a href="javascript:void(0)" title="" data-toggle="modal" data-target="#a-{{ $data->id }}"><i class="fal fa-external-link mr-2"></i>Actions</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @foreach($akategori as $data)
        <!-- Modal -->
        <div class="modal fade" id="a-{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content rounded">
            <div class="modal-header">
					<p class="modal-title title-5 text-uppercase" id="exampleModalLabel">Edit kategori</p>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="bi bi-x"></i>
					</button>
				</div>
              <div class="modal-body">
                <form method="POST" action="{{ route('ak.update',['id' => $data -> id]) }}" enctype="multipart/form-data">
                @csrf
                <div>
                    <div class="form-group">
                        <label for="">judul kategori</label>
                        <input type="text" class="form-control" name="judul" placeholder="Masukan judul" required value="{{ $data->judul }}">
                    </div>
                </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger rounded-pill">Update Now</button>
              </div>
            </form>
            </div>
          </div>
        </div>
        @endforeach
</div>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endsection