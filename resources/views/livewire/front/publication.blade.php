<div>
    <section class="all-blog blog-section sec-padd2">
        <div class="container">
            <div class="row">
                @forelse ($blogs as $blog)
                <article class="col-md-4 col-sm-6 col-xs-12">
                    <div class="default-blog-news">
                        <figure class="img-holder">
                            <a href="{{ route('detailevenemt',  ['slug'=>$blog->slug]) }}">
                                <img src="{{ asset('assets/images/blog/' . $blog->image) }}" alt="{{ $blog->image }}"></a>

                            <div class="inner-box">
                            </div>
                        </figure>


                        <div class="overlay">
                            <div class="bottom-box">
                                <div class="category">
                                    {{ Str::of( $blog->titre)->limit(45) }}
                                </div>


                                <div class="content">
                                    <div class="post-meta"  style="color: black;">
                                        {{ $blog->created_at }} |  {{ $blog->vue }} Vues
                                    </div>
                                    <a href="{{route('detailevenemt',  ['slug'=>$blog->slug])}}">
                                    <h4>   {{ Str::of( $blog->titre)->limit(45) }}</h4></a>

                                    <div class="text">
                                        <p style="color: black;"> {{ Str::of( $blog->contenu)->limit(200) }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="lower-content">
                            <div class="category">
                                {{ Str::of( $blog->titre)->limit(45) }}
                            </div>


                            <div class="content">
                                <div class="post-meta"  style="color: black;">
                                    {{ $blog->created_at }} |  {{ $blog->notation }} Etoiles
                                </div>
                                <a href="{{ route('detailevenemt',  ['slug'=>$blog->slug]) }}">
                                    <h4>   {{ Str::of( $blog->titre)->limit(45) }}</h4></a>
                            </div>
                        </div>
                    </div>
                </article>
                @empty
                <p>Aucune publication disponible</p>
                @endforelse

            </div>
        </div>
    </section>
</div>
