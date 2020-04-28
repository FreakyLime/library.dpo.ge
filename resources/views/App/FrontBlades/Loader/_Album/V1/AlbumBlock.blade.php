@if(!$Album->isEmpty())
    <section class="padding-bottom7 text-center">
        <div class="container">
            <div class="row">

                <div class="col-md-12 padding1">

                    @foreach($Album as $item)
                    <div class="col-md-4 padding1">
                        <div class="grid">
                            <a href="{{ asset('album/'.$item->id) }}">
                                <figure class="effect-milo">

                                        <img src="{{ asset('public/'.$item->image) }}" alt="{{ $item['title_'.$lang] }}" class="respoimg" />

                                    <figcaption>
                                        <h4 class="white caps font-weight8 bpg_caps">{{ $item['title_'.$lang] }}</h4>
                                        <p class="bpg_arial">{{ $item['short_text_'.$lang] }}</p>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div><!-- end col -->
                    @endforeach


                </div>

            </div>
        </div>
    </section>
@endif