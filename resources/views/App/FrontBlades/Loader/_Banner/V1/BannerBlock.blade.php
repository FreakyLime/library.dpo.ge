@if(!$Banner->isEmpty())
<section id="practice-area-page-wrap" style="padding-top: 5px !important;">
    <div class="container">
        <div class="row">

            @foreach($Banner as $item)
            <div class="col-lg-3 col-sm-6">
                <div class="practice-area-col" style="margin-top: 30px;">
                    <div class="img-holder" style="padding: 20px; padding-bottom: 30px !important; display: inline-table; vertical-align: middle;">
                        <a href="{{ $item->url }}" target="{{ $item->target }}">
                            <img src="{{ asset('public/'.$item->image) }}" alt="{{ $item['title_'.$lang] }}" width="90%" >
                        </a>
                    </div>
                    <div class="content-col" style="background-color: #f1f1f1">
                        <a href="{{ $item->url }}" target="{{ $item->target }}">
                            <h3>{{ $item['title_'.$lang] }}</h3>
                        </a>
                    </div>
                </div>
            </div><!-- col -->
            @endforeach

        </div><!-- row -->
    </div>
</section>
@endif