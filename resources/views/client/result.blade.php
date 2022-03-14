@extends('index')
@section('content')
<div class="text-center">
		<div class="space-m" style="background:url('../img/hero-1.jpg');background-size:cover;background-position:center">
		<div class="p-3 text-white">
		<h1 class="title-5 display-5 text-uppercase mb-0">Hasil Pencarian</h1>
    <p class="lead">Berikut hasil pencarian {{ $query }}</p>
		</div>
		</div>
		</div>
<div class="">
<div class="d-none">
  <input id="searchBox" class="" name="result" value="{{ $query }}">
</div>
<section class="space-m">
<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
    <div class="justify-content-center d-flex mb-4">
    <form action="{{ url('query') }}" method="GET" class="text-center w-100">
    <div class="justify-content-center d-flex">
								<div class="input-group border rounded">
									<span class="input-group-text bg-white border-0" id="basic-addon1"><img src="{{ asset('img/icon.svg') }}#search-icon" alt="" width="20"></span>
									<input type="text" class="search form-control border-0" placeholder="Enter your search products, colors, etc." aria-label="Username" aria-describedby="basic-addon1" name="result" value="{{ $query }}">
								</div>
							</div>
            </form>
		</div>

    <h5 class="title-5 text-uppercase">Produk</h5>
    <!-- <hr> -->
    <div class="list-group list-group-flush over-text" id="movies"></div>
    <br>
    <h5 class="title-5 text-uppercase">Artikel</h5>
    <!-- <hr> -->
    <div class="list-group list-group-flush over-text" id="products"></div>
    <br>
    <h5 class="title-5 text-uppercase">Brands</h5>
    <!-- <hr> -->
    <div class="list-group list-group-flush over-text" id="brands"></div>
    <br>
    </div>
  </div>
</div>
</section>
</div>
@endsection
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2/dist/instantsearch.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.js@2/dist/instantsearch-theme-algolia.min.css">
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/algoliasearch@4/dist/algoliasearch-lite.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/algoliasearch@4/dist/algoliasearch.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/instantsearch.js@2/dist/instantsearch.min.js"></script>
<script>

var movies = instantsearch({
      appId: "HULN1BXUHU",
      apiKey: "7cb5e7ebb689098973e0b84e94b7f3c3",
      indexName: "products",
      searchFunction: function (helper) {
        var query = movies.helper.state.query;
        products.helper.setQuery(query);
        products.helper.search();
        brands.helper.setQuery(query);
        brands.helper.search();
        helper.search();
      }
    });

    var products = instantsearch({
      appId: "HULN1BXUHU",
      apiKey: "7cb5e7ebb689098973e0b84e94b7f3c3",
      indexName: "artikels"
    });
    
    var brands = instantsearch({
      appId: "HULN1BXUHU",
      apiKey: "7cb5e7ebb689098973e0b84e94b7f3c3",
      indexName: "brands"
    });

    var productsHits = instantsearch.widgets.hits({
      container: document.querySelector("#products"),
      hitsPerPage: 4,
      templates: {
        empty: `<a class="list-group-item list-group-item-action">Not Found</a>`,
        item: `<a class="list-group-item list-group-item-action border-start-0 border-end-0 border-top-0 text-capitalize d-flex justify-content-between" href="/blog/read/@{{{slug}}}">@{{{judul}}}<i class="bi bi-chevron-right ms-auto"></i></a>`
        },
    });

    var moviesHits = instantsearch.widgets.hits({
      container: document.querySelector("#movies"),
      hitsPerPage: 4,
      templates: {
        empty: `<a class="list-group-item list-group-item-action">Not Found</a>`,
          item: `<a class="list-group-item list-group-item-action border-start-0 border-end-0 border-top-0 text-capitalize d-flex justify-content-between" href="/product/view/@{{{slug}}}">@{{{judul}}}<i class="bi bi-chevron-right ms-auto"></i></a>`
        },
    });
    
    var brandHits = instantsearch.widgets.hits({
      container: document.querySelector("#brands"),
      hitsPerPage: 4,
      templates: {
        empty: `<a class="list-group-item list-group-item-action">Not Found</a>`,
          item: `<a href="/brands/@{{{slug}}}" class="list-group-item list-group-item-action border-start-0 border-end-0 border-top-0 text-capitalize d-flex justify-content-between">@{{{judul}}}<i class="bi bi-chevron-right ms-auto"></i></a>`
        },
    });

    var searchBox = instantsearch.widgets.searchBox({
      container: document.querySelector("#searchBox"),
      placeholder: 'Saya mau cari sesuatu..',
      showLoadingIndicator: false,
      showReset: false
    });

    movies.addWidget(moviesHits);
    movies.addWidget(searchBox);
    products.addWidget(productsHits);
    brands.addWidget(brandHits);
    brands.start();
    products.start();
    movies.start();
</script>
@endsection
@section('meta')
    <meta property="og:title" content="Pencarian | SCI PAINT" />
    <meta property="og:url" content="{{ url('') }}">
    <title>Pencarian | PT SAN CENTRAL INDAH | SCI PAINT</title>
@endsection