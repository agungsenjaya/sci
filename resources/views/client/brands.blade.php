@extends('index')
@section('content')
<section class=" text-white">
		<div class="">
			<!-- <img src="http://via.placeholder.com/450x150" width="100%" alt=""> -->
			<img  src="{{ asset('img/bg-colors.png') }}" width="100%" alt="" >
			<div class="bg-default uk-position-cover"></div>
			<div class="uk-position-center text-center">
				<h1 class="upper text-white uk-margin-remove exo display-3 bold">our brands</h1>
				<!-- <i class="fa fa-play-circle fa-4x text-white"></i> -->
				<p>lengkapi kebutuhan warna untuk rumah<br> yang lebih nyaman untuk di huni.</p>
			</div>
		</div>
</section>
	<section class="space-l">
		<div class="uk-container">
			<div class="uk-grid-small uk-child-width-1-2@s uk-flex-left " uk-grid>
				@foreach($brands as $data)
			    <div>
			        <div class="uk-card bt b-1 uk-card-default uk-card-body">
			        	<div class="media">
						  <img class="mr-4 align-self-center" src="{{ $data->img }}" width="180" alt="Generic placeholder image">
						  <div class="media-body border-left pl-4">
						  	<a href="{{ route('brands.view', ['id' => $data -> id]) }}" title=""><h3 class="upper exo">{{ $data->judul }} <i class="fa fa-play-circle default"></i></h3></a>
						    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.</p>
						  </div>
						</div>
			        </div>
			    </div>
			    @endforeach
			</div>	
		</div>
	</section>
@endsection