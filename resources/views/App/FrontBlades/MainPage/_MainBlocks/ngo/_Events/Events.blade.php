<style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1487055326212 {
        margin-top: 80px !important;
        margin-bottom: 80px !important;
    }

    .vc_custom_1485954268993 {
        background-image: url('{{ asset('public/'.$Settings['event_bg']['image']) }}') !important;
        background-position: center !important;
        background-repeat: no-repeat !important;
        background-size: cover !important;
    }

    .vc_custom_1485954334522 {
        margin-top: -35px !important;
    }
</style>
<div data-vc-full-width="true" data-vc-full-width-init="false"
     class="vc_row wpb_row vc_row-fluid vc_custom_1485954268993 vc_row-has-fill">
    <script>
        jQuery(function () {
            var austDay = new Date();
            austDay = new Date(2018, 07 - 1, 18, 5, 15, 00)
            jQuery('.defaultCountdown-8053').countdown({
                labels: ['Years', 'Months', 'Weeks', 'Days', 'Hours', 'MNTS', 'SECS'],
                until: austDay
            });
            jQuery('#year').text(austDay.getFullYear());
        });
    </script>


    <script>
        jQuery(function () {
            var austDay = new Date();
            austDay = new Date(2018, 09 - 1, 19, 10, 15, 00)
            jQuery('.defaultCountdown-8057').countdown({
                labels: ['Years', 'Months', 'Weeks', 'Days', 'Hours', 'MNTS', 'SECS'],
                until: austDay
            });
            jQuery('#year').text(austDay.getFullYear());
        });
    </script>


    <script>
        jQuery(function () {
            var austDay = new Date();
            austDay = new Date(2018, 10 - 1, 24, 5, 15, 00)
            jQuery('.defaultCountdown-8052').countdown({
                labels: ['Years', 'Months', 'Weeks', 'Days', 'Hours', 'MNTS', 'SECS'],
                until: austDay
            });
            jQuery('#year').text(austDay.getFullYear());
        });
    </script>


    <script>
        jQuery(function () {
            var austDay = new Date();
            austDay = new Date(2018, 11 - 1, 21, 5, 15, 00)
            jQuery('.defaultCountdown-8051').countdown({
                labels: ['Years', 'Months', 'Weeks', 'Days', 'Hours', 'MNTS', 'SECS'],
                until: austDay
            });
            jQuery('#year').text(austDay.getFullYear());
        });
    </script>


    <script>
        jQuery(function () {
            var austDay = new Date();
            austDay = new Date(2018, 11 - 1, 23, 5, 15, 00)
            jQuery('.defaultCountdown-8058').countdown({
                labels: ['Years', 'Months', 'Weeks', 'Days', 'Hours', 'MNTS', 'SECS'],
                until: austDay
            });
            jQuery('#year').text(austDay.getFullYear());
        });
    </script>


    <script>
        jQuery(function () {
            var austDay = new Date();
            austDay = new Date(2018, 12 - 1, 05, 10, 15, 00)
            jQuery('.defaultCountdown-8056').countdown({
                labels: ['Years', 'Months', 'Weeks', 'Days', 'Hours', 'MNTS', 'SECS'],
                until: austDay
            });
            jQuery('#year').text(austDay.getFullYear());
        });
    </script>

    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner vc_custom_1485954334522">
            <div class="wpb_wrapper">

                <div class="wpb_wrapper">

                    <section class="event-style-1">
                        <div class="container">
                            <div class="heading-style-1">
                                <h2 class="bpg_caps fs36">{{ trans('web.events_text') }}</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-10"> <a href="#" class="plus"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                    <div id="event-slider">


                                        @foreach($MainEvents as $item)
                                        <div class="slide" style="background-color: #4b4b4b">
                                            <div class="clearfix">
                                                <div class="event-style-1-box">
                                                    <div class="left-box">
                                                        <strong class="date fs28">
                                                            <span>{{ $item->date }}</span>
                                                        </strong>
                                                        <div class="holde">
                                                            <h3>
                                                                <a href="{{ asset('events/view/'.$item->id) }}" class="bpg_caps other_trim1 fs22">
                                                                    {{ $item['title_'.$lang] }}
                                                                </a>
                                                            </h3>
                                                            <div class="btn-row">
                                                                <a href="{{ asset('events/view/'.$item->id) }}" class="link">
                                                                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                                    {{ $item['short_text_'.$lang] }}
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="right-box">
                                                        <a href="{{ asset('events/view/'.$item->id) }}" class="btn-detail">
                                                            {{ trans('web.events_view') }}
                                                        </a>
                                                        <div class="event-style1-timer-box">
                                                            <div class="defaultCountdown-9433"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach


                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>