<section class="theme_menu stricky">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="main-logo">
                    <a href="index.html"><img alt="" src="{{asset('assets/images/logo/logo.png')}}"></a>
                </div>
            </div>


            <div class="col-md-9 menu-column">
                <nav class="defaultmainmenu" id="main_menu">
                    <ul class="defaultmainmenu-menu">
                        {{-- <li class="active">
                            <a href="index.html">Home</a>
                        </li> --}}

                        <li class="{{ setactiveonfrontend('acceuil') }}"><a href="{{ route('acceuil') }}">Accueil</a></li>
                        <li class="{{ setactiveonfrontend('about') }}"><a href="{{ route('about') }}">Apropos</a></li>
                        <li class="{{ setactiveonfrontend('service') }}"><a href="{{ route('service') }}">Action/projet</a></li>
                        <li class="{{ setactiveonfrontend('galery') }}"><a href="{{ route('galery') }}">Gallerie</a></li>
                        <li class="{{ setactiveonfrontend('publication') }}"><a href="{{ route('publication') }}">Evènements</a></li>
                        <li class="{{ setactiveonfrontend('contact') }}"><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>


            <div class="right-column">
                <div class="nav_side_content">
                    <ul class="social-icon">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </li>
                    </ul>


                    {{-- <div class="search_option">
                        <button aria-expanded="false" aria-haspopup="true" class="search tran3s dropdown-toggle color1_bg" data-toggle="dropdown" id="searchDropdown"><i aria-hidden="true" class="fa fa-search"></i></button>

                        <form action="#" aria-labelledby="searchDropdown" class="dropdown-menu">
                            <input placeholder="Search..." type="text"> <button><i aria-hidden="true" class="fa fa-search"></i></button>
                        </form>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
