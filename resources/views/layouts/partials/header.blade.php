
<header class="main-header">
    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner clearfix">
                <div class="top-left">
                    <ul class="social-links clearfix">
                        <li class="social-title">Follow Us:</li>
                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                        <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    </ul>
                </div>

                <div class="top-right">
                    <ul class="info clearfix">
                        {{-- <li class="search-btn"><button type="button" class="theme-btn search-toggler"><span class="fa fa-search"></span></button></li> --}}
                        <li><a href="tel:12345615523"><span class="icon fa fa-phone-alt"></span> Call: &nbsp;123 4561 5523</a></li>
                        <li><a href="mailto:info@templatepath.com"><span class="icon fa fa-envelope"></span> Email: &nbsp;info@loveuscharity.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <!--Logo-->
                <div class="logo-box">
                    <div class="logo"><a href="{{ setactiveonfrontend('acceuil') }}" title="ICPEP"><img src="{{asset('assets/images/logoooo.png')}}" alt="ICPEP" title="ICPEP"></a></div>
                </div>

                <!--Nav Box-->
                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="{{ setactiveonfrontend('acceuil') }}"><a href="{{ route('acceuil') }}">Acceuil</a></li>
                                <li class="{{ setactiveonfrontend('service') }}"><a href="{{ route('service') }}">Service</a></li>
                                <li class="{{ setactiveonfrontend('about') }}"><a href="{{ route('about') }}">Apropos</a></li>
                                <li class="{{ setactiveonfrontend('publication') }}"><a href="{{ route('publication') }}">Publication</a></li>
                                <li class="{{ setactiveonfrontend('contact') }}"><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <div class="link-box clearfix">
                        <div class="donate-link"><a href="donate.html" class="theme-btn btn-style-one"><span class="btn-title">Donate Now</span></a></div>
                        <div class="cart-link"><a href="shopping-cart.html" class="theme-btn"><span class="icon flaticon-paper-bag"></span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="index.html" title=""><img src="{{asset('assets/images/logoooo.png')}}" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav><!-- Main Menu End-->
            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-cancel"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="{{asset('assets/images/logo.png')}}" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <!--Social Links-->
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->
</header>
