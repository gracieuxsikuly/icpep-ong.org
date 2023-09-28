<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta charset="utf-8">
<title>@yield('title')</title>
<meta name="description" content=" International Center for Peace and Environment Protection By Peasant Communities (ICPEP) a pour objectif principal de contribuer à l’instauration, à la promotion et à la sauvegarde de la justice et de la paix entre les peuples ">
<meta name="robots" content="index,follow">
<meta name="language" content="fr">
<meta name="author" content="Gracieux sikuly, Joe Sheti">

<!-- Stylesheets -->
<link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/style-2.css')}}" rel="stylesheet">
<!-- Responsive File -->
<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
<!-- Color File -->
<link href="{{asset('assets/css/color.css')}}" rel="stylesheet">

<link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
@livewireStyles
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"><div class="icon"></div></div>

    <!-- Main Header -->
    @include('layouts.partials.header')
    <!-- End Main Header -->

    @yield('content')

    <!-- Sponsors Section -->
    @include('layouts.partials.partenaire')

    </section>

	<!-- Main Footer -->
    @include('layouts.partials.footer')

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="flaticon-up-arrow"></span></div>
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-ui.js')}}"></script>
<script src="{{asset('assets/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('assets/js/owl.js')}}"></script>
<script src="{{asset('assets/js/appear.js')}}"></script>
<script src="{{asset('assets/js/wow.js')}}"></script>
<script src="{{asset('assets/js/lazyload.js')}}"></script>
<script src="{{asset('assets/js/scrollbar.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
@livewireScripts
</body>

</html>
