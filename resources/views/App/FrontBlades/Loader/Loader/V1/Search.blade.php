@extends('App.FrontBlades.Masterpage.'.$TS['master_page'].'.MasterPage')

@section('content')

<!--Start Title-->
<div id="inner-banner" style="background:#000 url('{{ asset('public/'.$Settings['page_bg']['image']) }}') no-repeat center center/cover;">
    <div class="container">
        <h1 class="bpg_caps">ძიების შედეგები</h1>
        <center>
            <div class="input-group" style="width:40vw; margin-top:-10px;">
                <input type="text" class="searchForm form-control" placeholder="{{ trans('web.search') }}">
                <span class="input-group-btn">
                    <button class="searchForm btn btn-default" type="button"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </center>
    </div>
</div>
<!--End Title-->

@include('App.FrontBlades.Loader._News.'.$TS['news_page'].'.Search')

@stop