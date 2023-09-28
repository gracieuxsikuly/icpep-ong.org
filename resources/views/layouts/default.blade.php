<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">

    <title>@yield('title')</title>
    <meta name="description" content=" International Center for Peace and Environment Protection By Peasant Communities (ICPEP) a pour objectif principal de contribuer à l’instauration, à la promotion et à la sauvegarde de la justice et de la paix entre les peuples ">
    <meta name="robots" content="index,follow">
    <meta name="language" content="fr">
    <meta name="author" content="Gracieux sikuly, Joe Sheti">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">

    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('assets/images/favicons/apple-touch-icon.png')}}" rel="apple-touch-icon" sizes="180x180">
    <link href="{{asset('assets/images/favicons/favicon-32x32.png')}}" rel="icon" sizes="32x32" type="image/png">
    <link href="{{asset('assets/images/favicons/favicon-16x16.png')}}" rel="icon" sizes="16x16" type="image/png">
</head>

<body>
    <div class="boxed_wrapper">
        <div class="top-bar">
            <div class="container">
                <div class="clearfix">
                    <div class="top-bar-text float_left">
                        <button class="thm-btn donate-box-btn">faire un don</button>

                        <p>Personne n’est jamais devenu pauvre en donnant !</p>
                    </div>


                    <div class="right-column float_right">
                        <ul class="list_inline contact-info">
                            <li><span class="icon-phone"></span>Phone: +32 456 789012</li>


                            <li><span class="icon-back"></span>Email: Mailus@Humanity.com</li>
                        </ul>


                        {{-- <div class="" id="polyglotLanguageSwitcher">
                            <form action="#">
                                <select id="polyglot-language-options">
                                    <option id="en" selected value="en">
                                        English
                                    </option>

                                    <option id="fr" value="fr">
                                        French
                                    </option>

                                    <option id="de" value="de">
                                        German
                                    </option>

                                    <option id="it" value="it">
                                        Italian
                                    </option>

                                    <option id="es" value="es">
                                        Spanish
                                    </option>
                                </select>
                            </form>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>


      {{-- menu --}}
      @include('layouts.partials.header')
        <!--Start rev slider wrapper-->
{{-- content --}}
        @yield('content')


       @include('layouts.partials.footer')
        <!-- Scroll Top  -->
        <button class="scroll-top tran3s color2_bg"><span class="fa fa-angle-up"></span></button> <!-- preloader  -->


        <div class="preloader">
        </div>

{{-- modale de faire un dot --}}
        <div class="donate-popup" id="donate-popup">
            <div class="close-donate theme-btn">
                <span class="fa fa-close"></span>
            </div>


            <div class="popup-inner">
                <div class="container">
                    <div class="donate-form-area">
                        <div class="section-title center">
                            <h2>Donation Information</h2>
                        </div>


                        <h4>How much would you like to donate:</h4>


                        <form action="#" class="donate-form default-form">
                            <ul class="chicklet-list clearfix">
                                <li><input id="donate-amount-1" name="donate-amount" type="radio"> <label data-amount="1000" for="donate-amount-1">$1000</label></li>


                                <li><input checked="checked" id="donate-amount-2" name="donate-amount" type="radio"> <label data-amount="2000" for="donate-amount-2">$2000</label></li>


                                <li><input id="donate-amount-3" name="donate-amount" type="radio"> <label data-amount="3000" for="donate-amount-3">$3000</label></li>


                                <li><input id="donate-amount-4" name="donate-amount" type="radio"> <label data-amount="4000" for="donate-amount-4">$4000</label></li>


                                <li><input id="donate-amount-5" name="donate-amount" type="radio"> <label data-amount="5000" for="donate-amount-5">$5000</label></li>


                                <li class="other-amount">
                                    <div class="input-container" data-message="Every dollar you donate helps end hunger.">
                                        <span>Or</span><input id="other-amount" placeholder="Other Amount" type="text">
                                    </div>
                                </li>
                            </ul>


                            <h3>Donor Information</h3>


                            <div class="form-bg">
                                <div class="row clearfix">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <p>Your Name*</p>
                                            <input name="fname" placeholder="" type="text">
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <p>Email*</p>
                                            <input name="fname" placeholder="" type="text">
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <p>Address*</p>
                                            <input name="fname" placeholder="" type="text">
                                        </div>
                                    </div>


                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="form-group">
                                            <p>Phn Num*</p>
                                            <input name="fname" placeholder="" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <ul class="payment-option">
                                <li>
                                    <h4>Choose your payment method:</h4>
                                </li>


                                <li>
                                    <div class="checkbox">
                                        <label><input name="pay-us" type="checkbox"> <span>Paypal</span></label>
                                    </div>
                                </li>


                                <li>
                                    <div class="checkbox">
                                        <label><input name="pay-us" type="checkbox"> <span>Offline Donation</span></label>
                                    </div>
                                </li>


                                <li>
                                    <div class="checkbox">
                                        <label><input name="pay-us" type="checkbox"> <span>Credit Card</span></label>
                                    </div>
                                </li>


                                <li>
                                    <div class="checkbox">
                                        <label><input name="pay-us" type="checkbox"> <span>Debit Card</span></label>
                                    </div>
                                </li>
                            </ul>


                            <div class="center">
                                <button class="thm-btn" type="submit">Donate Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="{{asset('assets/js/jquery.js')}}">
        </script>
        <script src="{{asset('assets/js/bootstrap.min.js')}}">
        </script>
        <script src="{{asset('assets/js/menu.js')}}">
        </script>
        <script src="{{asset('assets/js/owl.carousel.min.js')}}">
        </script>
        <script src="{{asset('assets/js/jquery.mixitup.min.js')}}">
        </script>
        <script src="{{asset('assets/js/jquery.fancybox.pack.js')}}">
        </script>
        <script src="{{asset('assets/js/imagezoom.js')}}">
        </script>
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}">
        </script>
        <script src="{{asset('assets/js/jquery.polyglot.language.switcher.js')}}">
        </script>
        <script src="{{asset('assets/js/SmoothScroll.js')}}">
        </script>
        <script src="{{asset('assets/js/jquery.appear.js')}}">
        </script>
        <script src="{{asset('assets/js/jquery.countTo.js')}}">
        </script>
        <script src="{{asset('assets/js/validation.js')}}">
        </script>
        <script src="{{asset('assets/js/wow.js')}}">
        </script>
        <script src="{{asset('assets/js/jquery.fitvids.js')}}">
        </script>
        <script src="{{asset('assets/js/nouislider.js')}}">
        </script> <!-- revolution slider js -->

        <script src="{{asset('assets/js/rev-slider/jquery.themepunch.tools.min.js')}}">
        </script>
        <script src="{{asset('assets/js/rev-slider/jquery.themepunch.revolution.min.js')}}">
        </script>
        <script src="{{asset('assets/js/rev-slider/revolution.extension.actions.min.js')}}">
        </script>
        <script src="{{asset('assets/js/rev-slider/revolution.extension.carousel.min.js')}}">
        </script>
        <script src="{{asset('assets/js/rev-slider/revolution.extension.kenburn.min.js')}}">
        </script>
        <script src="{{asset('assets/js/rev-slider/revolution.extension.layeranimation.min.js')}}">
        </script>
        <script src="{{asset('assets/js/rev-slider/revolution.extension.migration.min.js')}}">
        </script>
        <script src="{{asset('assets/js/rev-slider/revolution.extension.navigation.min.js')}}">
        </script>
        <script src="{{asset('assets/js/rev-slider/revolution.extension.parallax.min.js')}}">
        </script>
        <script src="{{asset('assets/js/rev-slider/revolution.extension.slideanims.min.js')}}">
        </script>
        <script src="{{asset('assets/js/rev-slider/revolution.extension.video.min.js')}}">
        </script>
        <script src="{{asset('assets/js/custom.js')}}">
        </script>
    </div>
</body>

</html>
