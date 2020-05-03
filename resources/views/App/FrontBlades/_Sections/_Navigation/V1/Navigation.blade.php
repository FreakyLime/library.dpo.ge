<section class="logo-row">
    <div class="container">
        <div class="holder"><strong class="logo">
                <a href="{{ asset('') }}">
                    <img width="230" height="99" src="{{ asset('public/Theme/content/themes/theneeds/images/logo.png') }}"
                         alt="">
                </a>


            </strong>
            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div id="navbar" class="collapse navbar-collapse">
                    <div id="default-menu" class="header-menu">
                        <ul id="nav" class="navbar-nav">
                            {{--Dinamic Menu Content--}}
                            @foreach($Menu as $menu)

                                @if($menu->id == 1 )
                                    <li>
                                        <a href="{{ asset('') }}" target="{{ $menu['target'] }}" class="bpg_caps fbold fs16 menu-item "><span> {{ $menu['title_'.$lang] }} </span></a>
                                    </li>
                                @elseif($menu->controller)
                                    <li>
                                        <a href="{{ asset($menu->controller) }}" target="{{ $menu['target'] }}" class="bpg_caps fbold fs16 menu-item "><span> {{ $menu['title_'.$lang] }} </span></a>
                                    </li>
                                @elseif($menu->level == 0)
                                    <li>
                                        <a href="{{ asset('menu/'.$menu->id) }}" target="{{ $menu['target'] }}" class="bpg_caps fbold fs16 menu-item "><span> {{ $menu['title_'.$lang] }} </span></a>
                                    </li>
                                @elseif($menu->level == 1)
                                    <li> <a href="#" class="bpg_caps fbold fs16 menu-item">{{ $menu['title_'.$lang] }}</a> <span class="arrow"></span>
                                        <ul  class="sub-menu">
                                            @foreach($menu->submenu as $submenu)
                                                @if($submenu->controller)
                                                    <li>
                                                        <a href="{{ asset($submenu->controller) }}" target="{{ $submenu['target'] }}" class="bpg_caps fbold fs16 menu-item ">
                                                            <span> {{ $submenu['title_'.$lang] }} </span>
                                                        </a>
                                                    </li>
                                                @else
                                                    <li>
                                                        <a href="{{ asset('menu/'.$submenu->id) }}" target="{{ $submenu['target'] }}"  class="bpg_caps fbold fs16 menu-item">
                                                            {{ $submenu['title_'.$lang] }}
                                                        </a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                @endif

                            @endforeach
                            {{--Dinamic Menu Content--}}
                        </ul>
                    </div>
                </div>
            </nav>
            {{--<div class="search-box">
                <div class="dropdown">
                    <button class="dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="true">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <form method="get" action="">
                                <input name="s" type="text" value="" placeholder="Enter Your Search" required>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <a href="{{ asset('campaigns') }}" class="btn-donate"><i class="fa fa-money" aria-hidden="true"></i>{{ trans('trans.donate') }}</a></div>--}}
    </div>
</section>