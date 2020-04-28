@foreach($menu->childs as $menu)
    <li>
        <a href="{{ asset('menu/'.$menu->id) }}">{!! $menu->title_ge !!}</a>
        @include('Web._Sections._Navigation._Blocks.Menu')
    </li>
@endforeach
