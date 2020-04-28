<section>
    <div class="block">
        <div class="container">
            <div class="row">
                <div class="col-md-12 column">
                    <div class="title"><h2 class="bpg_caps fbold">ფასდაკლება</h2></div>
                    <div class="featured-products">
                        <div class="row">
                            @foreach($MainSales as $item)
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
                                        <div class="price"><ins class="fgreen fbold fs22">{{ $item->sale_price }} ₾ </ins><del>{{ $item->price }} ₾</del></div>
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