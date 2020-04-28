<?php 
if (isset($MainVideos[0])){
    $video1 = $MainVideos[0]['video_url'] ;
    preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $video1, $matches1);
    $video1_id = $matches1[1];
} else $MainVideos[0] = ['image'=> '', 'title_ge'=>'','title_en'=>'','short_text_ge'=>'','short_text_en'=>''];

if (isset($MainVideos[1])){
    $video2 = $MainVideos[1]['video_url'] ;
    preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $video2, $matches2);
    $video1_id = $matches2[1];
} else $MainVideos[1] = ['image'=> '', 'title_ge'=>'','title_en'=>'','short_text_ge'=>'','short_text_en'=>''];

if (isset($MainVideos[2])){
    $video3 = $MainVideos[2]['video_url'] ;
    preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $video3, $matches3);
    $video1_id = $matches3[1];
} else $MainVideos[2] = ['image'=> '', 'title_ge'=>'','title_en'=>'','short_text_ge'=>'','short_text_en'=>''];
?>

<div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">

                <section class="recent-project-video">
                    <div class="holder" style="background: url({{ asset('public/'.$MainVideos[0]['image']) }}) no-repeat left top;">
                        <div class="video-box">
                            <a href="#" class="btn-play" data-toggle="modal" data-target="#myModal"></a>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $video1_id }}" frameborder="0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-col">
                            <div class="heading-style-1">
                                <span class="title bpg_caps fs24">{{ $MainVideos[0]['title_'.$lang] }}</span>
                                <h2 class="bpg_caps fs16">{{ $MainVideos[0]['short_text_'.$lang] }}</h2>
                            </div>
                            <ul>
                                @if($MainVideos[1])
                                <li>
                                    <div class="videos_small">
                                        <a href="{{ asset('menu/80') }}">
                                            <img src="{{ asset('public/'.$MainVideos[1]['image']) }}" class="mainvideo_tumbs">
                                        </a>
                                    </div>
                                    <div class="box">
                                        <h4 class="bpg_caps">{{ $MainVideos[1]['title_'.$lang] }}</h4>
                                        <p class="bpg_caps">{{ $MainVideos[1]['short_text_'.$lang] }}</p>
                                    </div>
                                </li>
                                @endif
                                @if($MainVideos[2])
                                <li>
                                    <div class="videos_small">
                                        <a href="{{ asset('menu/80') }}">
                                            <img src="{{ asset('public/'.$MainVideos[2]['image']) }}" class="mainvideo_tumbs">
                                        </a>
                                    </div>
                                    <div class="box">
                                        <h4 class="bpg_caps">{{ $MainVideos[2]['title_'.$lang] }}</h4>
                                        <p class="bpg_caps">{{ $MainVideos[2]['short_text_'.$lang] }}</p>
                                    </div>
                                </li>
                                @endif

                            </ul>
                            <a href="{{ asset('menu/80') }}" class="btn-style-1">
                               {{ trans('web.More_Videos') }}
                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>