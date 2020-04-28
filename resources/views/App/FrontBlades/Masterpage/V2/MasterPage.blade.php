<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""  />
    <meta name="keywords" content="" />

    <title>Rigips Universal</title>

    @include('App.FrontBlades._Sections._Scripts._Theme.V1.Head')

    <!-- My Addons -->
    @include('App.FrontBlades._Sections._Scripts._Addons.css')

</head>

<body>
<div class="site-wrapper">

    <div class="topbar gray">
        <div class="row nopadding">
            <div class="container nopad">

                <div class="col-md-6 col-xs-4 nopadding">
                    <ul class="none two padding-top-bottom16">
                        <li><h6 class="small2 margin-top1 font-weight4 margin-right2"><a href="#" class="graylink6">Ge </a></h6></li>
                        <li><h6 class="small2 margin-top1 font-weight4 margin-right2"><a href="#" class="graylink6">EN </a></h6></li>
                        <li><h6 class="small2 margin-top1 font-weight4 margin-right2"><a href="#" class="graylink6">RU </a></h6></li>
                    </ul>
                </div><!--end left-->

                <div class="col-md-6 col-xs-8 nopadding">
                    <ul class="none two right padding-top-bottom16">
                        <li><h6 class="opensans gray5 small2 margin-top1 margin-right2"><i class="fa fa-mobile iconsize1"></i>&nbsp; (01) 123-456-7890</h6></li>
                        <li><h6 class="small2 margin-top1 font-weight4 margin-right2"><a href="mailto:info@iberia.ge" class="graylink3"><i class="fa fa-envelope"></i>&nbsp; info@website.com</a></h6></li>
                        <li><a href="#"><i class="fa fa-facebook icon-border-gray size2" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter icon-border-gray size2" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram icon-border-gray size2" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus icon-border-gray size2" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss icon-border-gray size2" aria-hidden="true"></i></a></li>
                    </ul>
                </div><!--end right-->

            </div>
        </div>
    </div><!-- end top bar -->

    <div class="clearfix"></div>

    <!-- navigation -->
    @include('App.FrontBlades._Sections._Navigation.V2.Navigation')
    <!-- end navigation -->

    <div class="clearfix"></div>



    <div class="clearfix"></div>


    <!-- footer -->
    @include('App.FrontBlades._Sections._Footer.V1.Footer')
    <!-- end footer -->


</div>

@include('App.FrontBlades._Sections._Scripts._Theme.V1.Footer')

</body>
</html>
