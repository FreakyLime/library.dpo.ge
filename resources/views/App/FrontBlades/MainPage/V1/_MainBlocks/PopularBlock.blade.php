<section class="clearfix text-center store-alt-products">
    <div class="news-list">
        <div class="back-line"><h2 class="news-title bpg_caps fs22">{{ trans('web.motxovnadi') }}</h2></div>
        <div class="row relative">

            <div class="news-container clearfix">
                @foreach($MainProducts as $item)
                    <div class="col-md-2 col-sm-6 pl-item news-item pd-lr-0">
                        <figure>
                            <a {{--href="{{ asset('product/item/'.$item->id) }}"--}}>
                                <img src="{{ asset('public/'.$item->tumb) }}" alt="">
                            </a>
                            <figcaption>
                                <a href="{{ asset('cart/edit/'.$item->id) }}" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart">
                                    <i class="icon-bag"><span class="bpg_caps fs16 pd-l-10">{{ trans('web.kalatashi_damateba') }}</span> </i>
                                </a>
                            </figcaption>
                        </figure>
                        <div class="pl-caption">
                            <p class="bpg_caps fs16 fbold">{{ trans('web.kodi') }} : {{ $item['short_text_'.$lang] }}</p>
                            <p class="pl-price-block">
                                @if ($item->sale_price > 0)
                                    <span class="pl-price">{{ $item->sale_price }} <span class="gel">c</span>  </span>
                                    <span class="pl-price-old">{{ $item->price }} <span class="gel">c</span>  </span>
                                @else
                                    <span class="pl-price">{{ $item->price }} <span class="gel">c</span>  </span>
                                @endif
                            </p>
                            <p class="pl-name min_title bpg_caps">{{ $item['title_'.$lang] }}</p>
                        </div>
                    </div>
                @endforeach


            </div>
            {{--გვერდების მართვა--}}
            <?php echo $MainProducts->render(); ?>
            {{--გვერდების მართვა--}}

            {{--<div class="text-center clearfix">
                <button class="btn news-loadmore"><i class="icon-reload"></i>Load More</button>
            </div>--}}

            <div class="gap-60 clearfix"></div>

        </div> <!-- news-container -->
    </div> <!-- news-list -->
</section>