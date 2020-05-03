<section class="top-bar">
    <div class="container">
        <div class="holder">
            <div class="row">
                <div class="col-md-7">
                    <div class="left-box">
                        <ul>
                            <li>
                                <div class="dropdown">
                                    <button class="dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <i class="fa fa-globe" aria-hidden="true"></i>
                                        <span class="uppercase">{{ $lang }}</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ asset('/ge') }}" class="uppercase">GE</a></li>
                                        <li><a href="{{ asset('/en') }}" class="uppercase">EN</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a data-rel='tooltip' href="javascript:switchVoice()" style="font-size:20px;position:relative;top:-3px;" >
                                    <i id="voiceControl" class="" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="right-box">
                        <div class="topbar-social">
                            <ul>
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
                                    <a data-rel='tooltip' href="{{ trans('social.youtube') }}" target="_blank" title="Youtube">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>