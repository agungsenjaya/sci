@extends('index')
@section('content')
<section class="space-l">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 sm-padding">
                        <div class="blog-items single-post">
                            <div class="meta-info text-uppercase title font-13 mb-4">
                                <div class="d-flex justify-content-between">
                                <div>
                                <span>
                                    <i class="ti-user"></i> Kategori <span class="badge badge-danger font-13">{{ $data->akategori->judul }}</span>
                                </span>
                                </div>
                                    <div>
                                        <span>{{ $data->created_at->toFormattedDateString() }}</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Meta Info -->
                            <img src="https://via.placeholder.com/1920x1280" alt="blog post">
                            <h3 class="title h4">{{ $data->judul }}</h3>
                            <p>
                                {!! $data->content !!}
                            </p>
                            <div class="share-wrap">
                                <p class="title font-13 text-uppercase">Bagikan artikel ini</p>
                                 <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                        <a class="a2a_button_facebook"></a>
                                        <a class="a2a_button_twitter"></a>
                                        <a class="a2a_button_google_plus"></a>
                                        <a class="a2a_button_pinterest"></a>
                                        <a class="a2a_button_whatsapp"></a>
                                        <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                    </div>
                            </div>
                            <!-- Share Wrap -->
                        </div>
                    </div><!-- Blog Posts -->
                    <div class="col-lg-3 sm-padding border-left">
                        <div class="sidebar-wrap">
                            <div class="sidebar-widget mb-4">
                                <!-- <p class="title text-uppercase mb-4 font-13">more inspiration</p> -->
                                <dl class="uk-description-list uk-description-list-divider">
                                	@foreach($artikel->take(3) as $art)
								    <dt class="title text-capitalize h4">{{ $art->judul }}</dt>
                                    <img class="py-3" src="{{ $data->img }}" alt="">
								    <dd class="font-13">{!!substr($art->content,0,100)!!}...</dd>
								    <small><a href="{{ route('artikel.view', ['slug' => $art -> slug]) }}" class="text-capitalize font-weight-bold" title="">read more<i class="mdi mdi-chevron-right"></i></a></small>
                                    @endforeach
								</dl>
                            </div><!-- Recent Posts -->
                            
                        </div><!-- /Sidebar Wrapper -->
                    </div>
                </div>
            </div>
        </section>
@endsection
@section('meta')
    <meta property="og:title" content="{{ $data->judul }}" />
    <meta property="og:url" content="{{ url('blog/read')}}/{{ $data->slug }}">
    <meta property="og:image" content="{{ $data->img }}">
    <meta property="og:description" content="{!! substr($data->content,0,200) !!}..">
    <title>{{ $data->judul }} | SCI PAINT</title>
@endsection
@section('scripts')
<script async src="https://static.addtoany.com/menu/page.js"></script>
@endsection