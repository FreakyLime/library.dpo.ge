@extends('App.FrontBlades.Masterpage.'.$TS['master_page'].'.MasterPage')

@section('content')

<!--Start Title-->
<div id="inner-banner" style="background:#000 url('{{ asset('public/'.$Settings['page_bg']['image']) }}') no-repeat center center/cover;">
    <div class="container">
        <h1 class="bpg_caps">{{ trans('web.services_all_sat') }}</h1>
    </div>
</div>
<!--End Title-->

@if(!$AllServices->isEmpty())

    <div id="block_content_first" class="col-md-12">
        <div class="container-res">
            <div class="row">
                <div class="">
                    <div id="post-270" class="post-270 page type-page status-publish hentry">
                        <div class="entry-content-cp">
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">

                                            <section class="blog-style-1 news-grid news-list">
                                                <div class="container">
                                                    <div class="row">

                                                        {{--სიახლეების მოდული--}}
                                                        @foreach($AllServices as $item)
                                                            <div class="col-md-6 col-sm-6" >
                                                                <div class="style-1">
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <div class="frame" style="margin: 0 !important;">
                                                                                <a href="{{ asset('services/view/'.$item->id) }}">
                                                                                    <img src="{{ asset('public/'.$item->image) }}" alt="{{ $item['title_'.$lang] }}" class="attachment-265x250 size-265x250 wp-post-image icons_large_tumb">
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-9">
                                                                            <div class="text-box">

                                                                                <h3><a href="{{ asset('services/view/'.$item->id) }}" class="bpg_caps f18 lheight0">{{ $item['title_'.$lang] }}</a></h3>


                                                                                <p class="bpg_arial trim3">{{ $item['short_text_'.$lang] }}</p>
                                                                                <a href="{{ asset('services/view/'.$item->id) }}" class="btn-more pd-t-0">{{ trans('web.reed_more') }}</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        {{--სიახლეების მოდული--}}


                                                        {{--პაგინაცია--}}
                                                        {{--<div class="pagination-box">
                                                            <nav>
                                                                <ul class="pagination">
                                                                    <li><span class='page-numbers current'>1</span>
                                                                        <a class='page-numbers' href='index6d2e.html?paged=2&amp;page_id=270'>2</a>
                                                                        <span class="page-numbers dots">&hellip;</span>
                                                                        <a class='page-numbers' href='index8b4d.html?paged=4&amp;page_id=270'>4</a>
                                                                        <a class="next page-numbers" href="index6d2e.html?paged=2&amp;page_id=270">&gt;</a>
                                                                    </li>
                                                                </ul>
                                                            </nav>
                                                        </div>--}}
                                                        {{--პაგინაცია--}}

                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .entry-content -->
                    </div><!-- #post-## -->

                </div>
            </div>
        </div>
    </div>

@endif


@stop