<!DOCTYPE html>
<html lang="en">
<head>
    {{--მეტა თეგები--}}
    @include('App.FrontBlades._Sections._MetaTags.MetaTags')

    {{--თემფლეიტის სკრიპტები--}}
    @include('App.FrontBlades._Sections._Scripts._Theme.'.$TS['scripts_head'].'.Head')

    <!-- დამატებითი გასტილვები -->
    @include('App.FrontBlades._Sections._Scripts._Addons.css')

    <!-- ვიდეოს და სლალერიის სკრიპტი -->
    @include('App.FrontBlades._Sections._Scripts._Special._lightgallery.css')

</head>

<body>
<div class="site-wrapper">
    {{--საიტის ჰეადერი--}}
    @include('App.FrontBlades._Sections._Header.'.$TS['sections_header'].'.Header')

    <div class="clearfix"></div>

    {{--ნავიგაცია (მთავარი მენიუ)--}}
    @include('App.FrontBlades._Sections._Navigation.'.$TS['navigation'].'.Navigation')

    <div class="clearfix"></div>

    {{--საიტის ძირითადი კონტენტი--}}
    @yield('content')

    <div class="clearfix"></div>

    {{--საიტის დაბოლოება ფუტერი--}}
    @include('App.FrontBlades._Sections._Footer.'.$TS['sections_footer'].'.Footer')

</div>
{{--თემფლეიტის სკრიპტები--}}
@include('App.FrontBlades._Sections._Scripts._Theme.'.$TS['scripts_footer'].'.Footer')

<!-- ვიდეოს და სლალერიის სკრიპტი -->
@include('App.FrontBlades._Sections._Scripts._Special._lightgallery.cripts')

</body>
</html>
