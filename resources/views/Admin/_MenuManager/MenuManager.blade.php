@extends('Admin._masterPage')

@section('content')

    <script src="{{ asset('public/Metronic/global/plugins/jquery.min.js')}}" type="text/javascript"></script>

    <textarea id="nestable_list_1_output" class="form-control col-md-12 margin-bottom-10"></textarea>

    <div class="row">
        <div class="col-md-12">
            <div class="portlet-body ">
                <div class="dd" id="nestable_list_1">
                    <ol class="dd-list">
                        @foreach($AdminNavigation as $menu)
                            <li class="dd-item dd3-item" data-id="{{ $menu->id }}">
                                <div class="dd-handle dd3-handle"></div>
                                <input type="hidden" name="menu_id" value="{{ $menu->id }}">
                                <input type="hidden" name="root_id" value="{{ $menu->root_id }}">
                                <div class="dd-handle"> {!! $menu->title_ge !!} </div>
                                @include('Admin._MenuManager._Blocks.Menu')
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <p></p>

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <button class="btn blue btn-block" id="save">Reorder</button>

    <p></p>
    <p></p>
    <p></p>
    <p></p>



    <script type="text/javascript">
        $('.dd').nestable().on('change', function() {
            alert(88888);
            // want to know the clicked element?
            // => check out: `e.target` and/or `e.currentTarget`
            // the call will bubble up to the root element (and all elements in between) if you don't stop propagation
        });

    </script>



@stop