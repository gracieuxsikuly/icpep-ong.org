<!doctype html>
<html lang="en">
<head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content=" International Center for Peace and Environment Protection By Peasant Communities (ICPEP) a pour objectif principal de contribuer à l’instauration, à la promotion et à la sauvegarde de la justice et de la paix entre les peuples ">
        <meta name="robots" content="index,follow">
        <meta name="language" content="fr">
        <meta name="author" content="Gracieux sikuly, Joe Sheti">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset ('aassets/images/favicon.ico') }}">

        <!-- owl.carousel css -->
        <link rel="stylesheet" href="{{asset ('aassets/libs/owl.carousel/assets/owl.carousel.min.css') }}">

        <link rel="stylesheet" href="{{asset ('aassets/libs/owl.carousel/assets/owl.theme.default.min.css') }}">

        <!-- Bootstrap Css -->
        <link href="{{asset ('aassets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset ('aassets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset ('aassets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">

        <div>
            <div class="container-fluid p-0">
                <div class="row g-0">

                    <div class="col-xl-9">
                        <div class="auth-full-bg pt-lg-5 p-4">
                            <div class="w-100">
                                <div class="bg-overlay"></div>
                                <div class="d-flex h-100 flex-column">

                                    <div class="p-4 mt-auto">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-7">
                                                <div class="text-center">

                                                    <h4 class="mb-3"><i class="bx bxs-quote-alt-left text-primary h1 align-middle me-3"></i><span class="text-primary">IC</span>PEP</h4>

                                                    <div dir="ltr">
                                                        <div class="owl-carousel owl-theme auth-review-carousel" id="auth-review-carousel">
                                                            <div class="item">
                                                                <div class="py-3">
                                                                    <p class="font-size-16 mb-4">" Aspirer à la transformation et conservation artisanale,
                                                                        semi-industrielle ou industrielle de production locale ; Participer dans les programmes
                                                                         de la conservation communautaire des forêts des communautés locales ;"</p>

                                                                    <div>
                                                                        <h4 class="font-size-16 text-primary">PCA ICPEP</h4>
                                                                        <p class="font-size-14 mb-0">- KAKULE MANZEKELE ALAIN</p>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="item">
                                                                <div class="py-3">
                                                                    <p class="font-size-16 mb-4">"Participer dans des campagnes de promotion des droits humains,
                                                                        de l’environnement et de la paix ; Promouvoir la paix entre cultivateurs et éleveurs ;
                                                                         Promouvoir et protéger les droits humains,"</p>

                                                                    <div>
                                                                        <h4 class="font-size-16 text-primary">Chef département production agricole
                                                                            </h4>
                                                                        <p class="font-size-14 mb-0">- KAKULE MANZEKELE ALAIN</p>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3">
                        <div class="auth-full-page-content p-md-5 p-4">
                            <div class="w-100">
                                @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5">
                                        <a href="index.html" class="d-block auth-logo">
                                            <img src="{{asset('assets/images/favicons/apple-touch-icon.png')}}" alt="" height="80" class="auth-logo-dark">
                                            <img src="{{asset('assets/images/favicons/apple-touch-icon.png')}}" alt="" height="80" class="auth-logo-light">
                                        </a>
                                    </div>
                                    <div class="my-auto">

                                        <div>
                                            <h5 class="text-primary">Bienvenu  !</h5>
                                            <p class="text-muted">Authentification requise.</p>
                                        </div>

                                        <div class="mt-4">
                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="login" class="form-label">Email ou numero de telephone</label>
                                                    <input name="login" type="text" class="form-control" id="login" placeholder="Email ou numero de telephone">
                                                </div>

                                                <div class="mb-3">
                                                    <div class="float-end">
                                                        <a href="#" class="text-muted">
                                                            @if (Route::has('password.request'))
                                                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                                                {{ __('Mot de passe oublié?') }}
                                                            </a>
                                                        @endif
                                                            </a>
                                                    </div>
                                                    <label class="form-label">Mot de passe</label>
                                                    <div class="input-group auth-pass-inputgroup">
                                                        <input type="password" class="form-control" placeholder="Entrer le Mot de passe" aria-label="Password" aria-describedby="password-addon">
                                                        <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                                    </div>
                                                </div>

                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="remember-check">
                                                    <label class="form-check-label" for="remember-check">
                                                        se souvenir de moi
                                                    </label>
                                                </div>

                                                <div class="mt-3 d-grid">
                                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Connexion</button>
                                                </div>



                                            </form>
                                        </div>
                                    </div>

                                    <div class="mt-4 mt-md-5 text-center">
                                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> ICPEP. <i class="mdi mdi-heart text-danger"></i> by Gsk</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>

        <!-- JAVASCRIPT -->
        <script src="{{asset ('aassets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{asset ('aassets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{asset ('aassets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{asset ('aassets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{asset ('aassets/libs/node-waves/waves.min.js') }}"></script>

        <!-- owl.carousel js -->
        <script src="{{asset ('aassets/libs/owl.carousel/owl.carousel.min.js') }}"></script>

        <!-- auth-2-carousel init -->
        <script src="{{asset ('aassets/js/pages/auth-2-carousel.init.js') }}"></script>

        <!-- App js -->
        <script src="{{asset ('aassets/js/app.js') }}"></script>

    </body>

</html>
