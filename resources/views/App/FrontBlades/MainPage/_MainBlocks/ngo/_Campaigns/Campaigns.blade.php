<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">

                <section class="causes-style-1">
                    <div class="element_wrap">
                        <div class="heading-style-1">
                            <h2 class="bpg_caps fs36">{{ trans('web.campaigns') }}</h2>
                            <em class="bpg_caps">{{ trans('web.campaigns_text') }}</em>
                        </div>
                        <div id="causes-slider"
                             class="owl-carousel">

                            @foreach($MainCampaigns as $item)
                            <div class="item">
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
                        <div class="btn-row">
                            <a href="{{ asset('campaigns') }}" class="btn-style-2 bpg_caps">
                                {{ trans('web.all_campaigns') }}
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>