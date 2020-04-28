@extends('Admin._masterPage')

@section('content')

    <div class="caption">
        <span class="caption-subject font-green-sharp sbold">
            <h1 class="page-title bpg_caps"><i class="icon-bubble font-green-sharp"></i> გთხოვთ აირჩიოთ ინფორმაციის ტიპი</h1>
        </span>
    </div>

    {{--MODULE SELECTOR Loop--}}
    @include('Admin._ModuleManager._Blocks.ModulesListBig')
    {{--MODULE SELECTOR Loop--}}

@stop