<div>
     <!-- Page Banner Section -->
     <section class="page-banner">
        <div class="image-layer lazy-image" data-bg="url('images/background/bg-banner-1.jpg')"></div>
        <div class="bottom-rotten-curve"></div>

        <div class="auto-container">
            <h1>Contact Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->

    <!--Contact Info Section-->
    <section class="contact-info-section">
        <div class="auto-container">

            <div class="sec-title centered">
                <div class="sub-title">Contact Us</div>
                <h2>Get In Touch</h2>
                <div class="text">Cupidatat non proident sunt</div>
            </div>

        	<div class="info-boxes">
                <div class="row clearfix">
                    <!--Info Box-->
                    <div class="info-box col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="0ms">
							<div class="image-layer lazy-image" data-bg="url('images/resource/contact-image-1.jpg')"></div>
                            <div class="icon-box"><span class="flaticon-home-location-marker"></span></div>
                            <h4>Our Location</h4>
                            <ul>
                            	<li>16/14 Babor Road, Shyamoly Dhaka.</li>
                            </ul>
                        </div>
                    </div>
                    <!--Info Box-->
                    <div class="info-box col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="300ms">
                            <div class="image-layer lazy-image" data-bg="url('images/resource/contact-image-2.jpg')"></div>
                            <div class="icon-box"><span class="flaticon-phone-call"></span></div>
                            <h4>Phone Number</h4>
                            <ul>
                            	<li><a href="tel:(+55)654-545-5418">(+55)  654 - 545 - 5418</a></li>
                                <li><a href="tel:(+55)654-545-1235">(+55)  654 - 545 - 1235</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--Info Box-->
                    <div class="info-box col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInUp" data-wow-delay="600ms">
                            <div class="image-layer lazy-image" data-bg="url('images/resource/contact-image-3.jpg')"></div>
                            <div class="icon-box"><span class="flaticon-email"></span></div>
                            <h4>Email Address</h4>
                            <ul>
                                <li><a href="mailto:info@example.com">info@example.com</a></li>
                                <li><a href="mailto:info@loveus.com">info@loveus.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
        	</div>

        </div>
    </section>


    <!--Contact Section-->
    <section class="contact-section">
        <div class="outer-container clearfix">

        	<div class="form-column clearfix">
                <div class="inner clearfix">

                    <div class="sec-title centered">
                        <div class="sub-title">Inquiry</div>
                        <h2>Leave a Message</h2>
                        <div class="text">Cupidatat non proident sunt</div>
                    </div>

                    <!-- Contact Form-->
                    <div class="contact-form">
                        <form  >
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-12 form-group">
                                    <input type="text" name="username" placeholder="Your name" required="">
                                </div>

                                <div class="col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" placeholder="Your Email" required="">
                                </div>

                                <div class="col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Write your message"></textarea>
                                </div>

                                <div class="col-md-12 col-sm-12 form-group text-center">
                                    <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Send Message</span></button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
        	</div>

            <div class="map-column clearfix">
                <iframe width="100%" height="100%" frameborder="0" style="border:0" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBqHQ0YTvnCWsIR9C10w6NJhnBhNLtSbC8
                &zoom=18&q=Oliversoft
                Rond point signers, Avenue kanyamuhanga N° 24, Goma" allowfullscreen>
            </iframe>
            	{{-- <div class="map-canvas"
                    data-zoom="12"
                    data-lat="-37.817085"
                    data-lng="144.955631"
                    data-type="roadmap"
                    data-hue="#ffc400"
                    data-title="Envato"
                    data-icon-path="images/icons/map-marker.png"
                    data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                </div> --}}
            </div>

        </div>
    </section>
    @include('layouts.partials.volonterbanner')
</div>
