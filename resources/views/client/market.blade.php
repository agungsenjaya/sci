@extends('index')
@section('content')

<div class="min-vh-100 bg-light">
<section class="space-m">
  <div class="container">
    <div class="text-center">
  <h1 class="text-uppercase title-5 display-5 mb-0">Temukan Lokasi<br class="d-sm-none d-block"> Toko</h1>
  <p class="lead">Dapatkan produk sci paint di toko bangunan
  <br class="d-none d-sm-block"><span class="">terdekat rumah Anda.</span>
</p>
  </div>
  </div>
  </section>
  <div class="container">
  <div class="card card-body">
  <div class="row">
  <div class="col-md-4 mb-sm-0 mb-3">
  <div class="input-group">
  <span class="input-group-text bg-primary" id="basic-addon1"><i class="bi bi-funnel-fill text-white"></i></span>
  <select class="form-select" id="listing">
            <option disabled selected>Filter Cabang</option>
            <option value="">Semua Cabang</option>
            </select>
  </div>
  </div>
  <div class="col-md-8">
  <div class="input-group">
  <span class="input-group-text bg-primary" id="myloc">
      <i class="bi bi-geo-alt-fill text-white"></i>
</span>
  <input
      id="pac-input"
      class="form-control controls"
      type="text"
      placeholder="Masukan lokasi pencarian"
    />
  </div>
  </div>
  </div>
  </div>
  </div>
<section class="space-m align-self-center justify-content-center d-flex">
    <div class="container">
        <div class="card swiper-box">
        <div class="row g-0 no-gutters">
            <div class="col-md-4">
            <div class="px-5 py-3">
            <p class="mt-4"><span class="text-danger">* </span>Lokasi toko bisa berubah secara berkala sesuai dengan ketentuan perusahaan</p>
            </div>
            <div class="d-none d-sm-block p-5">
            <!-- <img src="{{ asset('img/store-1.jpg') }}" width="100%" alt="PT SAN CENTRAL INDAH | SCI PAINT" class="both rounded-bottom-left"> -->
            <!-- <img src="https://dummyimage.com/600x550" alt="" width="100%"> -->

            <div class="images">
		<img src="{{ asset('img/h-11.png') }}" alt="" width="100%">
		<img src="{{ asset('img/h-12.png') }}" alt="" width="100%" class="to-center">
		</div>


            </div>
            </div>
            <div class="col-md align-self-center">
            <div class="h-100">
                <div id="map"></div>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
<section class="bg-dark">
		<div class="images">
    <div style="background:url('../img/hero-1.jpg');background-size:cover;height:400px;background-position:center"></div>
			<!-- <div class="grad-hero"></div> -->
			<div class="position-absolute z-in-1" style="top:0;right:0;left:0;bottom:0;">
				<div class="container h-100 align-items-center d-flex justify-content-center text-center center-mobile">
					<div class="text-white">
						<h2 class="text-capitalize display-5 mb-0">Hubungi kami</h2>
						<p class="title-5 lead">Jika anda membutuhkan bantuan dan informasi
							<br><span class="d-none d-sm-block">silahkan hubungi kami.</span>
						</p> <a href="{{ route('contact') }}" class="start btn btn-dark">Hubungi Kami</a>
					</div>
				</div>
			</div>
		</div>
	</section>
  </div>
@endsection
@section('css')
<style>
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
      #description {
        font-family: 'interstate-light';
  font-size: 15px;
  font-weight: 300;
}

#infowindow-content .title {
  font-weight: bold;
}

#infowindow-content {
  display: none;
}

#map #infowindow-content {
  display: inline;
}

.pac-card {
  margin: 10px 10px 0 0;
  border-radius: 2px 0 0 2px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  outline: none;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
  background-color: #fff;
  font-family: 'interstate-light';
}

#pac-container {
  padding-bottom: 12px;
  margin-right: 12px;
}

.pac-controls {
  display: inline-block;
  padding: 20px;
  /* padding: 5px 11px; */
}

.pac-controls label {
  font-family: 'interstate-light';
  font-size: 13px;
  font-weight: 300;
}

