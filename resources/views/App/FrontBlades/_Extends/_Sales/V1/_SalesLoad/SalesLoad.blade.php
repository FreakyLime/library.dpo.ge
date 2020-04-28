@extends('App.FrontBlades.Masterpage.'.$TS['master_page'].'.MasterPage')

@section('content')
    <div class="pg-body">
        <div class="container">{{--კონტენტის არეა--}}
            <div class="col-md-12">

                {{--პპროდუქცია კატეგორიის მიხედვით --}}
                <section class="clearfix text-center store-alt-products" style="padding-top: 50px">
                    <div class="news-list">
                        <div class="back-line"><h2 class="news-title bpg_caps fs22">{{ trans('web.products_title') }}</h2></div>
                        <div class="row relative">

                            <div class="news-container clearfix">
                                @foreach($PageSales as $item)
                                    <div class="col-md-2 col-sm-6 pl-item news-item pd-lr-0">
                                        <figure>
                                            <a {{--href="{{ asset('product/item/'.$item->id) }}"--}}>
                                                <img src="{{ asset('public/'.$item->image) }}" alt="">
                                            </a>
                                            <figcaption>
                                                <a href="{{ asset('cart/edit/'.$item->id) }}" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="top" title="Add To Cart">
                                                    <i class="icon-bag"><span class="bpg_caps fs16 pd-l-10">კალათაში დამატება</span> </i>
                                                </a>
                                            </figcaption>
                                        </figure>
                                        <div class="pl-caption">
                                            <p class="bpg_caps fs16 fbold">კოდი : 005</p>
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
                            <div class="gap-60 clearfix"></div>

                        </div> <!-- news-container -->
                    </div> <!-- news-list -->
                </section>
                {{--პპროდუქცია კატეგორიის მიხედვით --}}

            </div>
            {{--კონტენტის არეა--}}
        </div> <!-- container -->
    </div>





@stop