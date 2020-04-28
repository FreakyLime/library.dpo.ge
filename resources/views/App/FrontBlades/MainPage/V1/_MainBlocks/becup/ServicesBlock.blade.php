<section id="practice-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="title-style">
                    <div class="section-title-style">
                        <h1><span>{{ trans('translate.service_sat') }}</span></h1>
                    </div>
                </div><!-- title -->
            </div><!-- col -->
        </div>

        <div class="row">

            @foreach($Services as $item)
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="single-prac-area">
                    <div class="single-featured-icon">
                        <a href="{{ asset($item->url) }}">
                            <img src="{{ asset('public/'.$item->tumb) }}" alt="{{ $item['title_'.$lang] }}"  width="75" height="75">
                        </a>
                    </div>
                    <div class="single-featured-text">
                        <a href="{{ asset($item->url) }}">
                            <h5 class="bpg_caps trim1">{{ $item['title_'.$lang] }}</h5>
                        </a>
                        <p class="bpg_arial trim2">{{ $item['short_text_'.$lang] }}</p>
                    </div>
                </div><!-- single-prac-area -->
            </div><!-- col -->
            @endforeach

        </div>

        <!-- row -->
    </div>
</section>