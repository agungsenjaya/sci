@extends('index') @section('content')
<section>
    <div class="images">
        <div style="background: url('../img/hero-1.jpg'); background-size: cover; height: 400px; background-position: center;"></div>
        <div class="position-absolute" style="top: 0; right: 0; left: 0; bottom: 0;">
            <div class="container h-100 align-items-center d-flex justify-content-center text-center center-mobile">
                <div class="text-white">
                    <h1 class="text-uppercase title-5 mb-0 display-5">Produk {{ $data->judul }}</h1>
                    <p class="lead">
                        Dapatkan produk {{ $data->judul }} ditoko bangunan <br />
                        terdekat rumah Anda.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="bg-light z-in-1 py-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 p-0 text-uppercase">
                <li class="breadcrumb-item"><a href="{{ route('products') }}" class="">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $data->judul }}</li>
            </ol>
        </nav>
    </div>
</div>
<div class="d-sm-none d-block bg-light py-2 sticky-top d-flex justify-content-between">
    <div class="w-100 mx-2">
        <div class="input-group">
            <span class="input-group-text bg-primary" id="basic-addon1">
                <i class="bi bi-funnel-fill text-white"></i>
            </span>
            <select class="form-select bg-transparent" id="exampleFormControlSelect1" onchange="location = this.value;">
                <option class="title-1" selected disabled>Filter Produk</option>
                <optgroup label="Kategori Merek"></optgroup>
                @foreach($brands as $br)
                <option value="{{ route('brands.view',['slug' => $br -> slug]) }}">{{ $br->judul }}</option>
                @endforeach
                <optgroup label="Kategori Produk"></optgroup>
                @foreach($kategori as $be)
                <option value="{{ route('kategori.view',['slug' => $be -> slug]) }}">{{ $be->judul }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <!-- <div class="mx-3 align-self-center"><i class="bi bi-chevron-down"></i></div> -->
</div>
<div class="">
    <section class="">
        <div class="space-m">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 title-5 text-uppercase">
                        <div class="d-none d-lg-block d-md-none">
                            <div class="accordion" id="accordionPro">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button title-6 text-uppercase font-12" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Kategori cat
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionPro">
                                        <div class="accordion-body">
                                            <div class="list-group list-group-flush list-kat">
                                                @foreach($kategori as $k) <a href="{{ route('kategori.view',['slug' => $k -> slug]) }}" class="list-group-item list-group-item-action">{{ $k->judul }}</a> @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button title-6 text-uppercase font-12 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Kategori merek
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionPro">
                                        <div class="accordion-body">
                                            <div class="list-group list-group-flush list-kat">
                                                @foreach($brands as $h) <a href="{{ route('brands.view',['slug' => $h -> slug]) }}" class="list-group-item list-group-item-action">{{ $h->judul }}</a> @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="d-none d-sm-block">
                            <p class="title-6 text-uppercase"><i class="bi bi-filter-circle-fill text-primary me-2"></i>Products list</p>
                        </div>
                        <hr class="d-none d-sm-block" />
                        <div class="">
                            @if(count($data->products))
                            <div class="row">
                                @foreach($data->products as $product)
                                <div class="col-md-4 mb-3">
                                    <a class="text-dark card h-100 rising" href="{{ route('products.view',['slug' => $product -> slug]) }}">
                                        <div class="h-100">
                                            <div class="rounded-top">
                                                <img src="{{ $product->img }}" class="card-img-top rounded-top" alt="PT SAN CENTRAL INDAH | SCI PAINT" />
                                            </div>
                                            <div class="card-body">
                                                <div class="badge bg-light text-secondary mb-3 w-100">{{ $product->kategori->judul }}</div>
                                                <h5 class="card-title title-5 text-uppercase">{{ $product->judul }}</h5>
                                                <p class="card-text ">{{ substr($product->content, 0,50) }}..</p>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-primary text-center p-0">
                                            <div class="">
                                                <div>
                                                    <div class="btn text-white">Lihat Produk</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            @else
                            <div class="text-center">
                                <img src="{{ asset('img/no.svg') }}" alt="PT SAN CENTRAL INDAH | SCI PAINT" />
                                <p>
                                    <small class="t-smoke">
                                        Maaf untuk saat ini produk brands <b class="text-capitalize">{{ $data->judul }}</b> belum tersedia<br />
                                        Silahkan pilih produk brands lainnya, Terima kasih.
                                    </small>
                                </p>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection @section('styles')
<style type="text/css" media="screen">
    .backTop {
        position: fixed;
        bottom: 0;
        z-index: 1;
        right: 0;
        display: inline-block;
        padding: 0.5em;
        margin: 0.5em;
    }
    .backTop:hover {
        cursor: pointer;
    }
</style>
@endsection @section('js') @endsection @section('meta')
<meta property="og:title" content="Kategori Produk {{ $data->judul }}" />
<meta property="og:url" content="{{ url('brands')}}/{{ $data->slug }}" />
<meta property="og:image" content="{{ $data->img }}" />
<meta property="og:description" content="Dapatkan produk sci paint sesuai kebutuhan cat untuk rumah anda, berikut cat dari brands {{ $data->judul }}." />
<title>Kategori Produk {{ $data->judul }} | PT SAN CENTRAL INDAH | SCI PAINT</title>
@endsection
