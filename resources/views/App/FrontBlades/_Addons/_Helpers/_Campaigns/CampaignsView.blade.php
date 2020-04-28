@extends('App.FrontBlades.Masterpage.'.$TS['master_page'].'.MasterPage')

@section('content')

<!--Start Title-->
<div id="inner-banner" style="background:#000 url('{{ asset('public/'.$Settings['page_bg']['image']) }}') no-repeat center center/cover;">
    <div class="container">
        <h1 class="bpg_caps fs32">{{ $Campaign['title_'.$lang] }}</h1>
    </div>
</div>
<!--End Title-->

<section class="causes-style-1 causes-detail news-grid campaign-details">
    <div class="container">
        <div class="row">
            <!-- HTML Content -->
            <div id="469" class="col-md-9 col-sm-8">
                <div class="post-469 campaign type-campaign status-publish has-post-thumbnail hentry campaign_category-campaign campaign_tag-campaigns campaign_tag-charity campaign_tag-tags campaign-has-goal campaign-has-end-date">


                    <!-- Main Content -->
                    <div class="box">
                        <div class="frame">
                            <img src="{{ asset('public/'.$Campaign->image) }}" alt="{{ $Campaign['title_'.$lang] }}" class="web_news_full_cover">
                        </div>
                        <div class="text-box">
                            <div class="causes-goal-box">
                                <ul>
                                    <li>
                                        <span class="title bpg_caps fs14">{{ trans('web.Goal') }}:</span>
                                        <strong class="amount">
                                            {{ $Campaign['goal'] }}
                                            <? if($lang == "ge"){?>
                                            <span class="gel">c</span>
                                            <?} else echo trans('web.eng_lari') ?>
                                        </strong>
                                    </li>
                                    <li>
                                        <span class="title bpg_caps fs14">{{ trans('web.Raised') }}:</span>
                                        <strong class="amount">
                                            {{ $Campaign['raised'] }}
                                            <? if($lang == "ge"){?>
                                            <span class="gel">c</span>
                                            <?} else echo trans('web.eng_lari') ?>
                                        </strong>
                                    </li>
                                    <li>
                                        <span class="title bpg_caps fs14">{!! trans('web.Donators') !!}  :</span>
                                        <strong class="amount">{{ $Campaign['donations'] }}
                                            {{ trans('web.Donors') }}</strong>
                                    </li>
                                    <li>
                                        <span class="title bpg_caps fs14">{{ trans('web.Time_Remain') }}:</span>
                                        <strong class="amount bpg_caps fs14">
                                            <?
                                            $now = Carbon::now();
                                            $endtime =  Carbon::parse($Campaign->time_end);
                                            echo $endtime->diffInDays($now);
                                            ?>
                                            {{ trans('web.Days_Left') }}
                                        </strong>
                                    </li>
                                </ul>
                                <div class="pie-title-center demo-pie-1"
                                     data-percent="<? echo $percent = ($Campaign->raised / $Campaign->goal) * 100; ?>">
                                    <span class="pie-value"></span><b class="bpg_caps">{{ trans('web.complated') }}</b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="style-1">
                        <div class="text-box mr-b-50">
                            <h3 class="bpg_caps fbold">{{ $Campaign['title_'.$lang] }}</h3>
                            <div class="the-content">
                                <p class="bfont text-left bpg_caps">{!! $Campaign['full_text_'.$lang] !!}</p>
                            </div>

                            {{--გაზიარების სკრიპტის შემოტანა--}}
                            @include('App.FrontBlades._Sections._Social.Social')
                            {{--გაზიარების სკრიპტის შემოტანა--}}

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-4 content_sidebar sidebar side-bar">

                <div class="widget sidebar-box sidebar-recent-post widget_give_forms_widget"><h3>{{ trans('web.Make_Donation') }}</h3>
                    <div id="give-form-457-wrap" class="give-form-wrap give-display-onpage">


                        <form id="give-form-457" class="give-form give-form-457 give-form-type-set float-labels-enabled"
                              action="http://crunchpress.com/demo/needs/?campaign=help-syrian-homeless-people-9&amp;payment-mode=paypal"
                              method="post">
                            <input type="hidden" name="give-form-id" value="457"/>
                            <input type="hidden" name="give-form-title" value="Make Donation"/>
                            <input type="hidden" name="give-current-url"
                                   value="index438a.html?campaign=help-syrian-homeless-people-9"/>
                            <input type="hidden" name="give-form-url"
                                   value="index438a.html?campaign=help-syrian-homeless-people-9"/>
                            <input type="hidden" name="give-form-minimum"
                                   value="10"/>

                            <!-- The following field is for robots only, invisible to humans: -->
                            <span class="give-hidden" style="display: none !important;">
					<label for="give-form-honeypot-457"></label>
					<input id="give-form-honeypot-457" type="text" name="give-honeypot"
                           class="give-honeypot give-hidden"/>
				</span>

                            <div class="give-total-wrap">
                                <div class="give-donation-amount form-row-wide">
                                    <span class="give-currency-symbol give-currency-position-before">
                                        <? if($lang == "ge"){?>
                                        <span class="gel">c</span>
                                        <?} else echo trans('web.eng_lari') ?>
                                    </span>

                                    <label class="give-hidden" for="give-amount">{{ trans('web.tanxis_charicxva') }}:</label>
                                    <input class="give-text-input" id="give-amount" name="give-amount" type="text" placeholder="" value="150" autocomplete="off">
                                    <div style="clear: both"></div>
                                </div>
                            </div>

                            <fieldset id="give-payment-mode-select" style="display: none;">
                                <legend
                                        class="give-payment-mode-label">Select Payment Method <span
                                            class="give-loading-text"><span
                                                class="give-loading-animation"></span>
            </span>
                                </legend>

                                <div id="give-payment-mode-wrap">
                                    <ul id="give-gateway-radio-list">
                                    </ul>
                                </div>
                            </fieldset>


                            <div id="give_purchase_form_wrap">

                                <fieldset id="give_checkout_user_info">
                                    <legend  class="pd-t-20">{{ trans('web.Personal_Info') }}</legend>
                                    <p id="give-first-name-wrap" class="form-row form-row-first form-row-responsive">
                                        <input
                                                class="give-input required"
                                                type="text"
                                                name="give_first"
                                                placeholder="First Name"
                                                value=""
                                                required aria-required="true"/>
                                    </p>

                                    <p id="give-last-name-wrap" class="form-row form-row-last form-row-responsive">
                                        <input
                                                class="give-input"
                                                type="text"
                                                name="give_last"
                                                placeholder="Last Name"
                                                value=""
                                        />
                                    </p>

                                    <p id="give-email-wrap" class="form-row form-row-wide">
                                        <input
                                                class="give-input required"
                                                type="email"
                                                name="give_email"
                                                placeholder="Email Address"
                                                value=""
                                                required aria-required="true"/>

                                    </p>
                                </fieldset>
                                <fieldset id="give_purchase_submit">
                                    <div class="give-submit-button-wrap give-clearfix">
                                        <input type="submit" class="give-submit give-btn" id="give-purchase-button"
                                               name="give-purchase"
                                               value="{{ trans('web.Donate_Now') }}"/>
                                        <span class="give-loading-animation"></span>
                                    </div>
                                </fieldset>

                            </div>

                        </form>


                    </div><!--end #give-form-457-->
                </div>
            </div>

        </div>
    </div>
</section>


@stop