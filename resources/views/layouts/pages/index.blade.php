@extends('layouts.default')
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
    <section class="about-section">
    	<div class="top-rotten-curve"></div>
        <div class="bottom-rotten-curve"></div>
        <div class="circle-one"></div>
        <div class="circle-two"></div>

        <div class="auto-container">
        	<div class="row clearfix">
            	<!--Left Column-->
                <div class="left-column col-lg-6 col-md-12 col-sm-12">
                	<div class="inner">
                    	<div class="sec-title">
                        	<div class="sub-title">About Us</div>
                            <h2>You Can Help The Poor</h2>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
							<div class="link-box clearfix"><a href="causes.html" class="theme-btn btn-style-one"><span class="btn-title">Read More</span></a></div>
                        </div>
                    </div>
                </div>
                <!--Right Column-->
                <div class="right-column col-lg-6 col-md-12 col-sm-12">
                	<div class="inner">
                    	<div class="row clearfix">
                        	<!--About Feature-->
                            <div class="about-feature col-md-6 col-sm-12">
                            	<div class="inner-box wow fadeInUp">
                                	<div class="icon-box"><span class="flaticon-user"></span></div>
                                    <h4>Become Volunteer</h4>
                                    <a href="#" class="over-link"></a>
                                </div>
                            </div>
                            <!--About Feature-->
                            <div class="about-feature col-md-6 col-sm-12">
                            	<div class="inner-box wow fadeInUp" data-wow-delay="300ms">
                                	<div class="icon-box"><span class="flaticon-heart-2"></span></div>
                                    <h4>Quick Fundraise</h4>
                                    <a href="#" class="over-link"></a>
                                </div>
                            </div>
                            <!--About Feature-->
                            <div class="about-feature col-md-6 col-sm-12">
                            	<div class="inner-box wow fadeInUp">
                                	<div class="icon-box"><span class="flaticon-coin-2"></span></div>
                                    <h4>Give Donation</h4>
                                    <a href="#" class="over-link"></a>
                                </div>
                            </div>
                            <!--About Feature-->
                            <div class="about-feature col-md-6 col-sm-12">
                            	<div class="inner-box wow fadeInUp" data-wow-delay="300ms">
                                	<div class="icon-box"><span class="flaticon-care"></span></div>
                                    <h4>Become Volunteer</h4>
                                    <a href="#" class="over-link"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    {{-- <!--Causes Section-->
    <section class="causes-section">
        <div class="auto-container">

        	<div class="sec-title centered">
                <div class="sub-title">Our Causes</div>
                <h2>Popular Causes</h2>
                <div class="text">Cupidatat non proident sunt</div>
            </div>

        	<div class="row clearfix">

            	<!--Cause Block-->
                <div class="cause-block col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box wow fadeInUp" data-wow-delay="0ms">
                    	<div class="image-box">
                        	<figure class="image"><a href="cause-single.html"><img class="lazy-image" src="images/resource/image-spacer-for-validation.png" data-src="images/resource/cause-image-1.jpg" alt=""></a></figure>
                        </div>
                        <div class="donate-info">
                            <div class="progress-box">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="70%"><div class="count-text">70%</div></div>
                                </div>
                            </div>
                            <div class="donation-count clearfix"><span class="raised"><strong>Raised:</strong> $6,000</span> <span class="goal"><strong>Goal:</strong> $8,000</span></div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="cause-single.html">Raise Fund <br>for Healthy Food</a></h3>
                            <div class="text">Excepteur sint occaecat cupidatat non proident sunt.</div>
                            <div class="link-box"><a href="cause-single.html" class="theme-btn btn-style-two"><span class="btn-title">Read More</span></a></div>
                        </div>
                    </div>
                </div>

                <!--Cause Block-->
                <div class="cause-block col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box wow fadeInUp" data-wow-delay="300ms">
                    	<div class="image-box">
                        	<figure class="image"><a href="cause-single.html"><img class="lazy-image" src="images/resource/image-spacer-for-validation.png" data-src="images/resource/cause-image-2.jpg" alt=""></a></figure>
                        </div>
                        <div class="donate-info">
                            <div class="progress-box">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="70%"><div class="count-text">70%</div></div>
                                </div>
                            </div>
                            <div class="donation-count clearfix"><span class="raised"><strong>Raised:</strong> $6,000</span> <span class="goal"><strong>Goal:</strong> $8,000</span></div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="cause-single.html">Education <br>for Poor Children</a></h3>
                            <div class="text">Excepteur sint occaecat cupidatat non proident sunt.</div>
                            <div class="link-box"><a href="cause-single.html" class="theme-btn btn-style-two"><span class="btn-title">Read More</span></a></div>
                        </div>
                    </div>
                </div>

                <!--Cause Block-->
                <div class="cause-block col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box wow fadeInUp" data-wow-delay="600ms">
                    	<div class="image-box">
                        	<figure class="image"><a href="cause-single.html"><img class="lazy-image" src="images/resource/image-spacer-for-validation.png" data-src="images/resource/cause-image-3.jpg" alt=""></a></figure>
                        </div>
                        <div class="donate-info">
                            <div class="progress-box">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="70%"><div class="count-text">70%</div></div>
                                </div>
                            </div>
                            <div class="donation-count clearfix"><span class="raised"><strong>Raised:</strong> $6,000</span> <span class="goal"><strong>Goal:</strong> $8,000</span></div>
                        </div>
                        <div class="lower-content">
                            <h3><a href="cause-single.html">Promoting The <br>Rights of Children</a></h3>
                            <div class="text">Excepteur sint occaecat cupidatat non proident sunt.</div>
                            <div class="link-box"><a href="cause-single.html" class="theme-btn btn-style-two"><span class="btn-title">Read More</span></a></div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section> --}}

    <!--Video Section-->
    <section class="video-section">
    	<div class="circle-one"></div>
        <div class="circle-two"></div>
        <div class="top-rotten-curve"></div>
        <div class="bottom-rotten-curve"></div>

    	<!--Image Layer-->
        <div class="image-layer wow slideInLeft" data-wow-delay="500ms"><div class="bg-image lazy-image" data-bg="url('{{asset('assets/images/background/fluid-image-1.jpg')}}')"></div></div>
        <div class="auto-container">
        	<div class="row clearfix">
            	<!--Text Column-->
                <div class="text-column col-lg-6 col-md-12 col-sm-12">
                	<div class="inner">
                    	<div class="sec-title">
                        	<div class="sub-title">Watch Video</div>
                            <h2>Watch Our Latest Activities</h2>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua. enim minim veniam, quis nostrud exercitation ullamco laboris.</div>
							<div class="link-box clearfix"><a href="causes.html" class="theme-btn btn-style-one"><span class="btn-title">Donate Now</span></a></div>
                        </div>
                    </div>
                </div>
                <!--Image Column-->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                	<div class="inner wow fadeInLeft" data-wow-delay="0ms">
                    	<figure class="image-box">
                        	<img class="lazy-image" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/resource/video-image-1.jpg')}}" alt="">
                            <a href="https://www.youtube.com/watch?v=C9rVAbcQH_U" class="lightbox-image over-link"><span class="icon flaticon-play-button"></span></a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--What We Do Section-->
    <section class="what-we-do">
        <div class="auto-container">

        	<div class="sec-title centered">
                <div class="sub-title">What We Do?</div>
                <h2>We’re on a Mission to Solve <br>The Problems</h2>
                <div class="text">Cupidatat non proident sunt</div>
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
    <section class="call-to-action">

    	<!--Image Layer-->
        <div class="image-layer lazy-image" data-bg="url('{{asset('assets/images/background/call-to-action-1.jpg')}}')"></div>

        <div class="auto-container">
            <div class="inner">
                <div class="sec-title centered">
                    <h2>How Can You Help?</h2>
                    <div class="text">Your donation will help us save and improve lives with research, education and emergency care.</div>
                    <div class="link-box clearfix"><a href="causes.html" class="theme-btn btn-style-three"><span class="btn-title">Donate Now</span></a><a href="causes.html" class="theme-btn btn-style-one"><span class="btn-title">Join Us Now</span></a></div>
                </div>
            </div>
        </div>
    </section>


    <!--Team Section-->
    <section class="team-section">
    	<div class="bottom-rotten-curve"></div>

        <div class="auto-container">

        	<div class="sec-title centered">
                <div class="sub-title">Meet Our Team</div>
                <h2>Our Volunteer</h2>
                <div class="text">Cupidatat non proident sunt</div>
            </div>

        	<div class="row clearfix">

            	<!--Team Block-->
                <div class="team-block col-xl-4 col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box wow fadeInUp" data-wow-delay="0ms">
                    	<figure class="image-box"><a href="#"><img class="lazy-image" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/resource/team-image-1.jpg')}}" alt=""></a></figure>
                        <div class="lower-box">
                        	<div class="content">
                                <h3><a href="#">Catherine Jones</a></h3>
                                <div class="designation">Engineer</div>
                                <div class="social-links">
                                    <ul class="clearfix">
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Team Block-->
                <div class="team-block col-xl-4 col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box wow fadeInUp" data-wow-delay="300ms">
                    	<figure class="image-box"><a href="#"><img class="lazy-image" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/resource/team-image-2.jpg')}}" alt=""></a></figure>
                        <div class="lower-box">
                        	<div class="content">
                                <h3><a href="#">Lauren Davis</a></h3>
                                <div class="designation">Photographer</div>
                                <div class="social-links">
                                    <ul class="clearfix">
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Team Block-->
                <div class="team-block col-xl-4 col-lg-4 col-md-6 col-sm-12">
                	<div class="inner-box wow fadeInUp" data-wow-delay="600ms">
                    	<figure class="image-box"><a href="#"><img class="lazy-image" src="{{asset('assets//resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/resource/team-image-3.jpg')}}" alt=""></a></figure>
                        <div class="lower-box">
                        	<div class="content">
                                <h3><a href="#">Susan hardson</a></h3>
                                <div class="designation">Reporter</div>
                                <div class="social-links">
                                    <ul class="clearfix">
                                        <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                        <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                        <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>




    <!-- Funfacts Section -->
	<section class="facts-section">
		<div class="auto-container">
			<div class="inner-container">

				<!-- Fact Counter -->
				<div class="fact-counter">
					<div class="row clearfix">

						<!--Column-->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="count-outer count-box">
										<span class="count-text" data-speed="3000" data-stop="90">0</span>
									</div>
									<div class="counter-title">Project Complate</div>
								</div>
							</div>
						</div>

						<!--Column-->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="count-outer count-box alternate">
										<span class="count-text" data-speed="3000" data-stop="216">0</span>
									</div>
									<div class="counter-title">Satisfied Clients</div>
								</div>
							</div>
						</div>

						<!--Column-->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="count-outer count-box">
										<span class="count-text" data-speed="2000" data-stop="35">0</span>
									</div>
									<div class="counter-title">Experienced Staff</div>
								</div>
							</div>
						</div>

						<!--Column-->
						<div class="column counter-column col-lg-3 col-md-6 col-sm-12">
							<div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
								<div class="content">
									<div class="count-outer count-box">
										<span class="count-text" data-speed="2000" data-stop="15">0</span>
									</div>
									<div class="counter-title">Awards Win</div>
								</div>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Funfacts Section -->

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
