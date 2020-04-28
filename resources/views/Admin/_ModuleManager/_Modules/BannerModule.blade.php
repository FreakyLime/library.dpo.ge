@extends('Admin._masterPage')

@section('content')

    <div class="portlet">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-green-sharp sbold">
                    <h1 class="page-title bpg_caps"><i class="icon-bubble font-green-sharp"></i> ბანერის დამატება/რედაქტირება</h1>
                </span>
            </div>
            <div class="actions">
                <div class="btn-group open">
                    <a href="{{ asset($lang) }}/admin/banner_module/create_banner/{{ $menu_id }}" class="btn btn-lg purple bpg_caps f18">
                        <i class="fa fa-file-photo-o"></i>  ახალი ბანერის დამატება
                    </a>
                </div>
            </div>
        </div>
    </div>


    {{--MODULE SELECTOR--}}
    <div class="portlet box blue-steel">
        <div class="portlet-title">
            <div class="caption bpg_caps f18 lheight20">
                <i class="fa fa-cogs"></i>დამატებული ბანერები
                </div>
            <div class="tools">
                <a href="javascript:;" class="collapse"> </a>
                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                <a href="javascript:;" class="reload"> </a>
                <a href="javascript:;" class="remove"> </a>
            </div>
        </div>
        <div class="portlet-body">
            <div class="table-responsive">
                <table class="table bpg_caps">
                    <thead>
                    <tr>
                        <th> # </th>
                        <th> სურათი </th>
                        <th> ბანერის სათაური </th>
                        <th> ბანერის სურათები </th>
                        <th> შექმნის დრო </th>
                        <th> რედაქტირების დრო </th>
                        <th> რედაქტირება/წაშლა </th>
                    </tr>
                    </thead>
                    <tbody>
                    <? $i = 1;?>
                    @foreach($GetBanner as $Banner)
                        <tr>
                            <td class="table_verticac_center f18 fbold"> <?=$i; $i++?> </td>
                            <td> <img src="{{ asset('public/'.$Banner->image) }}" width="120"> </td>
                            <td class="table_verticac_center" width="40%" class="fbold">  {{$Banner['title_'.$lang]}} </td>
                            <td class="table_verticac_center">
                                <a href="{{ asset($lang) }}/admin/banner_module/edit_banner/{{ $Banner->id }}#images" class="btn blue"><i class="fa fa-file-photo-o"></i>  სურათების დამატება </a>
                            </td>
                            <td class="table_verticac_center"> {{ $Banner->created_at }} </td>
                            <td class="table_verticac_center"> {{ $Banner->updated_at }} </td>
                            <td class="table_verticac_center">
                                <a href="{{ asset($lang) }}/admin/banner_module/edit_banner/{{ $Banner->id }}" class="btn blue"><i class="fa fa-pencil"></i>  რედაქტირება </a>
                                <a href="{{ asset($lang) }}/admin/banner_module/delete_banner/{{ $Banner->id }}" class="btn red">
                                    <i class="fa fa-remove"></i> წაშლა
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{--MODULE SELECTOR--}}

    {{--MODULE SELECTOR Loop--}}
    {{--@include('Admin._ModuleManager._Blocks.ModulesList')--}}
    {{--MODULE SELECTOR Loop--}}


@stop