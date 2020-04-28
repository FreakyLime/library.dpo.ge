<section id="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4">
                <div class="img-holder">
                    <img src="{{ asset('public/'.$Settings['AboutCover']['image']) }}" alt="{{ $Settings['AboutTitle']['title_'.$lang] }}">
                </div>
            </div><!-- col -->
            <div class="col-lg-8 col-sm-8">
                <div class="section-title-style">
                    <h1 class="bpg_caps">{{ $Settings['AboutTitle']['title_'.$lang] }}</h1>
                    <p class="bpg_arial">{!! $Settings['AboutText']['full_text_'.$lang] !!}</p>

                </div><!-- title -->

                <div class="contact-detail">
                    <p class="bpg_caps">
                        {!! $Settings['about_us_houres']['title_'.$lang] !!}
                    </p>
                    <div class="phn-col">
                        <div class="phone-icon"><i class="fa fa-phone"></i></div>
                        <h3 class="bpg_arial">{!! $Settings['about_us_cal_sat']['title_'.$lang] !!} : <b>{!! $Settings['about_us_call_number']['title_'.$lang] !!}</b></h3>
                    </div>
                </div><!-- contact-detail -->
            </div><!-- col -->
        </div>
    </div>
</section>