#pac-input {
  text-overflow: ellipsis;
}
#title {
  color: #fff;
  background-color: #4d90fe;
  font-size: 25px;
  font-weight: 500;
  padding: 20px;
  /* padding: 6px 12px; */
}

#target {
  width: 345px;
}
</style>
@endsection
@section('js')
<script src="https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js"></script>
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdfB-1tzijt8NQRVY6SLNft9_JwxWxu1s&libraries=geometry&callback=initMap" async defer></script> -->
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdfB-1tzijt8NQRVY6SLNft9_JwxWxu1s&callback=initAutocomplete&libraries=places&v=weekly" defer ></script>
<script>
// $('#modalLokasi').modal('show');
var map, infoWin;
    function initAutocomplete() {
        const map = new google.maps.Map(document.getElementById("map"), {
          center: {lat: -2.0997099, lng: 117.3049496},
          streetViewControl: false,
          mapTypeControl: false,
          gestureHandling: 'cooperative',
          zoom: 4,
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
        // Create the search box and link it to the UI element.
        const input = document.getElementById("pac-input");
        const searchBox = new google.maps.places.SearchBox(input);
        
        // Bias the SearchBox results towards current map's viewport.
        map.addListener("bounds_changed", () => {
          searchBox.setBounds(map.getBounds());
        });
        let markurs = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener("places_changed", () => {
          const places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }
          // Clear out the old markurs.
          markurs.forEach((marker) => {
            marker.setMap(null);
          });
          markurs = [];
          // For each place, get the icon, name and location.
          const bounds = new google.maps.LatLngBounds();
          places.forEach((place) => {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            
            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          infoWin.close();
          map.fitBounds(bounds);
        });
        
        $.getJSON("http://localhost:8000/json/toko.json", function (data) {
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

          infoWin = new google.maps.InfoWindow();

         const locationButton = document.getElementById("myloc");
         const geocoder = new google.maps.Geocoder;
          locationButton.addEventListener("click", () => {
            // Try HTML5 geolocation.
            if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(
                (position) => {
                  const pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude,
                  };
                  // infoWin.setPosition(pos, 10);
                  // infoWin.setContent("Location found.");
                  // infoWin.open(map);

                  // === Geocoder ===
                  function geocodeLatLng() {
                    var latlng = {
                      lat: pos.lat,
                      lng: pos.lng
                    };
                    geocoder.geocode({
                      'location': latlng
                    }, function(results, status) {
                      if (status === 'OK') {
                        if (results[0]) {

                          //This is yout formatted address
                          // return results[0].formatted_address
                          var nol = results[0].formatted_address;
                           $('#pac-input').val(nol);

                        } else {
                          // alert('No results found');
                        }
                      } else {
                        // alert('Geocoder failed due to: ' + status);
                      }
                    });

                    }
                  // === End Geocoder ===
                  infoWin.close();
                  map.setCenter(pos);
                  geocodeLatLng();
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
              //  icon: icon
              });
              google.maps.event.addListener(marker, 'click', function(evt) {
                var boy = `https://maps.googleapis.com/maps/api/geocode/json?latlng=${location.lat},${location.lng}&key=AIzaSyAdfB-1tzijt8NQRVY6SLNft9_JwxWxu1s`;
                $.getJSON(boy,function (data) {
                  var hius = `<p class="title-5 text-capitalize mb-2">${location.toko}</p><div class="mb-2">${data.results[0].formatted_address}</div><a class="mb-2" target="_blank" href="https://www.google.co.id/maps/dir//${location.lat},${location.lng}"><i class="fa fa-map-marker-alt mr-2"></i>Directions</a>`;
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
</script>
@endsection
@section('meta')
    <meta property="og:title" content="Lokasi Toko" />
    <meta property="og:url" content="{{ url('market') }}">
    <meta property="og:description" content="Temukan lokasi toko sci paint terdekat dengan lokasi anda, tersedia diseluruh toko bangunan.">
    <title>Temukan Toko | PT SAN CENTRAL INDAH | SCI PAINT</title>
@endsection