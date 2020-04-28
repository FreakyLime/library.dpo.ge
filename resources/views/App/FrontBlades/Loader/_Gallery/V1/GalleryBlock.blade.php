@if(!$Images->isEmpty())
    <section class="padding-top4 padding-bottom7">
        <div class="row nopadding">
            <div class="container">

                <div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic">

                    @foreach($Images as $images)
                        <div class="cbp-item webdesign graphic ">
                            <a href="{{ asset('public/'.$images->image) }}" class="cbp-caption cbp-lightbox bpg_caps"
                               data-title="{{ $images['title_'.$lang] }}">
                                <div class="cbp-caption-defaultWrap">
                                    <img src="{{ asset('public/'.$images->tumb) }}" alt="" />
                                </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title bpg_caps">{{ $images['title_'.$lang] }}</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
    </section>

@endif