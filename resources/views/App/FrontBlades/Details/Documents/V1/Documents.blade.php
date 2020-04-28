@extends('App.FrontBlades.Masterpage.'.$TS['master_page'].'.MasterPage')

@section('content')

<!--Start Title-->
<div id="inner-banner" style="background:#000 url('{{ asset('public/'.$Settings['page_bg']['image']) }}') no-repeat center center/cover;">
    <div class="container">
        <h1 class="bpg_caps fs36">{{ $Documents['title_'.$lang] }}</h1>
    </div>
</div>
<!--End Title-->

<section class="blog-style-1 news-grid news-detail">
    <div class="container">
        <div class="row">

            <div id="post-249" class="col-md-9 col-sm-8">

                <div class="style-1">
                    <div class="frame">
                        <a>
                            <div class="post_featured_image thumbnail_image">
                                <img src="{{ asset('public/'.$Documents->image) }}" alt="{{ $Documents['title_'.$lang] }}" class="respoimg margin-bottom3 web_news_full_cover">
                            </div>
                        </a>
                    </div>
                    <div class="text-box">
                        <h3 class="bpg_caps fbold">{{ $Documents['title_'.$lang] }}</h3>
                        <div class="clearfix">
                            <div class="btn-row">
                                <a href="#" class="link"><i class="fa fa-clock-o" aria-hidden="true"></i>{{ trans('translate.date') }} : {{ $Documents->created_at->toFormattedDateString() }}</a>
                            </div>
                        </div>

                        <div class="the-content">
                            <p class="bfont text-left bpg_caps">{!! $Documents['full_text_'.$lang] !!}</p>
                        </div>

                        @if($Documents['document_'.$lang] != "" && !is_null($Documents['document_'.$lang]))
                        <strong><a href="/{{$Documents['document_'.$lang]}}" download>@lang('web.download_file')</a></strong>
                        @endif

                        @if($Documents['youtube_link_'.$lang] != "")
                        <div class="widget sidebar-box sidebar-recent-post ">
                            <h3></h3>
                            <div class="recent-widget">
                                <iframe width="100%" height="400px" src="https://www.youtube.com/embed/{{$Documents['youtube_link_'.$lang]}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                        @endif

                        {{--გაზიარების სკრიპტის შემოტანა--}}
                        @include('App.FrontBlades._Sections._Social.Social')
                        {{--გაზიარების სკრიპტის შემოტანა--}}
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-4 content_sidebar sidebar side-bar">
                <div class="widget sidebar-box sidebar-recent-post ">
                    <h4>@lang('web.recent_files')</h4>
                    <div class="recent-widget">
                        <ul>
                            {{--მსგავსი სიახლეების შემოტანა--}}
                            @foreach($LikeNews as $item)
                            <li>
                                <div class="text-col">
                                    <a href="{{ asset('documents/'.$item->id) }}" class="bpg_caps fs18">
                                        {!! $item['title_'.$lang] !!}
                                    </a>
                                    <span class="date mr-b-10">
                                        <i class="fa fa-calendar" aria-hidden="true"></i> {{ $item->created_at->toFormattedDateString() }}
                                    </span>
                                </div>
                                <div style="clear: both;"></div>
                                <div class="thumb">
                                    <a href="{{ asset('documents/'.$item->id) }}">
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