@if(!$Documents->isEmpty())

<div id="block_content_first" class="col-md-12">
    <div class="container-res">
        <div class="row">
            <div class="">
                <div id="post-270" class="post-270 page type-page status-publish hentry">
                    <a href="index0c4f.html?page_id=270">
                    </a>
                    <div class="entry-content-cp">
                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <section class="blog-style-1 news-grid news-list">
                                            <div class="container">
                                                <div class="row" style="margin-bottom:40px">
                                                    <div class="col-md-12">
                                                        <form class="form-inline" method="post" action="/document/search">
                                                            <div class="form-group">
                                                                <label class="sr-only" for="fileName"></label>
                                                                <div class="input-group" style="width:300px">
                                                                    <input type="text" name="search" class="form-control" id="fileName" placeholder="@lang('web.file_search')">
                                                                    <input id="signup-token" name="_token" type="hidden" value="{{csrf_token()}}">
                                                                    <div class="input-group-addon">
                                                                        <button type="submit" value="ok" style="background-color:#eee;padding:1px;border:none;" class="input-group-addon btn btn-default"><i class="fa fa-search" aria-hidden="true"></button></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    {{--სიახლეების მოდული--}}
                                                    @foreach($Documents as $item)
                                                    <div class="col-md-6 col-sm-6" style="min-height: 250px !important;">
                                                        <div class="style-1">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="frame">
                                                                        <a href="{{ asset('documents/'.$item->id) }}">
                                                                            <img src="{{ asset('public/'.$item->image) }}" alt="{{ $item['title_'.$lang] }}" class="attachment-265x250 size-265x250 wp-post-image web_news_loop_cover">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="text-box">

                                                                        <h3><a href="{{ asset('documents/'.$item->id) }}" class="bpg_caps f18 lheight0">{{ $item['title_'.$lang] }}</a></h3>

                                                                        <div class="clearfix">
                                                                            <div class="btn-row">
                                                                                <a href="#" class="link">
                                                                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                                                    {{ trans('translate.date') }} : {{ $item->created_at->toFormattedDateString() }}
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <p class="bpg_arial trim3">{{ $item['short_text_'.$lang] }}</p>
                                                                        <a href="{{ asset('documents/'.$item->id) }}" class="btn-more pd-t-0">{{ trans('web.reed_more') }}</a>
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