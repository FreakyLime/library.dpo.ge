<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Visual Studio | CMS V 1.0</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/Metronic/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/Metronic/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/Metronic/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/Metronic/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ asset('public/Metronic/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ asset('public/Metronic/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{ asset('public/Metronic/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES PORTFOLIO INCLUDED*** -->
    <link href="{{ asset('public/Metronic/global/plugins/cubeportfolio/css/cubeportfolio.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/Metronic/pages/css/portfolio.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES PORTFOLIO INCLUDED*** -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{ asset('public/Metronic/pages/css/profile-2.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{ asset('public/Metronic/layouts/layout/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/Metronic/layouts/layout/css/themes/darkblue.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{ asset('public/Metronic/layouts/layout/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="{{ asset('public/favicon.ico')}}" />

    {{--ADDONS--}}
    <link href="{{ asset('public/addons') }}/font_classes.css" rel="stylesheet">
    <link href="{{ asset('public/addons') }}/admin_reclass.css" rel="stylesheet">
    <link href="{{ asset('public/addons') }}/margins_paddings.css" rel="stylesheet">
    <link href="{{ asset('public/addons') }}/covers.css" rel="stylesheet">
    {{--ADDONS--}}

    {{--OTHER PAGE SCRIPTS--}}
    <link href="{{ asset('public/Metronic/global/plugins/jquery-nestable/jquery.nestable.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/Metronic/pages/css/profile.min.css')}}" rel="stylesheet" type="text/css" />
    {{--OTHER PAGE SCRIPTS--}}

    <script src="{{ asset('public/Metronic/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
</head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<div class="page-wrapper">
    <!-- BEGIN HEADER -->
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner ">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="{{ asset($lang) }}/admin">
                    <img src="{{ asset('public/Metronic/layouts/layout/img/logo.png')}}" alt="logo" class="logo-default" /> </a>
                <div class="menu-toggler sidebar-toggler">
                    <span></span>
                </div>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span></span>
            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-quick-sidebar-toggler">
                        <a href="{{ asset('/logout') }}" class="dropdown-toggle">
                            <i class="icon-logout"></i>
                        </a>
                    </li>
                    <!-- END QUICK SIDEBAR TOGGLER -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    <!-- END HEADER -->
    <!-- BEGIN HEADER & CONTENT DIVIDER -->
    <div class="clearfix"> </div>
    <!-- END HEADER & CONTENT DIVIDER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            <div class="page-sidebar navbar-collapse collapse">
                {{--მენიუ სხვადასხვა თემფლეიტის მიხედვით--}}
                <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <li class="sidebar-toggler-wrapper hide">
                        <div class="sidebar-toggler">
                            <span></span>
                        </div>
                    </li>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                    <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
                    <p></p>
                    <li class="nav-item start ">
                        <a href="{{ asset($lang) }}/admin" class="nav-link nav-toggle">
                            <i class="icon-home"></i>
                            <span class="title bpg_caps f14 gray_font">საწყისი გვერდი</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="{{ asset($lang) }}/admin/build_menu" class="nav-link nav-toggle">
                            <i class="icon-list"></i>
                            <span class="title bpg_caps f14 gray_font">მენიუს მართვა</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                    {{--<li class="nav-item start ">
                        <a href="{{ asset($lang) }}/admin/sale_category/1" class="nav-link nav-toggle">
                            <i class="icon-list"></i>
                            <span class="title bpg_caps f14 gray_font">ფასდაკლებები</span>
                            <span class="arrow"></span>
                        </a>
                    </li>--}}
                    {{--სპეციალური ბლოკი ფერების შერჩევა--}}
                    {{--<li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-settings"></i>
                            <span class="title bpg_caps f14 gray_font">შეარჩიე ფერი</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="{{ asset($lang) }}/admin/color_category/1" class="nav-link ">
                                    <span class="title bpg_caps f14 gray_font">ინტერიერი</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ asset($lang) }}/admin/color_category/2" class="nav-link ">
                                    <span class="title bpg_caps f14 gray_font">ექსტერიერი</span>
                                </a>
                            </li>
                        </ul>
                    </li>--}}
                    {{--სპეციალური ბლოკი ფერების შერჩევა--}}
                    {{--<li class="nav-item start ">
                        <a href="{{ asset($lang) }}/admin/build_category" class="nav-link nav-toggle">
                            <i class="fa fa-tasks"></i>
                            <span class="title bpg_caps f14 gray_font">კატეგორიების მართვა</span>
                            <span class="arrow"></span>
                        </a>
                    </li>--}}
                    {{--<li class="nav-item start ">
                        <a href="{{ asset($lang) }}/admin/prod_aromats/1" class="nav-link nav-toggle">
                            <i class="fa fa-television"></i>
                            <span class="title bpg_caps f14 gray_font">არომატების მართვა</span>
                            <span class="arrow"></span>
                        </a>
                    </li>--}}
                    <li class="nav-item start ">
                        <a href="{{ asset($lang) }}/admin/slider_module/list/1" class="nav-link nav-toggle">
                            <i class="fa fa-television"></i>
                            <span class="title bpg_caps f14 gray_font">სლაიდერის მართვა</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                    {{--ფასდაკლება--}}
                    {{--<li class="nav-item start ">
                        <a href="{{ asset($lang) }}/admin/sale_category/1" class="nav-link nav-toggle">
                            <i class="icon-list"></i>
                            <span class="title bpg_caps f14 gray_font">ფასდაკლებები</span>
                            <span class="arrow"></span>
                        </a>
                    </li>--}}
                    {{--ფასდაკლება--}}

                    {{--მთავარი გვერდის ბლოკები--}}
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-settings"></i>
                            <span class="title bpg_caps f14 gray_font">დამატებითი ფუნქციები</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="{{ asset($lang) }}/admin/services/1" class="nav-link ">
                                    <span class="title bpg_caps f14 gray_font">სერვისები</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ asset($lang) }}/admin/teams/1" class="nav-link ">
                                    <span class="title bpg_caps f14 gray_font">გუნდი</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ asset($lang) }}/admin/events/1" class="nav-link ">
                                    <span class="title bpg_caps f14 gray_font">ივენთები</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ asset($lang) }}/admin/campaigns/1" class="nav-link ">
                                    <span class="title bpg_caps f14 gray_font">კამპანიები</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ asset($lang) }}/admin/reply/1" class="nav-link ">
                                    <span class="title bpg_caps f14 gray_font">გამოხმაურება</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ asset($lang) }}/admin/banner_module/list/1" class="nav-link ">
                                    <span class="title bpg_caps f14 gray_font">პარტნიორები</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ asset($lang) }}/admin/banner_module/list/2" class="nav-link ">
                                    <span class="title bpg_caps f14 gray_font">გამოკითხვის ბანერი</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ asset($lang) }}/admin/static_images" class="nav-link ">
                                    <span class="title bpg_caps f14 gray_font">სტატიკური სურათები</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    {{--მთავარი გვერდის ბლოკები--}}

                    {{--დამხმარე ბლოკები--}}
                    {{--<li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-settings"></i>
                            <span class="title bpg_caps f14 gray_font">სპეციალური ბლოკები</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="{{ asset($lang) }}/admin/about_us" class="nav-link ">
                                    <span class="title bpg_caps f14 gray_font">ჩვენს შესახებ</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ asset($lang) }}/admin/services/1" class="nav-link ">
                                    <span class="title bpg_caps f14 gray_font">მომსახურება</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ asset($lang) }}/admin/reply/1" class="nav-link ">
                                    <span class="title bpg_caps f14 gray_font">შეფასებები</span>
                                </a>
                            </li>
                        </ul>
                    </li>--}}
                    {{--დამხმარე ბლოკები--}}

                    <li class="nav-item start ">
                        <a href="{{ asset($lang) }}/admin/translations" class="nav-link nav-toggle">
                            <i class="fa fa-files-o"></i>
                            <span class="title bpg_caps f14 gray_font">თარგმანი</span>
                            <span class="arrow"></span>
                        </a>
                    </li>
                    {{--<li class="nav-item start ">
                        <a href="{{ asset($lang) }}/admin/settings" class="nav-link nav-toggle">
                            <i class="fa fa-cogs"></i>
                            <span class="title bpg_caps f14 gray_font">სეთინგების მართვა</span>
                            <span class="arrow"></span>
                        </a>
                    </li>--}}
                    <li class="nav-item start ">
                        <a href="{{ asset('/logout') }}" class="nav-link nav-toggle">
                            <i class="icon-logout"></i>
                            <span class="title bpg_caps f14 gray_font">გასვლა</span>
                            <span class="arrow"></span>
                        </a>
                    </li>

                    <li class="heading">
                        <h3 class="uppercase  bpg_arial">მთავარი ადმინისტრატორი</h3>
                    </li>
                    {{--<li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-settings"></i>
                            <span class="title bpg_caps f14 gray_font">ცხრილების მართვა</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="form_controls.html" class="nav-link ">
                                    <span class="title bpg_caps f14 gray_font">ცხრილების სია</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="form_controls_md.html" class="nav-link ">
                                    <span class="title bpg_caps f14 gray_font">ახალი ცხრილის დამატება</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-settings"></i>
                            <span class="title bpg_caps f14 gray_font">მოდულების მართვა</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item">
                                <a href="form_controls.html" class="nav-link ">
                                    <span class="title bpg_caps f14 gray_font">მოდულები</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="form_controls_md.html" class="nav-link ">
                                    <span class="title bpg_caps f14 gray_font">მოდულის დამატება</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item start">
                        <a href="" class="nav-link nav-toggle">
                            <i class="icon-home"></i>
                            <span class="title bpg_caps f14 gray_font">კონფიგურაცია</span>
                            <span class="arrow"></span>
                        </a>
                    </li>--}}
                </ul>
                {{--მენიუ სხვადასხვა თემფლეიტის მიხედვით--}}
            </div>
            <!-- END SIDEBAR -->
        </div>
        <!-- END SIDEBAR -->
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->

                <!-- END PAGE HEADER-->
                <!-------------------------===========CONTENT AREA========---------------------------------------->
                    @yield('content')
                <!-------------------------===========CONTENT AREA========---------------------------------------->
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner"> 2017 &copy; Visual Studio CMS V 1.0
        </div>
    </div>
    <!-- END FOOTER -->
</div>
<!--[if lt IE 9]>
<script src="{{ asset('public/Metronic/global/plugins/respond.min.js')}}"></script>
<script src="{{ asset('public/Metronic/global/plugins/excanvas.min.js')}}"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{ asset('public/Metronic/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/Metronic/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/Metronic/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/Metronic/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('public/Metronic/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script src="{{ asset('public/Metronic/global/plugins/gmaps/gmaps.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ asset('public/Metronic/global/scripts/app.min.js')}}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS PORFOLIO INCLIDED **** -->
<script src="{{ asset('public/Metronic/global/plugins/cubeportfolio/js/jquery.cubeportfolio.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/Metronic/pages/scripts/portfolio-1.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS PORFOLIO INCLIDED **** -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{ asset('public/Metronic/layouts/layout/scripts/layout.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/Metronic/layouts/layout/scripts/demo.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/Metronic/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
{{--OTHER PAGE SCRIPTS--}}
<script src="{{ asset('public/Metronic/global/plugins/jquery-nestable/jquery.nestable.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/Metronic/pages/scripts/ui-nestable.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/Metronic/pages/scripts/profile.min.js')}}" type="text/javascript"></script>
    {{--Onn Off switch--}}
    <script src="{{ asset('public/Metronic/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('public/Metronic/pages/scripts/components-bootstrap-switch.min.js')}}" type="text/javascript"></script>
    {{--Onn Off switch--}}
{{--OTHER PAGE SCRIPTS--}}


{{-- Installing ckeditor/ckeditor (4.6.2) --}}
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript">

        $('textarea').each( function() {

            CKEDITOR.replace( 'ck-ge', {
                filebrowserImageBrowseUrl: '{{ asset("laravel-filemanager?type=Images") }}',
                filebrowserImageUploadUrl: '{{asset("laravel-filemanager/upload?type=Images&_token=")}}{{csrf_token()}}',
                filebrowserBrowseUrl: '{{ asset("laravel-filemanager?type=images") }}',
                filebrowserUploadUrl: '{{ asset("")}}laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
            });
            CKEDITOR.replace( 'ck-ru', {
                filebrowserImageBrowseUrl: '{{ asset("laravel-filemanager?type=Images") }}',
                filebrowserImageUploadUrl: '{{asset("laravel-filemanager/upload?type=Images&_token=")}}{{csrf_token()}}',
                filebrowserBrowseUrl: '{{ asset("laravel-filemanager?type=images") }}',
                filebrowserUploadUrl: '{{ asset("")}}laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
            });
            CKEDITOR.replace( 'ck-en', {
                filebrowserImageBrowseUrl: '{{ asset("laravel-filemanager?type=Images") }}',
                filebrowserImageUploadUrl: '{{asset("laravel-filemanager/upload?type=Images&_token=")}}{{csrf_token()}}',
                filebrowserBrowseUrl: '{{ asset("laravel-filemanager?type=images") }}',
                filebrowserUploadUrl: '{{ asset("")}}laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
            });
            CKEDITOR.replace( 'ck-helper', {
                filebrowserImageBrowseUrl: '{{ asset("laravel-filemanager?type=Images") }}',
                filebrowserImageUploadUrl: '{{asset("laravel-filemanager/upload?type=Images&_token=")}}{{csrf_token()}}',
                filebrowserBrowseUrl: '{{ asset("laravel-filemanager?type=images") }}',
                filebrowserUploadUrl: '{{ asset("")}}laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
            });

        });
    </script>
</body>