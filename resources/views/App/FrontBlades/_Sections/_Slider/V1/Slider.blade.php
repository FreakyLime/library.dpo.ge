
<div class="slider-container light rev_slider_wrapper">
    <div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 550, 'disableProgressBar': 'on'}">
        <ul>
            @foreach($MainSlider as $slider)
            <li data-transition="fade">
                <img src="{{ asset('public/'.$slider->image) }}"
                     alt=""
                     data-bgposition="center center"
                     data-bgfit="cover"
                     data-bgrepeat="no-repeat"
                     data-kenburns="on"
                     data-duration="9000"
                     data-ease="Linear.easeNone"
                     data-scalestart="150"
                     data-scaleend="100"
                     data-rotatestart="0"
                     data-rotateend="0"
                     data-offsetstart="0 0"
                     data-offsetend="0 0"
                     data-bgparallax="0"
                     class="rev-slidebg">

                <div class="tp-caption"
                     data-x="177"
                     data-y="280"
                     data-start="1000"
                     data-transform_in="x:[-300%];opacity:0;s:500;"><img src="{{ asset('public/Library/RevSlider/img') }}/slide-title-border-light.png" alt=""></div>



                <div class="tp-caption main-label bpg_caps fs-28"
                     data-x="135"
                     data-y="210"
                     data-start="1500"
                     data-whitespace="nowrap"
                     data-transform_in="y:[100%];s:500;"
                     data-transform_out="opacity:0;s:500;"
                     data-mask_in="x:0px;y:0px;">{{ $slider['title_'.$lang] }}</div>

                <div class="tp-caption top-label"
                     data-x="227"
                     data-y="270"
                     data-start="500"
                     data-transform_in="y:[-300%];opacity:0;s:500;">{!!  $slider['short_text_'.$lang]  !!}</div>


            </li>
            @endforeach
        </ul>
    </div>
</div>