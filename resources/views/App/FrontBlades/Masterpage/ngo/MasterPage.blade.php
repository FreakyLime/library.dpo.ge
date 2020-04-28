<!DOCTYPE html>
<html lang="en">

<head>
    {{--მეტა თეგები--}}
    @include('App.FrontBlades._Sections._MetaTags.MetaTags')

    {{--თემფლეიტის სკრიპტები--}}
    @include('App.FrontBlades._Sections._Scripts._Theme.'.$TS['scripts_head'].'.Head')

    <!-- დამატებითი გასტილვები -->
    @include('App.FrontBlades._Sections._Scripts._Addons.css')
    <!-- Rev სლაიდერი -->
    @include('App.FrontBlades._Sections._Scripts._RevSlider.css')

    <!-- ვიდეოს და სლალერიის სკრიპტი -->
    @include('App.FrontBlades._Sections._Scripts._Special._lightgallery.css')

    <!-- ხმოვანი ბმულები !-->
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=dChwzjXk"></script>

</head>

<body>
    <div id="wrapper" class="theme-style-1">
        <header id="header" class="">
            {{--საიტის ჰეადერი--}}
            @include('App.FrontBlades._Sections._Header.'.$TS['sections_header'].'.Header')

            {{--ნავიგაცია (მთავარი მენიუ)--}}
            @include('App.FrontBlades._Sections._Navigation.'.$TS['navigation'].'.Navigation')
        </header>

        <div class="content" style="min-height: 550px">
            {{--საიტის ძირითადი კონტენტი--}}
            @yield('content')
        </div>


        {{--საიტის დაბოლოება ფუტერი--}}
        @include('App.FrontBlades._Sections._Footer.'.$TS['sections_footer'].'.Footer')
    </div>


    {{--თემფლეიტის სკრიპტები--}}
    @include('App.FrontBlades._Sections._Scripts._Theme.'.$TS['scripts_footer'].'.Footer')

    <!-- Rev სლაიდერი -->
    @include('App.FrontBlades._Sections._Scripts._RevSlider.js')

    <!-- ვიდეოს და სლალერიის სკრიპტი -->
    @include('App.FrontBlades._Sections._Scripts._Special._lightgallery.cripts')

    <script>
        jQuery(document).ready(function() {
            jQuery('a').mouseenter(function() { // Attach this function to all mouseenter events for 'a' tags 
                responsiveVoice.cancel(); // Cancel anything else that may currently be speaking
                responsiveVoice.speak(jQuery(this).text()); // Speak the text contents of all nodes within the current 'a' tag
            });
            jQuery('.searchForm').on('keypress', function(e) {
                if (e.which == 13) {
                    var s = jQuery('input.searchForm').val();
                    window.location.href = "/search/" + s;
                }
            });
        })
    </script>

</body>

</html>