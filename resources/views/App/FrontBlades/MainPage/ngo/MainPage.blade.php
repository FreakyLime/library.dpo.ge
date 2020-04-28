@extends('App.FrontBlades.Masterpage.'.$TS['master_page'].'.MasterPage')

@section('content')

{{--სლაიდერის სექციის შემოტანა--}}
@include('App.FrontBlades._Sections._Slider.'.$TS['slider'].'.Slider')
{{--სლაიდერის სექციის შემოტანა--}}

<div class="main-content margin-top-bottom-cp">
    <div class="page_content">
        <div class="container">
            <div class="row">

                <div id="block_content_first" class="col-md-12">
                    <div class="container-res">
                        <div class="row">
                            <div class="">
                                <div id="post-14" class="post-14 page type-page status-publish hentry">
                                    <div class="entry-content-cp">
                                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1487055326212">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner ">
                                                    <section class="welcome-section">
                                                        <div class="container">
                                                            <div class="row">
                                                                {{--სერვისების ბლოკის შემოტანა <include>--}}
                                                                @include('App.FrontBlades.MainPage._MainBlocks.'.$TS['main_blocks'].'._Services.Services')
                                                                {{--სერვისების ბლოკის შემოტანა <include>--}}
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row-full-width vc_clearfix"></div>

                                    {{--კამპანიის ბლოკის შემოტანა <include>--}}
                                    {{--@include('App.FrontBlades.MainPage._MainBlocks.'.$TS['main_blocks'].'._Campaigns.Campaigns')--}}
                                    {{--კამპანიის ბლოკის შემოტანა <include>--}}

                                    <div class="vc_row-full-width vc_clearfix"></div>

                                    {{--გამოხმაურების ბლოკის შემოტანა <include>--}}
                                    @include('App.FrontBlades.MainPage._MainBlocks.'.$TS['main_blocks'].'._Reply.Reply')
                                    {{--გამოხმაურების ბლოკის შემოტანა <include>--}}

                                    {{--პარტნიორების ბლოკის შემოტანა <include>--}}
                                    @include('App.FrontBlades.MainPage._MainBlocks.'.$TS['main_blocks'].'._Partners.Partners')
                                    {{--პარტნიორების ბლოკის შემოტანა <include>--}}

                                </div><!-- .entry-content -->
                            </div><!-- #post-## -->

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@stop