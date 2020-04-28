@extends('App.FrontBlades.Masterpage.'.$TS['master_page'].'.MasterPage')

@section('content')

    <div class="pg-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 title">
                    <h1 class="bpg_caps">{{ $Slider['title_'.$lang] }}</h1>
                </div>
            </div>
        </div>
    </div>


    <div class="pg-body">
        <div class="container container-sm-fullwidth">
            <div class="row">
                <div class="gap-60"></div>
                <div class="col-md-8 blog container-collapse clearfix">

                    <div class="short-post col-xs-12">
                        <div class="col-sm-1 col-xs-12 left-info">
                            <div class="row">
                                <div class="icon hidden-xs"><span class="icon-pencil"></span></div>
                                <div class="date">{{ $Slider->created_at->toFormattedDateString() }}</div>
                            </div>
                        </div>
                        <div class="col-sm-11 col-xs-12">
                            <div class="row">
                                <div class="row">
                                    <div class="cover col-xs-12">
                                        <img src="{{ asset('public/'.$Slider->image) }}" alt="{{ $Slider['title_'.$lang] }}" class="web_news_full_cover">
                                    </div>
                                </div>
                                <h4 class="bpg_caps">{{ $Slider['title_'.$lang] }}</h4>
                                <p class="bpg_arial">
                                    {!! $Slider['full_text_'.$lang] !!}
                                </p>
                                <p>
                                    {{--დამატებითი სურათების შემოტანა--}}
                                    @include('App.FrontBlades.Details._MoreImages.'.$TS['more_images_view'].'.MoreImages')
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 clearfix sidebar">
                    <div class="col-xs-12 container-collapse">
                        <div class="col-xs-12">
                            <div class="most-popular-box box-with-pager mobile-collapse sidebar-popular-posts">
                                <div class="title-type-1 mobile-collapse-header">
                                   {{ trans('web.other_slider') }}
                                </div>
                                <div class="mobile-collapse-body">
                                    <ul class="vertical-bx-1">
                                        <li>
                                            @foreach($LikeSlider as $item)
                                                <a href="{{ asset('slider/'.$item->id) }}">
                                                    <figure>
                                                        <span class="img-cover">
                                                            <img src="{{ asset('public/'.$item->image) }}" alt="{{ $item['title_'.$lang] }}" class="web_news_like_loop_cover">
                                                        </span>
                                                        <figcaption>
                                                            <a href="{{ asset('slider/'.$item->id) }}">
                                                                <p class="bpg_caps trim2">{{ $item['title_'.$lang] }}</p>
                                                            </a>
                                                            <span class="post-info">{{ $item->created_at->toFormattedDateString() }}</span>
                                                        </figcaption>
                                                    </figure>
                                                </a>
                                            @endforeach
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop