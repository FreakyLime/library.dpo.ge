<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">

                <section class="team-style-1">
                    <div class="container">
                        <div class="heading-style-1">
                            <h2 class="bpg_caps fs36">{{ trans('web.events') }}</h2>

                        </div>
                        <div class="row">

                            @foreach($MainTeams as $item)
                            <div class="col-md-4 col-sm-4">
                                <div class="box">
                                    <div class="team-social-box-1">
                                        <ul>
                                            <li>
                                                <a href="{{ $item['facebook'] }}" target="_blank">
                                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ $item['googleplus'] }}" target="_blank">
                                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ $item['twitter'] }}" target="_blank">
                                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>&nbsp;</li>
                                            <li>&nbsp;</li>
                                            <li>&nbsp;</li>
                                            <li>&nbsp;</li>
                                            <li>&nbsp;</li>

                                        </ul>
                                    </div>
                                    <div class="thumb">
                                        <a href="{{ asset('teams/view/'.$item->id) }}">
                                            <img width="285" height="343"
                                                src="{{ asset('public/'.$item->image) }}"
                                                class="teams_tumb attachment-285x345 size-285x345 wp-post-image"
                                                alt=" {{ $item['title_'.$lang] }}" />
                                        </a>
                                    </div>
                                    <div class="text-box">
                                        <h4>
                                            <a href="{{ asset('teams/view/'.$item->id) }}" class="bpg_caps">
                                                {{ $item['title_'.$lang] }}
                                            </a>
                                        </h4>
                                        <em class="disp bpg_caps">{{ $item['short_text_'.$lang] }} </em>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>