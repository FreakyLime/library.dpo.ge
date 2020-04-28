<section id="welcome-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                <h1> <span>{{ trans('translate.welcome_sat') }}</span></h1>
                <p>
                    {{ trans('translate.welcome_text') }}
                </p>

                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="service-box">
                            <div class="img-holder">
                                <a href="{{ asset('news/'.$News[0]['id']) }}">
                                    <img src="{{ asset('public/'.$News[0]['tumb']) }}" class="web_news_main_costum_cover" alt="{{ $News[0]['title_'.$lang] }}">
                                </a>
                            </div>
                            <h3 class="bpg_caps trim2">
                                <a href="{{ asset('news/'.$News[0]['id']) }}">
                                    {{  $News[0]['title_'.$lang] }}
                                </a>
                            </h3>
                            <p class="bpg_arial trim4">
                                {{ $News[0]['short_text_'.$lang] }}
                            </p>
                        </div><!-- service-box -->
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="service-box">
                            <div class="img-holder">
                                <a href="{{ asset('news/'.$News[1]['id']) }}">
                                    <img src="{{ asset('public/'.$News[1]['tumb']) }}" class="web_news_main_costum_cover" alt="{{ $News[1]['title_'.$lang] }}">
                                </a>
                            </div>
                            <h3 class="bpg_caps trim2">
                                <a href="{{ asset('news/'.$News[1]['id']) }}">
                                    {{  $News[1]['title_'.$lang] }}
                                </a>
                            </h3>
                            <p class="bpg_arial trim4">
                                {{ $News[1]['short_text_'.$lang] }}
                            </p>
                        </div><!-- service-box -->
                    </div>

                </div>
            </div>
            <!-- col -->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="featured-bx">
                    <div class="bx-first">
                        <div class="text-bx">
                            <h3 class="mnain_news_date">{{ $News[2]->created_at->toFormattedDateString() }}</h3>
                            <h3 class="bpg_caps trim2">
                                <a href="{{ asset('news/'.$News[2]['id']) }}">
                                    {{ $News[2]['title_'.$lang] }}
                                </a>
                            </h3>
                            <p class="bpg_arial trim4">
                                {{ $News[2]['short_text_'.$lang] }}
                            </p>
                        </div><!-- text-bx-->
                        <div class="img-holder">
                            <a href="{{ asset('news/'.$News[2]['id']) }}">
                                <img src="{{ asset('public/'.$News[2]['tumb']) }}" class="web_news_main_loop_cover" alt="{{ $News[2]['title_'.$lang] }}">
                            </a>
                        </div>
                    </div><!-- bx-first-->

                    <div class="bx-first">
                        <div class="img-holder pull-left">
                            <a href="{{ asset('news/'.$News[3]['id']) }}">
                                <img src="{{ asset('public/'.$News[3]['tumb']) }}" class="web_news_main_loop_cover"  alt="{{ $News[3]['title_'.$lang] }}">
                            </a>
                        </div>
                        <div class="text-bx border-left-none">
                            <h3 class="mnain_news_date">{{ $News[3]->created_at->toFormattedDateString() }}</h3>
                            <h3 class="bpg_caps trim2">
                                <a href="{{ asset('news/'.$News[3]['id']) }}">
                                    {{ $News[3]['title_'.$lang] }}
                                </a>
                            </h3>
                            <p class="bpg_arial trim4">
                                {{ $News[3]['short_text_'.$lang] }}
                            </p>
                        </div><!-- text-bx-->
                    </div><!-- bx-first-->

                    <div class="bx-first">
                        <div class="text-bx">
                            <h3 class="mnain_news_date">{{ $News[4]->created_at->toFormattedDateString() }}</h3>
                            <h3 class="bpg_caps trim2">
                                <a href="{{ asset('news/'.$News[4]['id']) }}">
                                    {{ $News[4]['title_'.$lang] }}
                                </a>
                            </h3>
                            <p class="bpg_arial trim4">
                                {{ $News[4]['short_text_'.$lang] }}
                            </p>
                        </div><!-- text-bx-->
                        <div class="img-holder">
                            <a href="{{ asset('news/'.$News[4]['id']) }}">
                                <img src="{{ asset('public/'.$News[4]['tumb']) }}" class="web_news_main_loop_cover"  alt="{{ $News[4]['title_'.$lang] }}">
                            </a>
                        </div>
                    </div><!-- bx-first-->

                </div><!-- feature-box -->
            </div>
        </div>
    </div>
</section>