@extends('index')
@section('content')
<section class="pt-5 text-center">
<div class="container">
<img src="{{ asset('img/icon-san.png') }}" alt="" width="100">
<h1 class="text-uppercase display-4 title-2 mb-0">PT.San Central Indah</h1>
<p class="lead mt-0">Paint & Coating Industry</p>
<img src="{{ asset('img/bg-world.jpg') }}" alt="" width="100%">
</div>
</section>      
<img src="{{ asset('img/shadow-inner.png') }}" alt="" width="100%">
<section class="space-m">
<div class="container">
<div class="row">
<div class="col-md-5">
<img src="//via.placeholder.com/600x700" width="100%" alt="">
</div>
<div class="col-md-7">
<p><span class="tx-bold">PT. San Central Indah </span> (SCI-Paint) adalah perusahaan manufaktur cat. Didirikan oleh Edy Darmawan di Bandung, Jawa Barat, pada tahun 1983. Perusahaan ini terutama bergerak dalam pembuatan, pendistribusian, dan penjualan cat, coatings dan produk terkait kepada para profesional, komersial, pelanggan ritel, dan industri.
                    <br>
                    <br>
                    San Central Indah (SCI Paint) mempunyai 14 pusat distribusi di seluruh Indonesia. Seluruh produk San Central Indah (SCI Paint) dipasarkan melalui distributor tunggalnya, <a href="http://www.nusasarana.id/" target="_blank" title="">PT. Nusa Sarana Indonesia (NSI).</a> Dengan demikian, distribusi produk dapat terkoordinasi dengan baik.
                    <br>
                    <br>
                    Untuk meningkatkan peran sertanya dalam memberikan pelayanan jasa pengecatan kepada konsumen, San Central Indah (SCI Paint) juga mendirikan <a href="http://cbm.co.id" target="_blank" title="">CV. Central Bangun Mandiri (CBM).</a>
                    <br>
                    <br>
                    Dengan pesatnya perkembangan teknologi cat (paint and protective coatings), San Central Indah (SCI Paint) saat ini juga mengembangkan cat industri berbasis teknologi powder seperti Sterling Powder Coatings. </p>
                    <a class="btn btn-danger btn-nasa" href="{{ asset('img/PT SAN_CENTRAL_INDAH.pdf') }}" title=""><i class="fa fa-file-pdf mr-2"></i>Download Company Profile</a>

</div>
</div>
</div>
</section>
<div class="flip-1">
<img src="{{ asset('img/shadow-inner.png') }}" alt="" width="100%">
</div>
<section class="space-m">
<div class="container">
<div class="row">
<div class="col-5">
<h1 class="text-capitalize title-2 mb-0">Visi & Misi</h1>
<p class="lead mt-0">PT.San Central Indah</p>
<p>
Dengan komitmen “Inovasi, kualitas, dan pelayanan adalah kunci”, perusahaan mempertahankan dengan menyediakan produk berkualitas tinggi dan pelayanan yang memuaskan. Dengan pengalaman lebih dari 36 tahun, perusahaan terus meningkatkan dan mengetahui kebutuhan pelanggan.
                      <br>
                      <br>
                        Inovasi adalah arah kemajuan kami, kualitas adalah fokus perhatian kami, pelayanan adalah jalan dari pengembangan kami. Kami yakin bahwa dengan inovasi, kualitas, dan pelayanan, kami akan menciptakan masa depan yang sangat baik bersama dengan setiap pelanggan. 
</p>

</div>
<div class="col-md">
<img src="{{ asset('img/owner.jpg') }}" width="100%" alt="">
</div>
</div>
</div>
</section>
<img src="{{ asset('img/shadow-inner.png') }}" alt="" width="100%">
<section class="pb-4 text-center">
<div class="container">
<div class="space-m">
<h1 class="text-capitalize title-2  mb-0">Our Brands</h1>
<img src="{{ asset('img/merk.jpg') }}" width="100%" alt="">
<p class="lead">Kami mempunyai banyak pilihan produk untuk segala kebutuhan <br>  pengacatan rumah maupun proyek Anda.</p>
<a href="/brands/spectrum" class="btn btn-danger btn-nasa">Explore Product<i class="fal fa-chevron-right ml-2"></i> </a>
</div>
</div>
</section>
@endsection
@section('meta')
    <meta property="og:title" content="SCI PAINT | SAN CENTRAL INDAH" />
    <meta property="og:url" content="{{ url('about') }}">
    <meta property="og:image" content="{{ asset('img/bg-meta.jpg') }}">
    <meta property="og:description" content="PT. San Central Indah (SCI-Paint) adalah perusahaan manufaktur cat. Didirikan oleh Edy Darmawan di Bandung, Jawa Barat, pada tahun 1983. Perusahaan ini terutama bergerak dalam pembuatan, pendistribusian, dan penjualan cat, coatings dan produk terkait kepada para profesional, komersial, pelanggan ritel, dan industri. ">
    <title>Tentang Kami | SCI PAINT</title>
@endsection