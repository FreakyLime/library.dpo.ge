<div class="col-md-4 col-sm-5">
    <div class="welcome-donate-box"
         style="background:#000 url('{{ asset('public/'.$Settings['campaign_bg']['image']) }}') no-repeat center center/cover">
        <div class="holder">
            <strong class="title bpg_caps fs26">
                {{ trans('web.main_campaigns') }}
            </strong>
            <p class="bpg_arial fs16">
                {{ trans('web.main_campaigns_text') }}
            </p>
            <div class="donate-goal-box">
                <ul>
                    <li>
                        <span class="title fs14 bpg_caps">{{ trans('web.Goal') }}:</span>
                        <strong class="amount">
                            {{ $OneCampaign['goal'] }}
                            <? if($lang == "ge"){?>
                            <span class="gel">c</span>
                            <?} else echo trans('web.eng_lari') ?>
                        </strong>
                    </li>
                    <li>
                        <span class="title fs14 bpg_caps">{{ trans('web.Raised') }}:</span>
                        <strong class="amount">
                            {{ $OneCampaign['raised'] }}
                            <? if($lang == "ge"){?>
                            <span class="gel">c</span>
                            <?} else echo trans('web.eng_lari') ?>
                        </strong>
                    </li>
                    <li>
                        <span class="title fs14 bpg_caps">{!! trans('web.Donators') !!} :</span>
                        <strong class="amount">{{ $OneCampaign['donations'] }} </strong>
                    </li>
                    <li>
                        <span class="title fs14 bpg_caps">{{ trans('web.Time_Remain') }}:</span>
                        <strong class="amount bpg_caps">17 {{ trans('web.Days_Left') }}</strong>
                    </li>
                </ul>
                <div class="progress progress-bar-vertical">
                    <div class="progress-bar"
                         role="progressbar"
                         aria-valuenow="0"
                         aria-valuemin="0"
                         aria-valuemax="100"
                         style="height: <? echo $percent = ( $OneCampaign['raised'] / $OneCampaign['goal']  ) * 100; ?>%;">
                        <span class="sr-only"><? echo $percent = ( $OneCampaign['raised'] / $OneCampaign['goal']  ) * 100; ?><sup>%</sup></span>
                    </div>
                </div>
                <div class="btn-row pd-t-40">

                    <a href="{{ asset('campaigns/donate/'.$OneCampaign->id) }}" class="btn-style-1">
                        {{ trans('web.donate_now') }}
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>