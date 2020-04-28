@extends('App.FrontBlades.Masterpage.'.$TS['master_page'].'.MasterPage')

@section('content')

<div class="main-content margin-top-bottom-cp">
    <div class="page_content">
        <div class = "container">
            <div class = "row">

                <div id="block_content_first" class="col-md-12">
                    <div class="container-res">
                        <div class="row">
                            <div class="">
                                <div id="post-436" class="post-436 page type-page status-publish hentry">

                                    <div class="entry-content-cp">
                                        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1486364548639 vc_row-no-padding">


                                            <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAAUGcZGt32u_PCoHira9eDB4ZKLMnSXdQ" &callback=initMap"
                                                    async defer></script>
                                            <script>
                                                jQuery(document).ready(function($) {
                                                    "use strict";
                                                    if ($('#map_contact_1').length) {
                                                        var map;
                                                        var myLatLng = new google.maps.LatLng(41.7383650, 44.7804460);
                                                        //Initialize MAP
                                                        var myOptions = {
                                                            zoom: 18,
                                                            center: myLatLng,
                                                            //disableDefaultUI: true,
                                                            zoomControl: true,
                                                            mapTypeId: google.maps.MapTypeId.ROADMAP,
                                                            mapTypeControl: false,
                                                            scrollwheel: false,
                                                            styles: [{
                                                                stylers: [{
                                                                    hue: '#cacaca'
                                                                }, {
                                                                    saturation: -100,
                                                                }, {
                                                                    lightness: 10
                                                                }]
                                                            }],
                                                        }
                                                        map = new google.maps.Map(document.getElementById('map_contact_1'), myOptions);
                                                        //End Initialize MAP
                                                        //Set Marker
                                                        var marker = new google.maps.Marker({
                                                            // zoom: 7,
                                                            position: map.getCenter(),
                                                            map: map,

                                                        });
                                                        marker.getPosition();
                                                        //End marker
                                                    }
                                                });
                                            </script>
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">

                                                        <section class="contact-section">

                                                            <div class="contact-map">
                                                                <div id="map_contact_1" class="map_canvas active"></div>
                                                            </div>
                                                            <div class="contact-row">
                                                                <div class="container">
                                                                    <div class="holder">
                                                                        <div class="row">
                                                                            <div class="col-md-6 col-sm-6">
                                                                                <h4>{{ trans('translate.contact_form') }}</h4>
                                                                                <div role="form" class="wpcf7" id="wpcf7-f444-p436-o1" lang="en-US" dir="ltr">
                                                                                    <div class="screen-reader-response"></div>
                                                                                    <form action="" method="post" class="wpcf7-form" novalidate="novalidate">
                                                                                        <p><span class="wpcf7-form-control-wrap text-784"><input type="text" name="text-784" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Full Name" /></span><br />
                                                                                            <span class="wpcf7-form-control-wrap email-549"><input type="email" name="email-549" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="Email" /></span><br />
                                                                                            <span class="wpcf7-form-control-wrap tel-378"><input type="tel" name="tel-378" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false" placeholder="Contact" /></span><br />
                                                                                            <span class="wpcf7-form-control-wrap textarea-602"><textarea name="textarea-602" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea></span><br />
                                                                                            <input type="submit" value="{{ trans('translate.contact_send') }}" class="wpcf7-form-control wpcf7-submit" /></p>
                                                                                        <div class="wpcf7-response-output wpcf7-display-none">

                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6">
                                                                                <h4>{{ trans('translate.contact_sat') }}</h4>
                                                                                <div class="address-box">
                                                                                    <ul>
                                                                                        <li>
                                                                                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                                                                            <p style="line-height: 30px">{{ trans('contact.address') }}</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                                                                            <p style="line-height: 30px">{{ trans('contact.phone') }}</p>
                                                                                        </li>
                                                                                        <li>
                                                                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                                                                            <p style="line-height: 30px">{{ trans('contact.email') }} </p>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vc_row-full-width vc_clearfix"></div>
                                    </div><!-- .entry-content -->
                                </div><!-- #post-## -->

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAAUGcZGt32u_PCoHira9eDB4ZKLMnSXdQ" &callback=initMap"
        async defer></script>
@stop
