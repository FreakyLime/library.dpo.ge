@extends('_MasterPage')

@section('content')
    <div class="pagetop " style="background-image: url('{{ asset('public/Theme') }}/images/resource/pagetop.jpg')">
        <div class="pagetop-text">
            <div class="container">
                <h2 class="fwhite mr-0 bpg_caps">{{ $CurrentMenu['title_'.$lang] }}</h2>
            </div>
        </div>
    </div><!-- Pagetop -->

    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 column">
                        <div class="featured-products">
                            <div class="row">
                                @foreach($PageSales as $item)
                                    <div class="col-md-3">
                                        <div class="toshia-product">
                                            <div class="toshia-product-img">
                                                <img src="{{ asset('public/'.$item->image) }}" alt="" class="web_sale_loop_cover" />
                                                <div class="product-btns">
                                                    <a href="{{ asset('sale/item/'.$item->id) }}" title="" class="bpg_caps"> დაწვრილებით </a>
                                                </div>
                                            </div>
                                            <div class="product-name">
                                                <h4 class="trim1"><a href="{{ asset('sale/item/'.$item->id) }}" title="" class="bpg_caps">{{ $item['title_'.$lang] }}</a></h4>
                                                <div class="price">
                                                    @if ($item->sale_price > 0)
                                                        <ins class="fgreen fbold fs22">{{ $item->sale_price }} ₾ </ins>
                                                        <del class="f18">{{ $item->price }} ₾</del>
                                                    @else
                                                        <ins class="fgreen fbold fs22">{{ $item->price }} ₾ </ins>
                                                    @endif
                                                </div>
                                            </div>
                                        </div><!-- Toshia Product -->
                                    </div>
                                @endforeach
                            </div>
                        </div><!-- Featured Products -->
                    </div>
                </div>
            </div>
        </div>
    </section>



@stop