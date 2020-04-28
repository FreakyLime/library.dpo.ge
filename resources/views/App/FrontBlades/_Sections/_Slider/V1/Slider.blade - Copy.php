<section class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul>
            @foreach($MainSlider as $slider)
            <li data-transition="random">
                <div style="background-color: #0a6aa1; z-index: 99999">
                <img src="{{ asset('public/'.$slider->image) }}"  alt="" width="1920" height="900" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                @if($slider['title_'.$lang])
                <div class="tp-caption tp-resizeme banner-caption-h3 ttu bpg_caps"
                     data-x="center" data-hoffset="0"
                     data-y="top" data-voffset="370"
                     data-transform_idle="o:1;"
                     data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                     data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                     data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                     data-splitin="none"
                     data-splitout="none"
                     data-start="500">
                    {{ $slider['title_'.$lang] }}
                </div>
                @endif
                @if($slider['short_text_'.$lang])
                <div class="tp-caption tp-resizeme banner-caption-p text-center"
                     data-x="center" data-hoffset="0"
                     data-y="top" data-voffset="430"
                     data-transform_idle="o:1;"
                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                     data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on"
                     data-start="1500">
                    {!!  $slider['short_text_'.$lang] !!}
                </div>
                @endif
                <div class="tp-caption tp-resizeme"
                     data-x="center" data-hoffset="0"
                     data-y="top" data-voffset="500"
                     data-transform_idle="o:1;"
                     data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                     data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                     data-splitin="none"
                     data-splitout="none"
                     data-responsive_offset="on"
                     data-start="2000">
                    <a href="<?if($slider->url){ echo asset($slider->url); } else echo asset('slider/'.$slider->id)?>" class="thm-btn">{{ trans('translate.slider_more') }}</a>
                </div>
                </div>
            </li>
            @endforeach

        </ul>
    </div>
</section>