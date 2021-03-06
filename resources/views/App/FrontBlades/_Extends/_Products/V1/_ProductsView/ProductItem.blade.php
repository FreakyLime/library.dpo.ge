@extends('_MasterPage')

@section('content')

    <div class="pagetop " style="background-image: url('{{ asset('public/Theme') }}/images/resource/pagetop.jpg')">
        <div class="pagetop-text">
            <div class="container">
                <h2 class="fwhite mr-0 bpg_caps">{{ $ProductItem['title_'.$lang] }}</h2>
            </div>
        </div>
    </div><!-- Pagetop -->


    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-detail-page">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="">
                                        <img src="{{ asset('public/'.$ProductItem->image) }}" alt="{{ $ProductItem['title_'.$lang] }}" class="web_products_cover"/>
                                    </div><!-- Product Gallery -->
                                </div>

                                <div class="col-md-6">
                                    <h2 class="product-title fs30">{{ $ProductItem['title_'.$lang] }}</h2>
                                    @if ($ProductItem->sale_price > 0)
                                        <span class="price"><ins class="fs50">{{ $ProductItem->sale_price }} ₾</ins></span>
                                    <div class="clearfix"></div>
                                        <del class="f28">{{ $ProductItem->price }} ₾</del>
                                    @else
                                        <span class="price"><ins class="fs50">{{ $ProductItem->price }} ₾</ins></span>
                                    @endif



                                    <p>{!! $ProductItem['full_text_'.$lang] !!} </p>

                                    <div class="product-detail-exts">
                                        {{--<div class="share-with">
                                            <span>Share With</span>
                                            <a href="#" title=""><i class="fa fa-facebook"></i></a>
                                            <a href="#" title=""><i class="fa fa-twitter"></i></a>
                                            <a href="#" title=""><i class="fa fa-dribbble"></i></a>
                                            <a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                        </div>--}}
                                    </div><!-- Product Detail Extras -->
                                </div>
                                <div class="col-md-12">
                                    @include('Web._Special._Products._ProductsView.LikeProducts')
                                </div>
                            </div>
                        </div><!-- Product Detail Page -->
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop