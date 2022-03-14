@extends('index')
@section('content')

<div class="min-vh-100 bg-light-2">
<section class="space-m">
  <div class="container">
    <div class="text-center">
  <h1 class="text-uppercase title-4 display-4 mb-0">Lokasi Pemasaran</h1>
						<p class="lead text-secondary m-0">Dapatkan produk sci paint di toko bangunan
              <br class="d-none d-sm-block"><span class="">terdekat rumah Anda.</span>
</p>
  </div>
  </div>
  </section>
<section class="space-m align-self-center justify-content-center d-flex">
    <div class="container">
        <div class="card swiper-box">
        <div class="row no-gutters">
            <div class="col-md-4">
            <div class="p-5">
            <select name="" id="" class="form-control rounded-pill">
            <option value="">FILTER CABANG</option>
            </select>
            <p class="mt-4 text-secondary"><span class="text-danger">* </span>Lokasi toko bisa berubah secara berkala sesuai dengan ketentuan perusahaan</p>
            </div>
            <div class="d-none d-sm-block">
            <!-- <img src="{{ asset('img/store-1.jpg') }}" width="100%" alt="PT SAN CENTRAL INDAH | SCI PAINT" class="both rounded-bottom-left"> -->
            <img src="https://dummyimage.com/600x400" alt="" width="100%">
            </div>
            </div>
            <div class="col-md">
            <div class="h-100">
                <div id="map" class="h-100 h-map-mobile"></div>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
<section class="bg-dark">
		<div class="images">
			<img src="https://dummyimage.com/1349x500" alt="" width="100%" class="d-none d-sm-block opacity-0">
			<img src="https://dummyimage.com/600x700" alt="" width="100%" class="d-sm-none d-block opacity-0">
			<!-- <div class="grad-hero"></div> -->
			<div class="position-absolute z-in-1" style="top:0;right:0;left:0;bottom:0;">
				<div class="container h-100 align-items-center d-flex justify-content-center text-center center-mobile">
					<div class="text-white">
						<h2 class="text-uppercase display-4 title-4 mb-0">Hubungi kami</h2>
						<p class="title-1 lead">Untuk informasi lebih lanjut seputar lokasi toko
							<br><span class="d-none d-sm-block">silahkan hubungi kami.</span>
						</p> <a href="{{ route('contact') }}" class="start btn btn-danger-2 rounded-pill">Hubungi Kami</a>
					</div>
				</div>
			</div>
		</div>
	</section>
  </div>
@endsection
@section('css')
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.Default.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet-locatecontrol/0.72.0/L.Control.Locate.min.css">
  <link rel="stylesheet" href="//unpkg.com/leaflet-gesture-handling/dist/leaflet-gesture-handling.min.css"
        type="text/css">
  <style>
  .leaflet-popup-tip {
    /* background:#D7052C */
  }
  .leaflet-marker-icon {
    /* width:auto !important;
    height:50px !important; */
  }
  .leaflet-popup-content-wrapper {
    /* border-radius:0; */
    /* border: 1px solid #D7052C; */
    border-radius: 2em 0 2em 0
  }
  .leaflet-popup-content {
    width:180px;
  }
  .leaflet-container a.leaflet-popup-close-button {
    font-weight:normal;
    font:20px/10px 'ProximaNova-Regular';
    top:4px;
    right:4px;
  }
  .marker-cluster-small {
background-color: #d7052c80;
color: #ffffff;
font-family: 'ProximaNova-Bold';
}
.marker-cluster-small div {
background-color: #d7052c80;
color: #ffffff;
font-family: 'ProximaNova-Bold';
}
.marker-cluster-medium {
background-color: #d7052c80;
color: #ffffff;
font-family: 'ProximaNova-Bold';
}
.marker-cluster-medium div {
background-color: #d7052c80;
color: #ffffff;
font-family: 'ProximaNova-Bold';
}

