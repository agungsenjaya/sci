@extends('layouts.app')
@section('content')
@php
$no = 1;
@endphp
<div class="card shadow-sm p-4">
<table class="table w-100" id="example">
		<thead class="bg-light">
			<tr class="title-3 text-uppercase">
				<td>ID</td>
				<td>judul</td>
				<td>Img</td>
				<td>Post Date</td>
				<td>Status</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody class="text-capitalize">
			@foreach($slider->reverse() as $data)
			<tr>
				<th>{{ $no++ }}</th>
				<td>{{ $data->judul }}</td>
				<td><span class="ms-2 fw-light"> <a href="javascript:void(0)" data-caption="{{ $data->judul }}" data-fancybox="{{ $data->id }}" data-src="{{ url($data->img) }}" class="">
          <i class="bi bi-eye-fill me-2"></i>Current Images
        </a></span></td>
				<td>{{ $data->created_at->format('d  M Y') }}</td>
				<!-- <td><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ $data->status }}</td> -->
				<td>
					<select name="status" id="{{ $data->id }}" class="form-select form-select">
						<option value="active" {{ ($data->status == 'active') ? 'selected' : '' }}>active</option>
						<option value="deactive" {{ ($data->status == 'deactive') ? 'selected' : '' }}>deactive</option>
					</select>
				</td>
				<td>
				<a href="{{ route('edit.slider',['id' => $data -> id]) }}" class="btn px-2 py-1 w-100 btn-primary" title="" ><i class="fal fa-external-link mr-2"></i>Edit</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection
@section('js')
<script>
	$(document).ready(function() {
	    $('#example').DataTable();
	});
</script>
@endsection