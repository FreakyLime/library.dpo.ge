<section>
    <div class="block remove-gap">
        <div class="container">
            <div class="row">

                @foreach($Banner as $item)
                    <div class="col-md-4 column">
                        <div class="add">
                            <a href="{{ $item->url }}" target="{{ $item->target }}">
                                <img src="{{ asset('public/'.$item->image) }}" />
                            </a>
                        </div><!-- Add -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>