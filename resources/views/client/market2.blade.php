@extends('index')
@section('content')

<div class="min-vh-100 bg-light-2">
<section class="space-m">
  <div class="container">
    <div class="text-center">
  <h1 class="text-uppercase title-4 display-4 mb-0">Temukan <br class="d-sm-none d-block"> Toko</h1>
						<p class="lead text-secondary">Dapatkan produk sci paint di toko bangunan
              <br class="d-none d-sm-block"><span class="">terdekat rumah Anda.</span>
</p>
  </div>
  </div>
  </section>
<section class="space-m align-self-center justify-content-center d-flex">
    <div class="container">
        <div class="card swiper-box">
        <div class="row g-0">
            <div class="col-md-4">
            <div class="p-5">
            <select class="form-control rounded-pill" id="listing">
            <option disabled selected>FILTER CABANG</option>
            <option value="">Semua Cabang</option>
            </select>
            <p class="mt-4"><span class="text-danger">* </span>Lokasi toko bisa berubah secara berkala sesuai dengan ketentuan perusahaan</p>
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
						<p class="title-1 lead">Jika anda membutuhkan bantuan dan informasi
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
<style>
    /* #map {
        height: 70vh;
      } */
      .cluster > div > span{
         /* font-family: 'Axiata Book Medium'; */
          color: #fff;
      }
      .gm-style .gm-style-iw-c{
        max-width: 250px !important;
        font-size: 13px;
        /* border-top: 2px solid #D7052C; */
        border-radius: 2em 0 2em 0;
        padding: 20px;
        /* box-shadow:none; */
      }
      .gm-ui-hover-effect {
        width: 37px !important;
        height: 40px !important;
      }
</style>
@endsection
@section('js')
<script src="https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdfB-1tzijt8NQRVY6SLNft9_JwxWxu1s&libraries=geometry&callback=initMap"
    async defer></script>
<script>
    var map, infoWin;
       function initMap() {
        $.getJSON("http://localhost:8000/json/toko.json", function (data) {
        // $.getJSON("http://192.168.1.16/json/toko.json", function (data) {

          var locations = [];
          var filtered = [];
           $.each(data, function (index, val) { 
            var fool = {
                 id: 1 + index++,
               lat : parseFloat(val.LAT),
               lng : parseFloat(val.LONG),
               cabang : val.CABANG,
               toko : val.CUSTOMER,
              }
              filtered.push(fool)

             if (val.CABANG) {
               var mukidin = {
                 id: 1 + index++,
               lat : parseFloat(val.LAT),
               lng : parseFloat(val.LONG),
               cabang : val.CABANG,
               toko : val.CUSTOMER,
              }
              locations.push(mukidin)
            }
           });
          var pasu = [];
          let group = filtered.reduce((r, a) => {
            r[a.cabang] = a.cabang;
            return r;
            }, {});
          var kidu = Object.values(group);
          $.each(kidu, function (lg, bt) { 
            var mu = {
              cabang : bt
            }
            pasu.push(mu);
          });
          function lokasiku(e){
            if (e == "BDG") {
              return "Bandung";
            }else if(e == "BTM"){
              return "Batam";
            }else if(e == "DPS"){
              return "Bali";
            }else if(e == "JKT"){
              return "Jakarta";
            }else if(e == "JMB"){
              return "Jambi";
            }else if(e == "LPG"){
              return "Lampung";
            }else if(e == "MDN"){
              return "Medan";
            }else if(e == "PLG"){
              return "Palembang";
            }else if(e == "PWT"){
              return "Purwokerto";
            }else if(e == "SBY"){
              return "Surabaya";
            }else if(e == "SMG"){
              return "Semarang";
            }else if(e == "UPG"){
              return "Makassar";
            }else if(e == "YOG"){
              return "Yogyakarta";
            }
          }
          $.each(pasu, function (index, val) { 
            var hoks = lokasiku(val.cabang);
            $( `<option value="${val.cabang}">${hoks}</option>` ).appendTo( "#listing" ); 
          });

          var icon = {
              url: "http://localhost:8000/img/markers.png", // url
              scaledSize: new google.maps.Size(25, 41), // scaled size
              origin: new google.maps.Point(0,0), // origin
              anchor: new google.maps.Point(12, 41) // anchor
          };

         map = new google.maps.Map(document.getElementById('map'), {
           zoom: 4,
           streetViewControl: false,
           mapTypeControl: false,
           gestureHandling: 'cooperative',
           center: {lat: -2.0997099, lng: 117.3049496},
           styles:[
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#f5f5f5"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#ffffff"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#dadada"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "transit.line",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#e5e5e5"
      }
    ]
  },
  {
    "featureType": "transit.station",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#eeeeee"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#c9c9c9"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  }
]
         });
         infoWin = new google.maps.InfoWindow();

         const locationButton = document.createElement("button");
          locationButton.textContent = "Pan to Current Location";
          locationButton.classList.add("custom-map-control-button");
          map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
          locationButton.addEventListener("click", () => {
            // Try HTML5 geolocation.
            if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(
                (position) => {
                  const pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                  };
                  infoWin.setPosition(pos, 10);
                  // infoWin.setContent("Location found.");
                  // infoWin.open(map);
                  map.setCenter(pos);
                },
                () => {
                  handleLocationError(true, infoWin, map.getCenter());
                }
              );
            } else {
              // Browser doesn't support Geolocation
              handleLocationError(false, infoWin, map.getCenter());
            }
          });
         
         var marks = [];
         var markers = locations.map(function(location, i) {
             var marker = new google.maps.Marker({
               position: {lat: location.lat, lng: location.lng},
               cabang: location.cabang,
               icon: icon
              });
              google.maps.event.addListener(marker, 'click', function(evt) {
                var boy = `https://maps.googleapis.com/maps/api/geocode/json?latlng=${location.lat},${location.lng}&key=AIzaSyAdfB-1tzijt8NQRVY6SLNft9_JwxWxu1s`;
                $.getJSON(boy,function (data) {
                  var hius = `<p class="title-2 text-capitalize mb-2">${location.toko}</p><div class="mb-2">${data.results[0].formatted_address}</div><a class="text-danger mb-2" target="_blank" href="https://www.google.co.id/maps/dir//${location.lat},${location.lng}"><i class="fa fa-map-marker-alt mr-2"></i>Directions</a>`;
                    map.panTo(marker.getPosition());
                    infoWin.setContent(hius);
                    infoWin.open(map, marker);
                  });
                })
                if (location.cabang) {
                  marks.push(marker)
                }
              // return marker;
        });
        var mu;
        var markerCluster = new MarkerClusterer(map, marks,{imagePath: 'img/cluster_images/m', ignoreHidden: true});
        $('#listing').on('change', function() {
          mu = this.value;
        for (var it in marks) {
          if (marks[it].cabang == mu) {
            marks[it].setVisible(true);
          }else if(mu <= 0){
            marks[it].setVisible(true);
          }else{
            marks[it].setVisible(false);
          }
        }
        markerCluster.repaint();
        });
        });
       }
      //  google.maps.event.addDomListener(window, "load", initMap);
</script>
@endsection
@section('meta')
    <meta property="og:title" content="Lokasi Toko" />
    <meta property="og:url" content="{{ url('market') }}">
    <meta property="og:description" content="Temukan lokasi toko sci paint terdekat dengan lokasi anda, tersedia diseluruh toko bangunan.">
    <title>Temukan Toko | PT SAN CENTRAL INDAH | SCI PAINT</title>
@endsection