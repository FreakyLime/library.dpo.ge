@extends('App.FrontBlades.Masterpage.'.$TS['master_page'].'.MasterPage')

@section('content')

    <!--Start Title-->
    <section class="bg-color3  gray1 padding-top-bottom">
        <div class="container">
            <div class="row nopadding">
                <h2 class="caps font-weight8 margin-bottom1 bpg_caps">{{ $Album['title_'.$lang] }}</h2>
            </div>
        </div>
    </section>
    <!--End Title-->



    <section class="padding-top-bottom">
        <div class="container">
            <div class="row nopadding">

                <div class="col-md-9">

                    <div class="col-md-12">
                        <div class="box-shadow3 padding4 bg-color-white">
                            <p class="bfont text-left bpg_caps fbold">{{ trans('translate.date') }} : <span> {{ $Album->created_at->toFormattedDateString() }}</span></p>
                            <img src="{{ asset('public/'.$Album->image) }}" alt="{{ $Album['title_'.$lang] }}" class="respoimg margin-bottom3 web_news_full_cover">
                            <p class="bfont text-left bpg_caps">{!! $Album['full_text_'.$lang] !!}</p>
                        </div>
                        {{--დამატებითი სურათების შემოტანა--}}
                        @include('App.FrontBlades.Details._MoreImages.'.$TS['more_images_view'].'.MoreImages')
                        {{--დამატებითი სურათების შემოტანა--}}
                    </div><!-- end col -->

                </div><!-- end col -->

                <!-- Right side bar -->
                <div class="col-md-3">
                    <div class="border-top3 bg-color2 padding2 pd-b-5">
                        <h3 class="roboto small caps font-weight7 ">{{ trans('translate.right_album_title') }}</h3>
                    </div>
                    <div class="padding2 box-shadow3">
                        {{--მსგავსი სიახლეების შემოტანა--}}
                        @foreach($LikeAlbum as $item)
                            <div class=" pd-b-20">
                                <a href="{{ asset('album/'.$item->id) }}">
                                    <p class="text-left bpg_caps fs18">{!! $item['title_'.$lang] !!}</p>
                                    <p class="text-left bpg_caps fbold">{{ trans('translate.date') }} : <span> {{ $item->created_at->toFormattedDateString() }}</span></p>
                                    <img src="{{ asset('public/'.$item->image) }}" alt="{{ $item['title_'.$lang] }}" class="respoimg mr-b-4 web_news_tumb_cover">
                                </a>
                            </div>
                        @endforeach
                        {{--მსგავსი სიახლეების შემოტანა--}}



                    </div>
                </div><!-- end col -->

            </div>
        </div>
    </section>

@stop