.marker-cluster-large {
background-color: #d7052c80;
color: #ffffff;
font-family: 'ProximaNova-Bold';
}
.marker-cluster-large div {
background-color: #d7052c80;
color: #ffffff;
font-family: 'ProximaNova-Bold';
}

  </style>
@endsection
@section('js')
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" ></script>
  <script src="https://unpkg.com/leaflet.markercluster@1.3.0/dist/leaflet.markercluster.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet-locatecontrol/0.72.0/L.Control.Locate.min.js"></script>
  <script src="//unpkg.com/leaflet-gesture-handling"></script>
   <script>


var bicon = L.icon({
    iconUrl: 'http://localhost:8000/img/markers.png',
    shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  shadowSize: [41, 41]

    // iconSize:     [27, 40], 
    // shadowSize:   [50, 64], 
    // iconAnchor:   [22, 94], 
    // shadowAnchor: [4, 62],  
    // popupAnchor:  [-3, -76] 
});

var mymap = L.map('map',{gestureHandling: true}).setView([-2.0997099, 117.3049496], 4);
   L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoic2NpcGFpbnQiLCJhIjoiY2tpam01MXptMDE3dzJ0bzh1ZmsweDJpNSJ9.DwWgHdN4SKWG-lCZpWJd0w', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    // maxZoom: 18,
    id: 'mapbox/streets-v11',
    tileSize: 512,
    zoomOffset: -1,
    accessToken: 'your.mapbox.access.token',
}).addTo(mymap);

L.control.locate({
  position: 'topright',
  flyTo: true,
  showPopup: false,
  icon: 'fa fa-location'
}).addTo(mymap);

   $.getJSON("http://localhost:8000/json/toko.json", function (datas) {
    var mapku;
    mapku = datas;
    for (let index1 = 0; index1 < mapku.length; index1++) {
      const emet = mapku[index1];
      // var boy = `https://maps.googleapis.com/maps/api/geocode/json?latlng=${emet.LAT},${emet.LONG}&key=AIzaSyAdfB-1tzijt8NQRVY6SLNft9_JwxWxu1s`;
      // $.getJSON(boy,function (data) {
        //   emet.URL = `https://www.google.co.id/maps/dir//${emet.LAT},${emet.LONG}`
        // });
        emet.URL = `https://www.google.co.id/maps/dir//${emet.LAT},${emet.LONG}`
    }
    // === Leaflet Maps ===
    var markers = L.markerClusterGroup({
      showCoverageOnHover: false,
    });
      for (var i = 0; i < mapku.length; i++) {
        var a = mapku[i];
        var title = `<p class="title-2 text-capitalize mb-2">${a.CUSTOMER}</p><div class="mb-2 alamat">Loading Address..</div><a class="text-danger mb-2" target="_blank" href="${a.URL}"><i class="fa fa-map-marker-alt mr-2"></i>Directions</a>`;
        var marker = L.marker(new L.LatLng(a.LAT, a.LONG),{icon:bicon});
        // var marker = L.marker(new L.LatLng(a.LAT, a.LONG));
        marker.bindPopup(title);
        markers.addLayer(marker);
    }
    mymap.addLayer(markers);

    markers.on('click', function(ev){
        var latlng = mymap.mouseEventToLatLng(ev.originalEvent);
        var boy = `https://maps.googleapis.com/maps/api/geocode/json?latlng=${latlng.lat},${latlng.lng}&key=AIzaSyAdfB-1tzijt8NQRVY6SLNft9_JwxWxu1s`;
        $.getJSON(boy,function (data) {
          $('.alamat').text(data.results[0].formatted_address);
        });
        mymap.flyTo(latlng);
      });
// === End Leaflet Maps ===
});

   </script>
@endsection
@section('meta')
    <meta property="og:title" content="Lokasi Toko" />
    <meta property="og:url" content="{{ url('market') }}">
    <meta property="og:description" content="Temukan lokasi toko sci paint terdekat dengan lokasi anda, tersedia diseluruh toko bangunan.">
    <title>Lokasi Toko | PT SAN CENTRAL INDAH | SCI PAINT</title>
@endsection