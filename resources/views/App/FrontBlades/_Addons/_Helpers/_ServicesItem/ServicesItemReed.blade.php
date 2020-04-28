@extends('App.FrontBlades.Masterpage.'.$TS['master_page'].'.MasterPage')

@section('content')

    <!--Start Title-->
    <div id="inner-banner" style="background:#000 url('{{ asset('public/'.$Settings['page_bg']['image']) }}') no-repeat center center/cover;">
        <div class="container">
            <h1 class="bpg_caps fs36">{{ $Service['title_'.$lang] }}</h1>
        </div>
    </div>
    <!--End Title-->

    <section class="blog-style-1 news-grid news-detail">
        <div class="container">
            <div class="row">

                <div id="post-249" class="col-md-9 col-sm-8">

                    <div class="style-1">
                        <div class="text-box">
                            <h3 class="bpg_caps fbold">{{ $Service['title_'.$lang] }}</h3>
                            <div class="clearfix">
                                <div class="btn-row">

                                </div>
                            </div>
                            <div class = "the-content">
                                <p class="bfont text-left bpg_caps">{!! $Service['full_text_'.$lang] !!}</p>
                            </div>
                            {{--დამატებითი სურათების შემოტანა--}}
                            @include('App.FrontBlades.Details._MoreImages.'.$TS['more_images_view'].'.MoreImages')
                            {{--დამატებითი სურათების შემოტანა--}}
                            {{--გაზიარების სკრიპტის შემოტანა--}}
                            @include('App.FrontBlades._Sections._Social.Social')
                            {{--გაზიარების სკრიპტის შემოტანა--}}
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-4 content_sidebar sidebar side-bar">
                    <div class="widget sidebar-box sidebar-recent-post "><h3>{{ trans('web.other_services') }}</h3>
                        <div class="recent-widget">
                            <ul>
                                {{--მსგავსი სიახლეების შემოტანა--}}
                                @foreach($LikeService as $item)
                                    <li>
                                        <div class="text-col">
                                            <a href="{{ asset('services/reed/'.$item->id) }}" class="bpg_caps fs18">
                                                {!! $item['title_'.$lang] !!}
                                            </a>
                                            <span class="date mr-b-10">

                                            </span>
                                        </div>
                                        <div style="clear: both;"></div>
                                        <div class="thumb">
                                            <a href="{{ asset('services/reed/'.$item->id) }}">
                                                <img src="{{ asset('public/'.$item->image) }}" alt="{{ $item['title_'.$lang] }}" class="web_news_tumb_cover">
                                            </a>
                                        </div>
                                    </li>
                                    <div class="pd-b-10"></div>
                                @endforeach
                                {{--მსგავსი სიახლეების შემოტანა--}}
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

@stop