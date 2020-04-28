<section id="testimonials">
    <div class="container">
        <div class="row">

            @foreach($Reply as $item)
            <div class="col-md-4 col-sm-12">
                <div class="text-box clearfix">
                    <div class="quote-icon">
                        <img src="{{ asset('public/Theme') }}/img/icons/quote.png">
                    </div>
                    <p class="min_height145 trim5">
                        {{ $item['full_text_'.$lang] }}
                    </p>
                    <p class="name">
                        <span class="bpg_caps fbold f22">{{ $item['title_'.$lang] }} </span> <br> {{ $item['short_text_'.$lang] }}
                    </p>
                </div><!-- text-box -->
                <div class="client-img">
                    <img src="{{ asset('public/'.$item->tumb) }}" alt="{{ $item['title_'.$lang] }}">
                </div>
            </div><!-- col -->
            @endforeach

        </div>
    </div>
</section>