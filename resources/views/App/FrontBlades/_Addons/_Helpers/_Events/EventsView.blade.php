@extends('App.FrontBlades.Masterpage.'.$TS['master_page'].'.MasterPage')

@section('content')

<!--Start Title-->
<div id="inner-banner" style="background:#000 url('{{ asset('public/'.$Settings['page_bg']['image']) }}') no-repeat center center/cover;">
    <div class="container">
        <h1 class="bpg_caps fs32">{{ $Event['title_'.$lang] }}</h1>
    </div>
</div>
<!--End Title-->

<section class="causes-style-1 causes-detail news-grid campaign-details">
    <div class="container">
        <div class="row">
            <!-- HTML Content -->


            <div id="469" class="col-md-9 col-sm-12">
                <div class="post-469 campaign type-campaign status-publish has-post-thumbnail hentry campaign_category-campaign campaign_tag-campaigns campaign_tag-charity campaign_tag-tags campaign-has-goal campaign-has-end-date">
                    <!-- Main Content -->
                    <div class="style-1">
                        <div class="frame">
                            <img src="{{ asset('public/'.$Event->image) }}" alt="{{ $Event['title_'.$lang] }}" class="web_news_full_cover">
                            <div class="event-timer">
                                <div class="defaultCountdown58"></div>
                            </div>
                        </div>
                        <div class="text-box mr-b-50">
                            <h3 class="bpg_caps fbold">{{ $Event['title_'.$lang] }}</h3>
                            <strong class="date fs18">
                                <span>{{ Carbon\Carbon::parse($Event->date)->format('d.m.Y') }}</span>
                            </strong>
                            <div class="the-content">
                                <p class="bfont text-left bpg_caps">{!! $Event['full_text_'.$lang] !!}</p>
                            </div>

                            {{--გაზიარების სკრიპტის შემოტანა--}}
                            @include('App.FrontBlades._Sections._Social.Social')
                            {{--გაზიარების სკრიპტის შემოტანა--}}

                        </div>
                    </div>
                </div>
            </div>

            {{--სხვა ივენთები--}}
            <div class="col-md-3 col-sm-4 content_sidebar sidebar side-bar">

                <div class="widget sidebar-box sidebar-recent-post "><h3 class="bpg_caps">{{ trans('web.other_events') }}</h3>
                    <div class="recent-widget">
                        <ul>

                            <!-- Widget Popular Post Code -->
                            @foreach($LikeEvent as $item)
                            <li>
                                <div class="thumb">
                                    <a href="{{ asset('events/view/'.$item['id']) }}">
                                        <img src="{{ asset('public/'.$item->image) }}" alt="{{ $item['title_'.$lang] }}" class="events_tumbs">
                                    </a>
                                </div>
                                <div class="text-col">
                                    <a href="{{ asset('events/view/'.$item['id']) }}" class="bpg_arial">
                                       {{ $item['title_'.$lang] }}
                                    </a>
                                    <span class="date"><i class="fa fa-calendar" aria-hidden="true"></i>{{ $item->date }}</span>
                                </div>
                            </li>
                            @endforeach
                            <!-- Widget Popular Post Code -->

                        </ul>
                    </div>
                </div>
            </div>
            {{--სხვა ივენთები--}}

        </div>
    </div>
</section>


@stop