<footer id="footer">
    <section class="footer-section-1">
        <div class="container">
            <div class="row">


                {{--Footer blocks--}}
                <div class="col-md-5 col-sm-6">
                    <div class="widget box-1 box box">
                        <div class="address">
                            <ul>
                                <li>
                                    <i class="fa fa-home" aria-hidden="true"></i>
                                    {{ trans('contact.address') }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{--Footer blocks--}}
                {{--Footer blocks--}}
                <div class="col-md-2 col-sm-6">
                    <div class="widget box-1 box box">
                        <div class="address">
                            <ul>
                                <li>
                                    <i class="fa fa-phone-square" aria-hidden="true"></i>
                                    {{ trans('contact.phone') }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{--Footer blocks--}}
                {{--Footer blocks--}}
                <div class="col-md-2 col-sm-6">
                    <div class="widget box-1 box box">
                        <div class="address">
                            <ul>
                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <a>
                                        <span class="__cf_email__">
                                            {{ trans('contact.email') }}
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{--Footer blocks--}}
                {{--Footer blocks--}}
                <div class="col-md-3 col-sm-6">
                    <div class="widget box-1 box box">
                        <div class="topbar-social">
                            <ul class="foot">
                                <li>
                                    <a data-rel='tooltip' href="{{ trans('social.facebook') }}" target="_blank" title="Facebook">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a data-rel='tooltip' href="{{ trans('social.twitter') }}" target="_blank" title="Twitter">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a data-rel='tooltip' href="{{ trans('social.youtube') }}" target="_blank" title="Youtube channel">
                                        <i class="fa fa-youtube-square"></i>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                {{--Footer blocks--}}


            </div>
        </div>
    </section>
    <section class="copyrights-section">
        <!-- <strong class="copy">
            {{ trans('web.author') }}  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Created By <a href="http://www.visual.ge">Visual Studio</a>
        </strong> -->
    </section>
</footer>