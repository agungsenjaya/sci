<!-- Modal Logout -->
<div class="modal fade" id="modalOut" tabindex="-1" aria-labelledby="modalOutLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalOutLabel">Notifications</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <p class="mb-0">Apakah anda yakin akan keluar?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
        <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Loading -->
<div class="modal" id="modalLoading" tabindex="-1" aria-labelledby="modalLoadingLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-transparent">
      <div class="modal-body text-center">
        <img src="{{ asset('img/Spinner.gif') }}" alt="" width="15%">
      </div>
    </div>
  </div>
</div>
<!-- Modal Menu -->
<div class="modal" id="modalMenu" tabindex="-1" aria-labelledby="modalMenuLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-fullscreen modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalMenuLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <div class="">
      <div class="">
        <div class="menu">
            <div class="list-group list-group-flush nav-mobile"> 
              <a href="/" class="list-group-item ">Home</a>  
              <a href="javascript:void(0)" class="list-group-item justify-content-between d-flex produk">Produk <i class="ms-auto bi bi-chevron-right"></i> </a>  
              <a href="http://warna.sci-paint.com/" class="list-group-item ">Warna</a>
              <a href="{{ route('brosur') }}" class="list-group-item ">Brosur</a>
              <a href="http://warna.sci-paint.com/" class="list-group-item ">Kartu Warna</a>
              <a href="{{ route('datateknis') }}" class="list-group-item ">Data Teknis</a>
              <a href="https://cbm.co.id/" target="_blank" class="list-group-item ">Proyek</a>
              <a href="{{ route('service') }}" class="list-group-item ">Service</a>
              <a href="{{ route('about') }}" class="list-group-item ">Tentang Kami</a>
              <a href="{{ route('blog') }}" class="list-group-item ">Berita</a>
              <a href="http://karir.sci-paint.com/" target="_blank" class="list-group-item ">Karir</a>
              <a href="{{ route('calculator') }}" class="list-group-item ">Kalkulator Cat</a>
              <a href="{{ route('market') }}" class="list-group-item ">Lokasi Toko</a>
              <a href="{{ route('contact') }}" class="list-group-item ">Hubungi Kami</a>
          </div>
        </div>
        <div class="sub-menu d-none">
        <div class="list-group list-group-flush nav-mobile"> 
          <a href="javascript:void(0)" class="list-group-item justify-content-between d-flex produk-back">Kembali <i class="ms-auto bi bi-chevron-right"></i> </a>  
          <a class="list-group-item"><span class="title-6"> Kategori Merek</span></a>
          @foreach($brands as $bro)
          <a class="list-group-item" href="{{ route('brands.view',['slug' => $bro -> slug]) }}"><i class="bi bi-dash me-2"></i>{{ $bro->judul }}</a>
          @endforeach
          <a class="list-group-item"><span class="title-6">Kategori Cat</span></a>
          @foreach($kategori as $bro)
          <a class="list-group-item" href="{{ route('kategori.view',['slug' => $bro -> slug]) }}"><i class="bi bi-dash me-2"></i>{{ $bro->judul }}</a>
          @endforeach
            
        </div>
        </div>
      </div>
    </div>

    </div>
        
      </div>
    </div>
  </div>