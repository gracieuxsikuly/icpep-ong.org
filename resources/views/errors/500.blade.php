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

    </head>

    <body>

        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <h1 class="display-2 fw-medium">5<i class="bx bx-buoy bx-spin text-primary display-3"></i>0</h1>
                            <h4 class="text-uppercase">Erreur interne du serveur</h4>
                            <div class="mt-5 text-center">
                                <a class="btn btn-primary waves-effect waves-light" href="/">Retour au siteweb</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-8 col-xl-6">
                        <div>
                            <img src="{{asset ('aassets/images/error-img.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{asset ('aassets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset ('aassets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset ('aassets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset ('aassets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset ('aassets/libs/node-waves/waves.min.js')}}"></script>

        <script src="{{asset ('aassets/js/app.js')}}"></script>

    </body>
</html>
