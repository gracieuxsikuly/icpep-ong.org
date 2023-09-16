@extends('layouts.default', ['title'=>'ACCEUIL'])
@section('content')
  <!-- Banner Section -->
  <section class="banner-section style-two">
    <div class="banner-carousel love-carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoHeight":false, "singleItem" : true, "autoplay": true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 1000, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1024":{ "items" : "1" }}}'>

        <!-- Slide Item -->
        <div class="slide-item">
            <div class="image-layer lazy-image" data-bg="url('{{asset('assets/images/main-slider/13.jpg')}}')"></div>

            <div class="auto-container">
                <div class="content-box">
                    <h2>Nous pouvons changer <br>le monde</h2>
                    <div class="text">Aspirer à la transformation et conservation artisanale, semi-industrielle ou industrielle de production locale</div>
                    <div class="btn-box"><a href="donate.html" class="theme-btn btn-style-one"><span class="btn-title">Donate Now</span></a></div>
                </div>
            </div>
        </div>

        <!-- Slide Item -->
        <div class="slide-item">
            <div class="image-layer lazy-image" data-bg="url('{{asset('assets/images/main-slider/14.jpg')}}')"></div>

            <div class="auto-container">
                <div class="content-box">
                    <h2>Vous pouvez aider   <br>les pauvres</h2>
                        <div class="text">Participer dans les programmes de la conservation communautaire des forêts des communautés locales</div>
                    <div class="btn-box"><a href="donate.html" class="theme-btn btn-style-one"><span class="btn-title">Donate Now</span></a></div>
                </div>
            </div>
        </div>

        <!-- Slide Item -->
        <div class="slide-item">
            <div class="image-layer lazy-image" data-bg="url('{{asset('assets/images/main-slider/6.jpg')}}')"></div>

            <div class="auto-container">
                <div class="content-box">
                    <h2>Vous pouvez aider   <br>les pauvres</h2>
                    <div class="text">Participer dans des campagnes de promotion des droits humains, de l’environnement et de la paix</div>
                    <div class="btn-box"><a href="donate.html" class="theme-btn btn-style-one"><span class="btn-title">Donate Now</span></a></div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--End Banner Section -->


