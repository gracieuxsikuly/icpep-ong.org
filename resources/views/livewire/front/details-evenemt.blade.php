<div>
    <section class="blog-single-post blog-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="post-area sec-padd">
                        <article class="classic-blog-news">
                            <figure class="img-holder">
                                <a href="#"><img alt="News" src="{{asset('assets/images/blog/l2.jpg')}}"></a>

                                <div class="inner-box">
                                </div>
                            </figure>
                            <div class="lower-content">
                                <div class="category">
                                    {{$this->titre}}
                                </div>

                                <div class="content">
                                    <div class="post-meta">
                                        {{$this->date}} |  {{$this->vue}} vues | By Admin
                                    </div>
                                    <a href="#">
                                    <h4> {{$this->titre}}</h4></a>
                                    <div class="text">
                                    <p style="text-align: justify;">
                                        {{$this->contenu}}
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </article>



                    </div>
                </div>


                <div class="col-md-4 col-sm-12">
                    <div class="blog-sidebar sec-padd">
                        <div class="sidebar_search">

                                <input placeholder="Search...." type="text" wire:model="seachItem"> <button class="tran3s color1_bg"><i aria-hidden="true" class="fa fa-search"></i></button>

                        </div>

                        <div class="popular_news">
                            <div class="section-title style-2">
                                <h4>Dernier Evenement</h4>
                            </div>


                            <div class="popular-post">
                                @forelse ($this->lastblogs as $blog)
                                <div class="item">
                                    <div class="post-thumb">
                                        <a href="{{ route('detailevenemt',  ['slug'=>$blog->slug]) }}">
                                            <img src="{{ asset('assets/images/blog/' . $blog->image) }}" alt="{{ $blog->image }}">
                                        </a>
                                    </div>
                                    <a href="#">
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
