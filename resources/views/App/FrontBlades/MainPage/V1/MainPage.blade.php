@extends('App.FrontBlades.Masterpage.'.$TS['master_page'].'.MasterPage')

@section('content')

    {{--სლაიდერის სექციის შემოტანა--}}
    @include('App.FrontBlades._Sections._Slider.'.$TS['slider'].'.Slider')
    {{--სლაიდერის სექციის შემოტანა--}}

    <div class="clearfix"></div>
    {{--NEWS BLOCK--}}
    <section class="padding-top-bottom7 text-center">
        <div class="container">
            <div class="row">

                <h2 class="big caps font-weight8 margin-bottom bpg_caps">სიახლეები</h2>
                <h6 class="font-weight3 gray4 line-height3 less1 margin-bottom5"></h6>

                <div class="col-md-3 col-sm-6 marbo-resp4 animate fadeInUp" data-anim-type="fadeInUp" data-anim-delay="200">
                    <div class="padding-bottom5 hover-shadow11">
                        <img src="{{ asset('public/Theme') }}/images/34.jpg" alt="" class="respoimg margin-bottom3">
                        <div class="less4">
                            <h5 class="font-weight7 margin-bottom">CSS3 Animations</h5>
                            <p class="margin-bottom3">True generator the sentence structures lorem therefo always free from repetition.</p>
                            <a href="#" class="button11 sty6 caps">Read more</a>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 marbo-resp4 animate fadeInUp" data-anim-type="fadeInUp" data-anim-delay="200">
                    <div class="padding-bottom5 hover-shadow11">
                        <img src="{{ asset('public/Theme') }}/images/35.jpg" alt="" class="respoimg margin-bottom3">
                        <div class="less4">
                            <h5 class="font-weight7 margin-bottom">Set your Website</h5>
                            <p class="margin-bottom3">True generator the sentence structures lorem therefo always free from repetition.</p>
                            <a href="#" class="button11 sty6 caps">Read more</a>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 marbo-resp15 animate fadeInUp" data-anim-type="fadeInUp" data-anim-delay="200">
                    <div class="padding-bottom5 hover-shadow11">
                        <img src="{{ asset('public/Theme') }}/images/36.jpg" alt="" class="respoimg margin-bottom3">
                        <div class="less4">
                            <h5 class="font-weight7 margin-bottom">Bootstrap Support</h5>
                            <p class="margin-bottom3">True generator the sentence structures lorem therefo always free from repetition.</p>
                            <a href="#" class="button11 sty6 caps">Read more</a>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 animate fadeInUp" data-anim-type="fadeInUp" data-anim-delay="200">
                    <div class="padding-bottom5 hover-shadow11">
                        <img src="{{ asset('public/Theme') }}/images/37.jpg" alt="" class="respoimg margin-bottom3">
                        <div class="less4">
                            <h5 class="font-weight7 margin-bottom">You Love It!</h5>
                            <p class="margin-bottom3">True generator the sentence structures lorem therefo always free from repetition.</p>
                            <a href="#" class="button11 sty6 caps">Read more</a>
                        </div>
                    </div>
                </div><!-- end col -->

            </div>
        </div>
    </section>
    {{--NEWS BLOCK--}}

    <div class="clearfix"></div>

    <section class="padding-top6 padding-bottom bg-color-darkgray" style="background-color: #dce3ec !important;">
        <div class="container">
            <div class="row nopadding">
                <div class="col-md-4 col-sm-12 col-xs-12 marbo-resp">
                    <h2 class="big2 caps font-weight8 margin-bottom2 bpg_caps">სკოლა იბერიის შესახებ</h2>
                    <hr class="style-one gray quarter margin-top3">
                </div><!-- end col -->

                <div class="col-md-8 col-sm-6 col-xs-12 marbo-resp">
                    <h6 class="gray4 font-weight3 line-height4">Lorem Ipsum is simply dummy text the printing typesetting industry has been the industry's standard dummy as ever since when an unknown printer took a galley of type and scrambled it to make a type specimen book has survived not only five centuries, but also the leap into electronic typesetting remaining unchanged.</h6>
                </div><!-- end col -->
            </div>
        </div>
    </section>
    <!-- end section -->


    <div class="clearfix"></div>


    <section class="padding-top-bottom7">
        <div class="row nopadding">
            <div class="container">

                <h2 class="big font-weight8 caps margin-bottom2 bpg_caps">გალერეა</h2>
                <h6 class="gray4 font-weight3 line-height3 margin-bottom5"></h6>

                <div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic">
                    <div class="cbp-item webdesign graphic">
                        <a href="{{ asset('public/Theme') }}/images/media/34.jpg" class="cbp-caption cbp-lightbox"
                           data-title="Bolt UI<br>by Tiberiu Neamu">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset('public/Theme') }}/images/media/34.jpg" alt="" />
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">Bolt UI</div>
                                        <div class="cbp-l-caption-desc">by Tiberiu Neamu</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="cbp-item webdesign motion graphic">
                        <a href="{{ asset('public/Theme') }}/images/media/35.jpg" class="cbp-caption cbp-lightbox"
                           data-title="World Clock Widget<br>by Paul Flavius Nechita">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset('public/Theme') }}/images/media/35.jpg" alt="" />
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">World Clock Widget</div>
                                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="cbp-item print motion">
                        <a href="{{ asset('public/Theme') }}/images/media/36.jpg" class="cbp-caption cbp-lightbox"
                           data-title="World Clock Widget<br>by Paul Flavius Nechita">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset('public/Theme') }}/images/media/36.jpg" alt="" />
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">World Clock Widget</div>
                                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="cbp-item print motion">
                        <a href="{{ asset('public/Theme') }}/images/media/37.jpg" class="cbp-caption cbp-lightbox"
                           data-title="World Clock Widget<br>by Paul Flavius Nechita">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset('public/Theme') }}/images/media/37.jpg" alt="" />
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">World Clock Widget</div>
                                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="cbp-item print motion">
                        <a href="{{ asset('public/Theme') }}/images/media/37.jpg" class="cbp-caption cbp-lightbox"
                           data-title="World Clock Widget<br>by Paul Flavius Nechita">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset('public/Theme') }}/images/media/36.jpg" alt="" />
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">World Clock Widget</div>
                                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="cbp-item webdesign">
                        <a href="{{ asset('public/Theme') }}/images/media/37.jpg" class="cbp-caption cbp-lightbox"
                           data-title="World Clock Widget<br>by Paul Flavius Nechita">
                            <div class="cbp-caption-defaultWrap">
                                <img src="{{ asset('public/Theme') }}/images/media/35.jpg" alt="" />
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title">World Clock Widget</div>
                                        <div class="cbp-l-caption-desc">by Paul Flavius Nechita</div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </section><!-- end section -->


    <!-- end section -->

    <div class="clearfix"></div>

    <section class="padding-bottom7 text-center">
        <div class="container">
            <div class="row">

                <div class="col-md-12 text-left">
                    <h2 class="big font-weight8 caps margin-bottom2 bpg_caps">ჩვენი მასწავლებლები</h2>
                    <h6 class="gray4 font-weight3 line-height3 margin-bottom5"></h6>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12 marbo-resp animate" data-anim-type="fadeInUp" data-anim-delay="300">
                    <div class="imghoverzoom">
                        <img src="{{ asset('public/Theme') }}/images/people-img32.jpg" alt="" class="respoimg" />
                        <div class="textbox">
                            <h5 class="white font-weight7 margin-bottom padding-top9">Adam Lewis</h5>
                            <p class="white sfont margin-bottom2">CEO</p>
                            <a href="#"><i class="fa fa-facebook icon-border size3" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter icon-border size3" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram icon-border size3" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12 marbo-resp animate" data-anim-type="fadeInUp" data-anim-delay="350">
                    <div class="imghoverzoom">
                        <img src="{{ asset('public/Theme') }}/images/people-img33.jpg" alt="" class="respoimg" />
                        <div class="textbox">
                            <h5 class="white font-weight7 margin-bottom padding-top9">Emma Holly</h5>
                            <p class="white sfont margin-bottom2">Manager</p>
                            <a href="#"><i class="fa fa-facebook icon-border size3" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter icon-border size3" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram icon-border size3" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12 marbo-resp animate" data-anim-type="fadeInUp" data-anim-delay="400">
                    <div class="imghoverzoom">
                        <img src="{{ asset('public/Theme') }}/images/people-img34.jpg" alt="" class="respoimg" />
                        <div class="textbox">
                            <h5 class="white font-weight7 margin-bottom padding-top9">Jack Cameron</h5>
                            <p class="white sfont margin-bottom2">Team Lead</p>
                            <a href="#"><i class="fa fa-facebook icon-border size3" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter icon-border size3" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram icon-border size3" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12 animate" data-anim-type="fadeInUp" data-anim-delay="450">
                    <div class="imghoverzoom">
                        <img src="{{ asset('public/Theme') }}/images/people-img35.jpg" alt="" class="respoimg" />
                        <div class="textbox">
                            <h5 class="white font-weight7 margin-bottom padding-top9">Dylan Lucy</h5>
                            <p class="white sfont margin-bottom2">Developer</p>
                            <a href="#"><i class="fa fa-facebook icon-border size3" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter icon-border size3" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram icon-border size3" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div><!-- end col -->

                <p class="clearfix margin-bottom3"></p>

                <div class="col-md-3 col-sm-6 col-xs-12 animate" data-anim-type="fadeInUp" data-anim-delay="500">
                    <div class="imghoverzoom">
                        <img src="{{ asset('public/Theme') }}/images/people-img37.jpg" alt="" class="respoimg" />
                        <div class="textbox">
                            <h5 class="white font-weight7 margin-bottom padding-top9">Jessica Priston</h5>
                            <p class="white sfont margin-bottom2">Support</p>
                            <a href="#"><i class="fa fa-facebook icon-border size3" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter icon-border size3" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram icon-border size3" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12 marbo-resp animate" data-anim-type="fadeInUp" data-anim-delay="500">
                    <div class="imghoverzoom">
                        <img src="{{ asset('public/Theme') }}/images/people-img36.jpg" alt="" class="respoimg" />
                        <div class="textbox">
                            <h5 class="white font-weight7 margin-bottom padding-top9">Molly Leah</h5>
                            <p class="white sfont margin-bottom2">Support</p>
                            <a href="#"><i class="fa fa-facebook icon-border size3" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter icon-border size3" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram icon-border size3" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12 animate" data-anim-type="fadeInUp" data-anim-delay="450">
                    <div class="imghoverzoom">
                        <img src="{{ asset('public/Theme') }}/images/people-img35.jpg" alt="" class="respoimg" />
                        <div class="textbox">
                            <h5 class="white font-weight7 margin-bottom padding-top9">Dylan Lucy</h5>
                            <p class="white sfont margin-bottom2">Developer</p>
                            <a href="#"><i class="fa fa-facebook icon-border size3" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter icon-border size3" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram icon-border size3" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div><!-- end col -->

                <div class="col-md-3 col-sm-6 col-xs-12 animate" data-anim-type="fadeInUp" data-anim-delay="450">
                    <div class="imghoverzoom">
                        <img src="{{ asset('public/Theme') }}/images/people-img35.jpg" alt="" class="respoimg" />
                        <div class="textbox">
                            <h5 class="white font-weight7 margin-bottom padding-top9">Dylan Lucy</h5>
                            <p class="white sfont margin-bottom2">Developer</p>
                            <a href="#"><i class="fa fa-facebook icon-border size3" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter icon-border size3" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram icon-border size3" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div><!-- end col -->




            </div>
        </div>
    </section><!-- end section -->


@stop