<div class="vc_row wpb_row vc_row-fluid">

    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">

                <section class="newsletter-row sponsors-row">
                    <div class="element_wrap">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sponsors-box-images">
                                    <div class="heading-style-1">
                                        <h2 class="bpg_caps fs36">{{ trans('web.banners_text') }}</h2>

                                    </div>
                                    <ul>
                                        @foreach($MainBanner as $item)
                                            <li>
                                                <a href="{{ $item['url'] }}" target="_blank" class="">
                                                    <img src="{{ asset('public/'.$item->image) }}" alt="{{ $item['title_'.$lang] }}" class="padding_all_5 contain-img img-sizes">
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>