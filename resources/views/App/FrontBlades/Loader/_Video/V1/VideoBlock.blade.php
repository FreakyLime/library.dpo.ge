@if(!$Videos->isEmpty())
    <section class="padding-top4 padding-bottom7">
        <div class="row nopadding">
            <div class="container" style="padding-bottom: 65px">
                <div class="less5" id="hash2">

                    @foreach($Videos as $video)
                        <div class="video col-md-4 img-hover-text12 sty2 text-center transp_bg  padding1" data-src="{{ $video->video_url }}" data-poster="{{ asset('public/'.$video->image) }}" data-sub-html="<h3 class='bpg_caps'>{{ $video['title_'.$lang] }}</h4>">
                            <a href="">
                                <img class="web_gallery_loop_cover img-responsive respoimg my_shadow" src="{{ asset('public/'.$video->image) }}">
                            </a>

                            <div class="box-shadow1 hover-shadow-color min_video_title bpg_caps f20 pd-15 f-black-f-white">
                                {{ $video['title_'.$lang] }}
                            </div>
                            <div class="distext sty2" style="cursor:pointer; background-image: url('http://sachinchoolur.github.io/lightGallery/static/img/play-button.png'); background-position: center center; background-repeat: no-repeat;">

                                <div class="hidtext">

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endif