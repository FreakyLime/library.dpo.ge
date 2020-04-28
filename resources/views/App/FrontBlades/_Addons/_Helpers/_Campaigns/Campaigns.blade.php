@extends('App.FrontBlades.Masterpage.'.$TS['master_page'].'.MasterPage')

@section('content')

<!--Start Title-->
<div id="inner-banner" style="background:#000 url('{{ asset('public/'.$Settings['page_bg']['image']) }}') no-repeat center center/cover;">
    <div class="container">
        <h1 class="bpg_caps">{{ trans('web.Campaigns_all_sat') }}</h1>
    </div>
</div>
<!--End Title-->

@if(!$AllCampaigns->isEmpty())

<div class="page_content">
    <div class = "container">
        <div class = "row">

            <div id="block_content_first" class="col-md-12">
                <div class="container-res">
                    <div class="row">
                        <div class="">
                            <div id="post-165" class="post-165 page type-page status-publish hentry">
                                <a href="">
                                </a>
                                <div class="entry-content-cp">
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner ">
                                                <div class="wpb_wrapper">

                                                    <section class="causes-style-1 causes-grid">
                                                        <div class="element_wrap">
                                                            <div class="row">

                                                                @foreach($AllCampaigns as $item)
                                                                <div class="col-md-4 col-sm-6">
                                                                    <div class="box">
                                                                        <div class="frame">
                                                                            <a href="{{ asset('campaigns/view/'.$item->id) }}">
                                                                                <img src="{{ asset('public/'.$item->image) }}" alt="{{ $item['title_'.$lang] }}" class="campaigns_tumb">
                                                                            </a>
                                                                        </div>
                                                                        <div class="text-box">
                                                                            <h3 class="fs20 bpg_caps other_trims2" style="min-height: 48px">{{ $item['title_'.$lang] }}</h3>
                                                                            <div class="causes-goal-box">
                                                                                <ul>
                                                                                    <li>
                                                                                        <span class="title bpg_caps fs14">{{ trans('web.Goal') }}:</span>
                                                                                        <strong class="amount">
                                                                                            {{ $item['goal'] }}
                                                                                            <?php if($lang == "ge"){?>
                                                                                            <span class="gel">c</span>
                                                                                            <?} else echo trans('web.eng_lari') ?>
                                                                                        </strong>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span class="title bpg_caps fs14">{{ trans('web.Raised') }}:</span>
                                                                                        <strong class="amount">
                                                                                            {{ $item['raised'] }}
                                                                                            <?php if($lang == "ge"){?>
                                                                                            <span class="gel">c</span>
                                                                                            <?} else echo trans('web.eng_lari') ?>
                                                                                        </strong>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span class="title bpg_caps fs14">{!! trans('web.Donators') !!}:</span>
                                                                                        <strong class="amount">{!!   $item['donations'] !!}</strong>
                                                                                    </li>
                                                                                    <li>
                                                                                        <span class="title bpg_caps fs14">{{ trans('web.Time_Remain') }}:</span>
                                                                                        <strong class="amount">
                                                                                            <?php 
                                                                                            $now = Carbon::now();
                                                                                            $endtime =  Carbon::parse($item->time_end);
                                                                                            echo $endtime->diffInDays($now);
                                                                                            ?>
                                                                                            {{ trans('web.Days_Left') }}
                                                                                        </strong>
                                                                                    </li>
                                                                                </ul>
                                                                                <div class="pie-title-center demo-pie-1"
                                                                                     data-percent="<?php echo $percent = ($item->raised / $item->goal) * 100; ?>">
                                                                                    <span class="pie-value"></span><b class="bpg_caps">{{ trans('web.complated') }}</b>
                                                                                </div>
                                                                            </div>
                                                                            <div class="pd-t-80"></div>
                                                                            <a href="{{ asset('campaigns/view/'.$item->id) }}" class="btn-style-1 bpg_caps">
                                                                                {{ trans('web.donate_now') }}
                                                                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @endforeach

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

        </div>
    </div>
</div>

@endif


@stop