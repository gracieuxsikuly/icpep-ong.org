<div>
    <section class="style-2">
        <div class="container">

            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="cause-area urgent-cause2 single-cause cause-list-bg sec-padd">
                        <articel class="item clearfix">
                            <figure class="img-box">
                                <img alt="News" src="{{ asset('assets/images/blog/' . $this->image) }}">
                            </figure>

                            <div class="content">
                                <div class="donate">
                                    {{$this->titre}}
                                    <span> {{$this->date}} |  {{$this->vue}} vues | By Admin</span>
                                </div>


                            </div>

                        </articel><br><br>

                        <div class="section-title">
                            <h2> <span class="thm-color">{{$this->titre}}</span></h2>
                        </div>
                        <div class="text">
                            <p style="text-align: justify;">
                                {{$this->contenu}}
                                </p>
                        </div><br><br>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="section-title2">
                                    <h3>How Can You Help?</h3>
                                </div>
                                <div class="text">
                                    <p>Pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer.</p>
                                </div>
                                <ul class="list">
                                    <li><i class="fa fa-check-circle"></i>Sponsor meals for 50 children for 1 full year.</li>
                                    <li><i class="fa fa-check-circle"></i>Sponsor mid-day meals for one month.</li>
                                    <li><i class="fa fa-check-circle"></i>You can donate clothes, blankets and ect...</li>
                                    <li><i class="fa fa-check-circle"></i>You can donate food material like rice, veggies.</li>
                                    <li><i class="fa fa-check-circle"></i>Join as a volunteers to help poor people.</li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="video-image-box">
                                    @if ($this->videolink)
                                        <figure class="gallery_video"> <video controls>
                                            <source src="{{ asset('assets/images/blog/' . $this->videolink) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video></figure>

                                    @endif
                                    {{-- <figure class="gallery_video"> <img alt="News" src="{{ asset('assets/images/blog/' . $this->image) }}"><a href="https://www.youtube.com/watch?v=8QDazwTY2kM" class=""><span class="overlay-link icon-arrows4"></span></a></figure> --}}

                                </div>

                            </div>
                        </div><br><br>


                        <div class="share clearfix">
                            <div class="social-box float_left">
                                <span>Share <i class="fa fa-share-alt"></i></span>
                                <ul class="list-inline social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>

                        </div>


                    </div>


                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="blog-sidebar sec-padd">

                        <div class="popular_news">
                            <div class="section-title style-2">
                                <h4>recent post</h4>
                            </div>

                            <div class="popular-post">
                                <div class="item">
                                    <div class="post-thumb"><a href="blog-details.html"><img src="images/blog/thumb3.jpg" alt=""></a></div>
                                    <a href="blog-details.html"><h4>Change the lives of 40 <br> disabled people </h4></a>
                                    <div class="post-info"><i class="fa fa-calendar"></i>October 21, 2016 </div>
                                </div>
                                <div class="item">
                                    <div class="post-thumb"><a href="blog-details.html"><img src="images/blog/thumb4.jpg" alt=""></a></div>
                                    <a href="blog-details.html"><h4>Gorantalo earthquake <br> Relief Project </h4></a>
                                    <div class="post-info"><i class="fa fa-calendar"></i>January 14, 2016</div>
                                </div>
                                <div class="item">
                                    <div class="post-thumb"><a href="blog-details.html"><img src="images/blog/thumb5.jpg" alt=""></a></div>
                                    <a href="blog-details.html"><h4>Used equipments can <br> treat poor patients</h4></a>
                                    <div class="post-info"><i class="fa fa-calendar"></i>December 17, 2015 </div>
                                </div>
                            </div>
                        </div>




                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
