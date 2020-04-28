@extends('App.FrontBlades.Masterpage.'.$TS['master_page'].'.MasterPage')

@section('content')

<!--Start Title-->
<div id="inner-banner" style="background:#000 url('{{ asset('public/'.$Settings['page_bg']['image']) }}') no-repeat center center/cover;">
    <div class="container">
        <h1 class="bpg_caps fs32">{{ $Team['title_'.$lang] }}</h1>
    </div>
</div>
<!--End Title-->

<section class="causes-style-1 causes-detail news-grid campaign-details">
    <div class="container">
        <div class="row">
            <!-- HTML Content -->
            <div class="col-md-1 col-sm-1">
                <div class="team-social-box-1">
                    <ul>
                        <li>
                            <a href="{{ $Team['facebook'] }}" target="_blank">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $Team['googleplus'] }}" target="_blank">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ $Team['twitter'] }}" target="_blank">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>

                    </ul>
                </div>
            </div>

            <div id="469" class="col-md-11 col-sm-11">
                <div class="post-469 campaign type-campaign status-publish has-post-thumbnail hentry campaign_category-campaign campaign_tag-campaigns campaign_tag-charity campaign_tag-tags campaign-has-goal campaign-has-end-date">
                    <!-- Main Content -->
                    <div class="style-1">
                        <div class="text-box mr-b-50">
                            <h3 class="bpg_caps fbold">{{ $Team['title_'.$lang] }}</h3>
                            <div class="the-content">
                                <p class="bfont text-left bpg_caps">{!! $Team['full_text_'.$lang] !!}</p>
                            </div>

                            {{--გაზიარების სკრიპტის შემოტანა--}}
                            @include('App.FrontBlades._Sections._Social.Social')
                            {{--გაზიარების სკრიპტის შემოტანა--}}

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


@stop