<!--About Section-->
<section class="about-section style-five">
    <div class="top-rotten-curve"></div>
    <div class="circle-one"></div>
    <div class="circle-two"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <!--Left Column-->
            <div class="left-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner maw-100">
                    <div class="sec-title">
                        <div class="sub-title">QUI SOMMES NOUS</div>
                        <h2>Our mission is save environment</h2>
                        <div class="text" style="text-align: justify;">International Center for Peace and Environment Protection By Peasant Communities (ICPEP) a
                             pour objectif principal de contribuer à l’instauration, à la promotion et à la sauvegarde de la justice
                              et de la paix entre les peuples par la mise en œuvre des principes fondamentaux des droits et libertés
                               des peuples, des mécanismes nationaux,... </div>
                        <div class="link-box clearfix"><a href="{{ route('about') }}" class="theme-btn btn-style-one"><span class="btn-title">En savoir plus</span></a></div>
                    </div>
                </div>
            </div>
            <!--Right Column-->
            <div class="right-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner">
                    <div class="images clearfix">
                        <figure class="image wow fadeInUp" data-wow-delay="0ms"><img class="lazy-image" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="images/resource/featured-image-21.jpg" alt=""></figure>
                        <figure class="image wow fadeInDown" data-wow-delay="0ms"><img class="lazy-image" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="images/resource/featured-image-22.jpg" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



      <!--Call To Action Section-->
      <section class="call-to-action">

    	<!--Image Layer-->
		<div class="image-layer lazy-image" data-bg="url('{{asset('assets/images/background/call-to-action-1.jpg')}}')"></div>

        <div class="auto-container">
            <div class="inner">
                <div class="sec-title centered">
                    <h2>Comment puis-je vous aider?</h2>
                    <div class="text">Votre don nous aidera à sauver et à améliorer des vies grâce à la recherche, à l’éducation et aux soins d’urgence</div>
                    <div class="link-box clearfix"><a href="causes.html" class="theme-btn btn-style-three"><span class="btn-title">faire un don maintenant</span></a><a href="causes.html" class="theme-btn btn-style-one"><span class="btn-title">Contactez-nous</span></a></div>
                </div>
            </div>
        </div>
    </section>

    <!--What We Do Section-->
    <section class="what-we-do">
        <div class="auto-container">

        	<div class="sec-title centered">
                <div class="sub-title">Que faisons-nous ?</div>
                <h2>Nous avons pour mission de résoudre <br>Les problèmes</h2>
                {{-- <div class="text">Cupidatat non proident sunt</div> --}}
            </div>

        	<div class="row clearfix">

            	<!--Service Block-->
                <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                	<div class="inner-box">
                    	<div class="icon-box"><span class="flaticon-water-bottle"></span></div>
                        <h3>Pure Water</h3>
                        <div class="text" style="text-align: justify;">L’ICPEP a cultivé un hectare en phase d’essai de la semence du blé et a obtenu plus de 450 variétés du blé à moins de 6 mois et dispose d’une dizaine des nouvelles variétés de la pomme de terre en phase d’adaptation à l’INERA, adaptations multi locales et petite multiplication dans diverses zones agroécologies de haute terre.</div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                	<div class="inner-box">
                    	<div class="icon-box"><span class="flaticon-fruit"></span></div>
                        <h3>Healthy Food</h3>
                        <div class="text" style="text-align: justify;">ICPEP a accompagné plus de 50 dossiers en justice et obtenu des décisions judiciaires, parmi lesquels des VSBG ; ICPEP a élaboré plusieurs rapports sur la protection des civils, dénonciations des violations des droits humains-spoliation des biens publics de l’Etat-détournements des deniers publics-dysfonctionnement de l’appareil judiciaire et de l’administration publique… ICPEP a de la même manière mener plusieurs plaidoyers pour relever ces défis et plusieurs résultats se sont avérés satisfaisants ;</div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                	<div class="inner-box">
                    	<div class="icon-box" ><span class="flaticon-medicine"></span></div>
                        <h3>Medical Facilities</h3>
                        <div class="text" style="text-align: justify;">ICPEP a rendu public plusieurs rapports de monitoring des lieux de détention, adressés aux autorités judiciaires et exécutives compétentes pour l’amélioration de l’administration de la justice et l’assainissement du milieu carcéral (où loge une population oubliée) ;</div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                	<div class="inner-box">
                    	<div class="icon-box"><span class="flaticon-reading"></span></div>
                        <h3>Education</h3>
                        <div class="text" style="text-align: justify;">ICPEP a organisé plusieurs formations à l’intention de la population civile et autres bénéficiaires sur les droits humains et leurs mécanismes de protection, les mécanismes extra-judiciaires ou modes alternatifs de résolution des conflits, l’art culinaire (avec remise des brevets contresignés par le Ministre Provincial compétent). De façon particulière, une formation sur les VSBG et la protection de l’enfant à l’intention des membres de ICPEP,</div>
                    </div>
                </div>

            </div>

            <div class="bottom-image"><img class="lazy-image" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="images/resource/services-bottom-image.png" alt=""></div>

        </div>
    </section>

	<!--Mission Vision Section-->
    <section class="mission-vision">
    	<div class="circle-one"></div>
        <div class="circle-two"></div>

        <div class="auto-container">

        	<div class="mission">
            	<div class="row clearfix">
                	<div class="text-column col-lg-6 col-md-12 col-sm-12">
                    	<div class="inner">
                            <div class="sec-title">
                                <div class="sub-title">Ils sortent</div>
                                <h2>Nos objectifs</h2>
                                <div class="text" style="text-align: justify;"> à la transformation et conservation artisanale, semi-industrielle ou industrielle de production locale ;
                                    • Participer dans les programmes de la conservation communautaire des forêts des communautés locales ;
                                    • Participer dans des campagnes de promotion des droits humains, de l’environnement et de la paix ;
                                    • Promouvoir la paix entre cultivateurs et éleveurs.
                                    • Promouvoir et protéger les droits humains</div>
                                <div class="link-box"><a href="{{ route('about')}}" class="theme-btn btn-style-one"><span class="btn-title">A savoir plus</span></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    	<div class="inner">
                            <div class="row clearfix">
                                <div class="image wow fadeInUp" data-wow-delay="0ms"><img class="lazy-image" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/resource/mission-image-1.jpg')}}" alt=""></div>
                                <div class="image wow fadeInDown" data-wow-delay="0ms"><img class="lazy-image" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/resource/mission-image-2.jpg')}}" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="vision">
                <div class="row clearfix">
                	<div class="text-column col-lg-6 col-md-12 col-sm-12">
                    	<div class="inner">
                            <div class="sec-title">
                                <div class="sub-title">Ils sortent</div>
                                <h2>Nos Missions</h2>
                                <div class="text" style="text-align: justify;">Mettre en place des projets communautaires d’auto-prise en charge (l’agriculture, l’élevage, usine, semi-industriel, alphabétisation, coupe et couture, art culinaire, tressage, coiffure, tissage, tricotage, cordonnerie, menuiserie, …) ;
                                    Rendre opérationnel la commercialisation des produits agricoles et appuyer les membres des Groupes solidaires Paysans ;
                                    Intensifier les plaidoyers pour la paix et la sécurité en vue de préparer le terrain aux actions de développement durable ;
                                    Monitoring de protection pour lutter contre les violations des droits humains et les SVGB ;
                                    Monitoring des lieux de détention ;</div>
                                <div class="link-box"><a href="{{ route('about')}}" class="theme-btn btn-style-one"><span class="btn-title">A savoir plus</span></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    	<div class="inner">
                            <div class="image wow fadeInLeft" data-wow-delay="0ms"><img class="lazy-image" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/resource/vision-image-1.jpg')}}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    @livewire('front.banner-counter')
     <!--News Section-->
     <section class="news-section">
    	<div class="top-rotten-curve"></div>

        <div class="auto-container">

            <div class="title-box clearfix">
                <div class="sec-title">
                    {{-- <div class="sub-title">Get In Touch</div> --}}
                    <h2>Dernier Evènements</h2>
                </div>

                <div class="link"><a href="{{ route('publication') }}" class="theme-btn btn-style-one"><span class="btn-title">Touts les evènements</span></a></div>
            </div>

            <div class="row clearfix">
            	<!--News Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box wow fadeInUp" data-wow-delay="0ms">
                    	<div class="image-box">
                        	<figure class="image"><a href="blog-single.html"><img class="lazy-image" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/resource/blog-image-1.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                        	<div class="date">25 <span class="month">Aug</span></div>
                            <h3><a href="blog-single.html">The Dignity of <br>Human Beings to Work</a></h3>
                            <div class="text">Excepteur sint occaecat cupidatat non proident sunt.</div>
                            <div class="post-meta">
                            	<ul class="clearfix">
                                	<li><a href="#"><span class="icon fa fa-user"></span> Admin</a></li>
                                    <li><a href="#"><span class="icon fa fa-comments"></span> 29 Comments</a></li>
                                    <li><a href="#"><span class="icon fa fa-share-alt"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--News Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box wow fadeInUp" data-wow-delay="300ms">
                    	<div class="image-box">
                        	<figure class="image"><a href="blog-single.html"><img class="lazy-image" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/resource/blog-image-2.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                        	<div class="date">25 <span class="month">Aug</span></div>
                            <h3><a href="blog-single.html">The Power of <br>People Against Poverty</a></h3>
                            <div class="text">Excepteur sint occaecat cupidatat non proident sunt.</div>
                            <div class="post-meta">
                            	<ul class="clearfix">
                                	<li><a href="#"><span class="icon fa fa-user"></span> Admin</a></li>
                                    <li><a href="#"><span class="icon fa fa-comments"></span> 29 Comments</a></li>
                                    <li><a href="#"><span class="icon fa fa-share-alt"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--News Block-->
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box wow fadeInUp" data-wow-delay="600ms">
                    	<div class="image-box">
                        	<figure class="image"><a href="blog-single.html"><img class="lazy-image" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/resource/blog-image-3.jpg')}}" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                        	<div class="date">25 <span class="month">Aug</span></div>
                            <h3><a href="blog-single.html">A Driving <br> ForceOut of Poverty</a></h3>
                            <div class="text">Excepteur sint occaecat cupidatat non proident sunt.</div>
                            <div class="post-meta">
                            	<ul class="clearfix">
                                	<li><a href="#"><span class="icon fa fa-user"></span> Admin</a></li>
                                    <li><a href="#"><span class="icon fa fa-comments"></span> 29 Comments</a></li>
                                    <li><a href="#"><span class="icon fa fa-share-alt"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
@endsection
