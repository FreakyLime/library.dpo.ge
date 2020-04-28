<div class="demo-gallery">
    <ul id="hash1" class="list-unstyled row">
        @foreach($Images as $images)
            <li class="col-lg-4 col-md-12" style="padding-right: 0px !important;" data-src="{{ asset('public/'.$images->image) }}" data-sub-html="<h4>{{ $images['title_'.$lang] }}</h4>">
                <a href="">
                    <img src="{{ asset('public/'.$images->image) }}" alt="{{ $images['title_'.$lang] }}" class="web_more_loop_cover img-responsive">
                </a>
            </li>
        @endforeach
    </ul>
</div>
