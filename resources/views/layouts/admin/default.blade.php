<!doctype html>
<html lang="en">


<head>

        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content=" International Center for Peace and Environment Protection By Peasant Communities (ICPEP) a pour objectif principal de contribuer à l’instauration, à la promotion et à la sauvegarde de la justice et de la paix entre les peuples ">
        <meta name="robots" content="index,follow">
        <meta name="language" content="fr">
        <meta name="author" content="Gracieux sikuly, Joe Sheti">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset ('aassets/images/favicon.ico') }}">

        <!-- Bootstrap Css -->
        <link href="{{asset ('aassets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset ('aassets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset ('aassets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        @livewireStyles
    </head>

    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            @include('layouts.admin.partials.header')


            <!-- ========== Left Sidebar Start ========== -->
            @include('layouts.admin.partials.menu')
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">

                @yield('content')
                <!-- End Page-content -->

                @include('layouts.admin.partials.footer')

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->



        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{asset ('aassets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{asset ('aassets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{asset ('aassets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{asset ('aassets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{asset ('aassets/libs/node-waves/waves.min.js') }}"></script>

        <!-- apexcharts -->
        <script src="{{asset ('aassets/libs/apexcharts/apexcharts.min.js') }}"></script>

        <!-- dashboard blog init -->
        <script src="{{asset ('aassets/js/pages/dashboard-blog.init.js') }}"></script>

        <script src="{{asset ('aassets/js/app.js') }}"></script>
        @livewireScripts

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <x-livewire-alert::scripts />
  <script src="{{ asset('vendor/livewire-alert/livewire-alert.js') }}"></script>
<x-livewire-alert::flash />
    </body>


</html>
