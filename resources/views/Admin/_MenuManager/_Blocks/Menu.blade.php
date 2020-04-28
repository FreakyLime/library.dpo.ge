<ol class="dd-list">
    @foreach($menu->childs as $menu)
        <li class="dd-item" data-id="{!! $menu->id !!} ">
            <div class="dd-handle dd3-handle"> </div>
            <input type="hidden" name="menu_id" value="{{ $menu->id }}">
            <input type="hidden" name="root_id" value="{{ $menu->root_id }}">
            <div class="dd-handle child_items"> {!! $menu->title_ge !!}</div>

            @include('Admin._MenuManager._Blocks.Menu')
        </li>
    @endforeach
</ol>
