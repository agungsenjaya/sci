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
				<td>Name</td>
				<td>Email</td>
				<td>Post Date</td>
				<td>Actions</td>
			</tr>
		</thead>
        <tbody>
			@foreach($contact->reverse() as $data)
			<tr>
				<th>{{ $no++ }}</th>
				<td class="text-capitalize">{{ $data->name }}</td>
				<td>{{ $data->email }}</td>
				<td>{{ $data->created_at->format('d, M Y') }}</td>
				<td>
					<a href="javascript:void(0)" class="btn px-2 py-1 w-100 btn-primary" data-bs-toggle="modal" data-bs-target="#mod-{{ $data->id }}"><i class="fal fa-external-link mr-2"></i>Message</a>
				</td>
			</tr>
            <!-- Modal -->
<div class="modal fade" id="mod-{{ $data->id }}" tabindex="-1" aria-labelledby="modLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modLabel">Message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        {{ $data->message }}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close Message</button>
      </div>
    </div>
  </div>
</div>
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