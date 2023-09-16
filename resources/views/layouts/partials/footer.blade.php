<footer class="main-footer">
    <div class="auto-container">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="row clearfix">

                <!--Column-->
                <div class="column col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget logo-widget">
                        <div class="widget-content">
                            <div class="footer-logo">
                                <a href="index.html"><img class="lazy-image" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="images/footer-logo.png" alt="" /></a>
                            </div>
                            <div class="text" style="text-align: justify;">International Center for Peace and Environment Protection
                                By Peasant Communities (ICPEP) a pour objectif principal de contribuer à l’instauration,
                                à la promotion et à la sauvegarde de la justice et de la paix entre les peuples par la mise en œuvre
                                 des principes </div>
                            <ul class="social-links clearfix">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget links-widget">
                        <div class="widget-content">
                            <h3>Pages</h3>
                            <ul>
                                <li><a href="{{ route('acceuil') }}">Accueil</a></li>
                                <li ><a href="{{ route('about') }}">Qui sommes-nous ?</a></li>
                                <li ><a href="{{ route('service') }}">Action/projet</a></li>
                                <li ><a href="{{ route('publication') }}">Evènements</a></li>
                                <li ><a href="{{ route('contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget info-widget">
                        <div class="widget-content">
                            <h3>Contacts</h3>
                            <ul class="contact-info">
                                <li>Flat 20, Reynolds Neck, North Helenaville, FV77 8WS</li>
                                <li><a href="tel:(+243) 970 194 912">(+243) 970 194 912</a></li>
                                <li><a href="mailto:info@icpep-ong.org">info@icpep-ong.org</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!--Column-->
                <div class="column col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-widget news-widget">
                        <div class="widget-content">
                            <h3>Top News</h3>
                            <!--News Post-->
                            <div class="news-post">
                                <div class="post-thumb"><a href="#"><img class="lazy-image" src="images/resource/image-spacer-for-validation.png" data-src="images/resource/post-thumb-1.jpg" alt=""></a></div>
                                <h5><a href="#">School for African Childrens</a></h5>
                                <div class="date">July 25, 2019</div>
                            </div>
                            <!--News Post-->
                            <div class="news-post">
                                <div class="post-thumb"><a href="#"><img class="lazy-image" src="images/resource/image-spacer-for-validation.png" data-src="images/resource/post-thumb-2.jpg" alt=""></a></div>
                                <h5><a href="#">School for African Childrens</a></h5>
                                <div class="date">July 25, 2019</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">

            <!--Scroll to top-->
            <div class="clearfix">
                <div class="copyright">ICPEP  &copy;  @php
                    echo date('Y');
                @endphp Tous droits réservés@gs</div>
                <ul class="bottom-links">
                    <li><a href="#">Conditions d'utilisation</a></li>
                    <li><a href="#">Politique de confidentialité</a></li>
                </ul>
            </div>
        </div>
    </div>

</footer>
