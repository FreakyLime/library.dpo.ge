<section id="clients">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel">
                    @foreach($Banner as $item)
                        <div class="item">
                            <div class="client-img-holder">
                                <a href="{{ $item->url }}" target="{{ $item->target }}">
                                    <img src="{{ asset('public/'.$item->image) }}" alt="{{ $item['title_'.$lang] }}" >
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>