@extends('layouts.default', ['title'=>'ACCEUIL'])
@section('content')

    <!-- Banner Section -->
    <section class="banner-section">
		<div class="banner-carousel love-carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
			<!-- Slide Item -->
			<div class="slide-item">
				<div class="image-layer lazy-image" data-bg="url('{{asset('assets/images/main-slider/1.jpg')}}')"></div>

				<div class="auto-container">
					<div class="content-box">
						<h2>You Can Help  <br>The Poor</h2>
						<div class="text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
						<div class="btn-box"><a href="donate.html" class="theme-btn btn-style-one"><span class="btn-title">Donate Now</span></a></div>
					</div>
				</div>
			</div>

			<!-- Slide Item -->
			<div class="slide-item">
				<div class="image-layer lazy-image" data-bg="url('{{asset('assets/images/main-slider/2.jpg')}}')"></div>

				<div class="auto-container">
					<div class="content-box">
						<h2>You Can Help  <br>The Poor</h2>
						<div class="text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
						<div class="btn-box"><a href="donate.html" class="theme-btn btn-style-one"><span class="btn-title">Donate Now</span></a></div>
					</div>
				</div>
			</div>

			<!-- Slide Item -->
			<div class="slide-item">
				<div class="image-layer lazy-image" data-bg="url('{{asset('assets/images/main-slider/3.jpg')}}')"></div>

				<div class="auto-container">
					<div class="content-box">
						<h2>You Can Help  <br>The Poor</h2>
						<div class="text">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
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
                        <div class="text">Lorem ipsum dolor amet consectetur adipisicing elit sed eiusmod tempor incididunt labore dolor magna aliqua enim ad minimveniam quis nostrud exercitation laboris.</div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                	<div class="inner-box">
                    	<div class="icon-box"><span class="flaticon-fruit"></span></div>
                        <h3>Healthy Food</h3>
                        <div class="text">Lorem ipsum dolor amet consectetur adipisicing elit sed eiusmod tempor incididunt labore dolor magna aliqua enim ad minimveniam quis nostrud exercitation laboris.</div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                	<div class="inner-box">
                    	<div class="icon-box"><span class="flaticon-medicine"></span></div>
                        <h3>Medical Facilities</h3>
                        <div class="text">Lorem ipsum dolor amet consectetur adipisicing elit sed eiusmod tempor incididunt labore dolor magna aliqua enim ad minimveniam quis nostrud exercitation laboris.</div>
                    </div>
                </div>

                <!--Service Block-->
                <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                	<div class="inner-box">
                    	<div class="icon-box"><span class="flaticon-reading"></span></div>
                        <h3>Education</h3>
                        <div class="text">Lorem ipsum dolor amet consectetur adipisicing elit sed eiusmod tempor incididunt labore dolor magna aliqua enim ad minimveniam quis nostrud exercitation laboris.</div>
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
                                <div class="sub-title">Proident sunt</div>
                                <h2>Our Mission</h2>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco laboris Nisi ut aliquip commodo consequat.</div>
                                <div class="link-box"><a href="cause-single.html" class="theme-btn btn-style-one"><span class="btn-title">Read More</span></a></div>
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
                                <div class="sub-title">Proident sunt</div>
                                <h2>Our Vision</h2>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. enim ad minim veniam, quis nostrud exercitation ullamco laboris Nisi ut aliquip commodo consequat.</div>
                                <div class="link-box"><a href="cause-single.html" class="theme-btn btn-style-one"><span class="btn-title">Read More</span></a></div>
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


    <!--Call To Action Section-->






  @livewire('front.banner-counter')

    <!--News Section-->
    <section class="news-section">
    	<div class="top-rotten-curve"></div>

        <div class="auto-container">

            <div class="title-box clearfix">
                <div class="sec-title">
                    <div class="sub-title">Get In Touch</div>
                    <h2>Latest Article</h2>
                </div>

                <div class="link"><a href="blog.html" class="theme-btn btn-style-one"><span class="btn-title">All Articles</span></a></div>
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
