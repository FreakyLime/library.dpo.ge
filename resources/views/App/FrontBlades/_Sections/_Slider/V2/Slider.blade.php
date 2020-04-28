
<section id="home1-slider">
    <div class="home1-slider rslides-container loading">
        <div class="col-md-12 slide-left col-xs-12 col-sm-6">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <?php $i = 0; ?>
                    @foreach($MainSlider as $slider)
                        <div class="item <?php echo ($i==0) ? 'active' :''; $i++?> ">
                            <img src="{{ asset('public/'.$slider->image) }}" alt="image" class="web_slider_full_cover">
                            <div class="carousel-caption">
                                <div class="exclusively-flowers">
                                    <h3 class="clearfix slider_hs bpg_caps">{{ $slider['title_'.$lang] }}</h3>
                                    <div class="gap-10"></div>
                                    @if($slider->url || $slider->full_text_ge)
                                        <a href="<?if($slider->url){ echo asset($slider->url); } else echo asset('slider/'.$slider->id)?>">
                                            <button class="clearfix shopnow hidden-xs bpg_caps fwhite bpg_caps">{{ trans('web.slider_more') }}</button>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="rslides_nav_block">
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="arrow_carrot-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="arrow_carrot-right"></span>
                    </a>
                </div>

            </div>
        </div>

    </div>

</section>