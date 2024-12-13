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
                                <div class="donate" style="color: black;">
                                    {{$this->titre}}
                                    <span> {{$this->date}} |  {{$this->vue}} vues | By Admin</span>
                                </div>


                            </div>

                        </articel><br><br>

                        <div class="section-title">
                            <h2> <span class="thm-color">{{$this->titre}}</span></h2>
                        </div>
                        <div class="text">
                            <p style="text-align: justify; color: black;">
                                {{$this->contenu}}
                                </p>
                        </div><br><br>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="video-image-box">
                                    @if ($this->videolink)
                                    <figure class="gallery_video" style="width: 370px;">
                                         <img width="100%" alt="News" src="{{ asset('assets/images/blog/' . $this->image) }}">
                                        <a href="{{ $this->videolink }}" class="">
                                            <span class="overlay-link icon-arrows4"></span></a></figure>
                                    {{-- <figure class="gallery_video" style="width: 370px;">
                                        <video controls width="100%" >
                                            <source src="{{ asset('storage/videos/' . $this->videolink) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </figure> --}}


                                    @endif


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
                                <h4>Derniers Nouvels</h4>
                            </div>

                            <div class="popular-post">
                                @forelse ($this->lastblogs as $blog)
                                <div class="item">
                                    <div class="post-thumb">
                                        <a href="{{ route('detailevenemt',  ['slug'=>$blog->slug]) }}">
                                            <img src="{{ asset('assets/images/blog/' . $blog->image) }}" alt="{{ $blog->image }}">
                                        </a>
                                    </div>
                                    <a href="{{ route('detailevenemt',  ['slug'=>$blog->slug]) }}">
                                    <h4> {{ Str::of( $blog->titre)->limit(45) }}</h4></a>

                                    <div class="post-info">
                                        {{ $blog->created_at }}
                                    </div>
                                </div>
                                @empty
                                <p>Aucune publication disponible</p>

                                @endforelse

                            </div>
                        </div>




                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
