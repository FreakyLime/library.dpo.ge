@extends('App.FrontBlades.Masterpage.'.$TS['master_page'].'.MasterPage')

@section('content')

<!--Start Title-->
<div id="inner-banner" style="background:#000 url('{{ asset('public/'.$Settings['page_bg']['image']) }}') no-repeat center center/cover;">
    <div class="container">
        <h3 class="bpg_caps fs36">{{ $News['title_'.$lang] }}</h3>
    </div>
</div>
<!--End Title-->

<section class="blog-style-1 news-grid news-detail">
    <div class="container">
        <div class="row">

            <div id="post-249" class="col-md-9 col-sm-8">

                <div class="style-1">
                    @if(strlen($News->image) > 3)
                    <div class="frame">
                        <a>
                            <div class="post_featured_image thumbnail_image">
                                <img src="{{ asset('public/'.$News->image) }}" alt="{{ $News['title_'.$lang] }}" class="respoimg margin-bottom3 web_news_full_cover">
                            </div>
                        </a>
                    </div>
                    @elseif(strlen($News['youtube_link_'.$lang]) > 3)
                    <div class="news-video-container">
                        <iframe class="news-video" src="https://www.youtube.com/embed/{{$News['youtube_link_'.$lang]}}" allowfullscreen></iframe>
                    </div>
                    @endif
                    <div class="text-box">
                        <br><br>
                        <h3 class="bpg_caps fbold">{{ $News['title_'.$lang] }}</h3>
                        <div class="clearfix">
                            <div class="btn-row">
                                <a href="#" class="link"><i class="fa fa-clock-o" aria-hidden="true"></i>{{ trans('translate.date') }} : {{ $News->created_at->toFormattedDateString() }}</a>
                            </div>
                        </div>
                        <div class="the-content">
                            <p class="bfont text-left bpg_caps">{!! $News['full_text_'.$lang] !!}</p>
                        </div>
                        @if(!is_null($News['youtube_link_'.$lang]) && $News['youtube_link_'.$lang] != '' && strlen($News->image) > 3)
                        <br><br>
                        <div class="news-video-container">
                            <iframe class="news-video" src="https://www.youtube.com/embed/{{$News['youtube_link_'.$lang]}}" allowfullscreen></iframe>
                        </div>
                        @endif
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
                <div class="widget sidebar-box sidebar-recent-post ">
                    @if(!is_null($News['document_' . $lang]) && $News['document_' . $lang] != '' && $News['document_' . $lang] != '[]')
                    <?php $docs = json_decode($News['document_' . $lang], true); ?>
                    <h5>{{ trans('web.download_file') }}</h5><br>
                    <div class="row">
                        <div class="col">
                            @foreach($docs as $file)
                            <a href="{{$file}}">
                                <img style="width:30%;margin-bottom:10px !important;padding-bottom:10px;" src="/public/files/file_types/{{pathinfo($file,PATHINFO_EXTENSION)}}.png">
                            </a>
                            @endforeach
                        </div>
                    </div><br><br>
                    @endif
                    <h5>{{ trans('web.similar_news') }}</h5><br>
                    <div class="recent-widget">
                        <ul>
                            {{--მსგავსი სიახლეების შემოტანა--}}
                            @foreach($LikeNews as $item)
                            <li>
                                <div class="text-col">
                                    <a href="{{ asset('news/'.$item->id) }}" class="bpg_caps fs18">
                                        {!! $item['title_'.$lang] !!}
                                    </a>
                                    <span class="date mr-b-10">
                                        <i class="fa fa-calendar" aria-hidden="true"></i> {{ $item->created_at->toFormattedDateString() }}
                                    </span>
                                </div>
                                <div style="clear: both;"></div>
                                <div class="thumb">
                                    <?php
                                    if (strlen($item->image) > 3) {
                                        $img = asset('public/' . $item->image);
                                    } elseif (strlen($item['youtube_link_' . $lang])) {
                                        $img = 'https://img.youtube.com/vi/' . $item['youtube_link_' . $lang] . '/0.jpg';
                                    } else {
                                        $img = asset('public/files/helpers/no-image.jpg');
                                    }
                                    ?>
                                    <a href="{{ asset('news/'.$item->id) }}">
                                        <img src="{{ $img }}" alt="{{ $item['title_'.$lang] }}" class="web_news_tumb_cover">
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
<style>
    .news-video-container {
        position: relative;
        width: 100%;
        padding-bottom: 56.25%;
    }

    .news-video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>
@stop