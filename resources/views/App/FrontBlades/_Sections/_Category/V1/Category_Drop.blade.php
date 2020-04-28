<nav>
    <ul>
        @foreach($Category as $category)

            @if($category->controller)
                <li><a href="{{ asset($category->controller) }}" class="bpg_caps f16">{{ $category['title_'.$lang] }}</a></li>
            @elseif($category->id == 1)
                <li><a href="{{ asset('') }}" class="bpg_caps f16">{{ $category['title_'.$lang] }}</a></li>
            @elseif($category->level == 0)
                <li><a href="{{ asset('products/'.$category->id) }}" class="bpg_caps f16">{{ $category['title_'.$lang] }}</a></li>
            @elseif($category->level == 1)
                <li>
                    <a href="#" class="bpg_caps f16"> {{ $category['title_'.$lang] }} </a>
                    <ul>
                        @foreach($category->submenu as $subcategory)
                            <li><a href="{{ asset('products/'.$subcategory->id) }}" class="bpg_caps f16">{{ $subcategory['title_'.$lang] }}</a></li>
                        @endforeach
                    </ul>
                </li>
            @endif

        @endforeach
    </ul>
</nav>