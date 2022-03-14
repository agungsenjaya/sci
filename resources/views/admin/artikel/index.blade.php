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
				<td>Post Date</td>
				<td>Kategori</td>
				<td>Actions</td>
			</tr>
		</thead>
		<tbody class="text-capitalize">
			@foreach($artikel->reverse() as $data)
			<tr>
				<th>{{ $no++ }}</th>
				<td>{{ $data->judul }}</td>
				<td>{{ $data->created_at->format('d  M Y') }}</td>
				<td><i class="bi bi-check-circle-fill text-primary me-2"></i>{{ $data->akategori->judul }}</td>
				<td>
				<a href="{{ route('artikel.edit',['id' => $data -> id]) }}" class="btn px-2 py-1 w-100 btn-primary" title="" ><i class="fal fa-external-link mr-2"></i>Edit</a>
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