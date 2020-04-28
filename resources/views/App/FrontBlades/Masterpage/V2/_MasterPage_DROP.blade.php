<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<!-- Mirrored from shop.azelab.com/home-3-bookstore.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 25 Mar 2017 14:54:45 GMT -->
<head>
    <meta charset="utf-8">
    <title>Ar</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <!-- Theme Script -->
    @include('Web._Sections._Scripts._Theme.head')

    <!-- My Addons -->
    @include('Web._Sections._Scripts._Addons.css')

</head>
<body class="home-v3 home-v5">
<header>

    <!-- top bar begin -->
    <div id="top-bar">
        <div class="container">
            <div class="pull-left left-top-bar">
                <div id="top-contacts">
                    <ul class="list-inline">
                        <li class="hidden-xs" style="margin-left: 0px !important; padding-left: 0px !important;">
                            <i class="icon-call-in"></i>
                            <span>{{ trans('web.top_phone') }}</span>
                        </li>
                        <li class="hidden-xs">
                            <a href="your%40email.html">
                                <i class="icon-envelope"></i>
                                <span class="hidden-xs">{{ trans('web.top_email') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="pull-right">
                <div id="user-top-bar">
                    <ul class="list-inline hidden-xs">
                        @if($Settings['lang']['title_ge'] == 1)
                            <li><a href="{{ asset('ge') }}"><img src="{{ asset('public/files/flags/ge.png') }}" width="25"></a></li>
                        @endif
                        @if($Settings['lang']['title_en'] == 1)
                            <li><a href="{{ asset('en') }}"><img src="{{ asset('public/files/flags/en.png') }}" width="25"> </a></li>
                        @endif
                        @if($Settings['lang']['title_ru'] == 1)
                            <li><a href="{{ asset('ru') }}"><img src="{{ asset('public/files/flags/ru.png') }}" width="25"></a></li>
                        @endif
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- top bar end -->
    <!-- header bar begin -->
    <div id="header-bar">
        <div class="container">
            <div class="row">
                <div id="header-logo" class="col-md-6 col-sm-12">
                    <a href="{{ asset('') }}">
                        <img src="{{ asset('public/Theme') }}/images/logo.svg" class="logo hidden-xs" alt="">
                    </a>
                </div>
                <div class="col-md-3 top-search-box hidden-sm hidden-xs">
                    <form action="" method="post">
                        <div class="required form-group">
                            <input type="text" name="search_query" placeholder="Search" class="placeholder-fix top-search" autocomplete="off">
                            <button><i class="icon_search field-icon"></i></button>
                        </div>
                    </form>
                </div>
                {{--კალათა--}}
                <div class="col-md-3 hidden-sm hidden-xs">
                    <div id="shopping-cart-wrapper" class="dropdown">
                        <a href="{{ asset('cart/') }}" class="shp-ca">
                            <div class="s-bag-1">
                                <i class="icon-bag"></i>
                            </div>
                            <div class="s-cart-pan">
                                <div class="s-bag-2">
                                    <span class="dd-products-count bpg_caps">{{ Cart::count() }} </span>  <span class="bpg_caps"> {{ trans('web.nivti') }} / </span> <span class="active dd-products-price">{{ Cart::subtotal() }} Gel</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                {{--კალათა--}}
            </div>
        </div>
    </div>
    <!-- header bar end -->
    <!-- main menu begin -->
    <div class="top-menu">
        <div class="container">
            <nav class="main-menu">
                <ul class="nav-menu">
                    {{--Navigation--}}
                    @include('Web._Sections._Navigation.Navigation')
                    {{--Navigation--}}
                </ul>
            </nav>
        </div>
    </div>
    <!-- main menu end -->
    <!-- mobile menu begin -->
    <div class="mobile-menu">
        <nav>
            <div class="mobile-menu-button">
                MENU
                <a href="#" class="mobile-menu-toggler"><span></span><span></span><span></span></a>
            </div>
            <div class="mobile-menu-body">
                <div class="mobile-menu-search clearfix">
                    <form action="http://shop.azelab.com/">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default"><i class="icon-magnifier"></i></button>
                    </form>
                </div>
                <ul>
                    <li><a href="#"><i class="icon-home"></i> Home</a></li>
                    <li>
                        <a href="#"><i class="icon-user"></i> Men</a>
                        <a class="submenu-toggler" href="#"><i class="arrow_carrot-down"></i></a>
                        <ul>
                            <li><a href="#"><span>Shirts</span></a></li>
                            <li><a href="#"><span>Jumper & Cardigans</span></a></li>
                            <li><a href="#"><span>Autumn Jackets</span></a></li>
                            <li><a href="#"><span>Winter Jackets</span></a></li>
                            <li><a href="#"><span>Leather Jackets</span></a></li>
                            <li><a href="#"><span>Jeans</span></a></li>
                            <li><a href="#"><span>Shoes</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-user-female"></i> Women</a>
                        <a class="submenu-toggler" href="#"><i class="arrow_carrot-down"></i></a>
                        <ul>
                            <li><a href="#"><span>Shirts</span></a></li>
                            <li><a href="#"><span>Jumper & Cardigans</span></a></li>
                            <li><a href="#"><span>Autumn Jackets</span></a></li>
                            <li><a href="#"><span>Winter Jackets</span></a></li>
                            <li><a href="#"><span>Leather Jackets</span></a></li>
                            <li><a href="#"><span>Jeans</span></a></li>
                            <li><a href="#"><span>Shoes</span></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icon-screen-desktop"></i> Electronics</a>
                        <a class="submenu-toggler" href="#"><i class="arrow_carrot-down"></i></a>
                        <ul>
                            <li><a href="#"><span>Shirts</span></a></li>
                            <li><a href="#"><span>Jumper & Cardigans</span></a></li>
                            <li><a href="#"><span>Autumn Jackets</span></a></li>
                            <li><a href="#"><span>Winter Jackets</span></a></li>
                            <li><a href="#"><span>Leather Jackets</span></a></li>
                            <li><a href="#"><span>Jeans</span></a></li>
                            <li><a href="#"><span>Shoes</span></a></li>
                        </ul>
                    </li>
                </ul>
                <p><i class="icon-call-in"></i> + 1 (800) 2364 332 23 16</p>
                <p><i class="icon-envelope"></i>your@email.com</p>
            </div>
        </nav>
    </div>
    <!-- mobile menu end -->
    <!-- page header begin -->
    <!--
       <div class="pg-header">
          <div class="container">
             <div class="row">
                <div class="col-sm-6 title">
                   <h1>Home Page</h1>
                </div>
                <div class="col-sm-6 b-crumbs-block">
                   <div class="b-crumbs text-right"><a href="#">Home</a> <i class="arrow_carrot-right"></i> Basic Page</div>
                </div>
             </div>
          </div>
       </div>
    -->
    <!-- page header end -->

</header>

<!-- start Main Content -->
    @yield('content')
<!-- End Main Content -->


<!-- footer -->
@include('Web._Sections._Footer.Footer')
<!-- footer -->

<!-- Theme Script -->
@include('Web._Sections._Scripts._Theme.footer')

</body>

</html>