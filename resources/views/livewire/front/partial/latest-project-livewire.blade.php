<div>
    <section class="gallery sec-padd">
        <div class="container">
            <div class="section-title center">
                <h2>DERNIER <span class="thm-color">PROJETS</span></h2>
            </div>
            <div class="gallery-carousel">
                @forelse ($projets as $projet)
                <article class="item">
                    <div class="inner-box">
                        <img src="{{ asset('assets/images/project/' . $projet->image) }}" alt="{{ $projet->image }}">

                        <div class="overlay">
                            <div class="top">
                                <div class="box">
                                    <div class="content">
                                        <a class="img-popup thm-btn" data-group="1" href="{{ asset('assets/images/project/' . $projet->image) }}">view project</a>
                                    </div>
                                </div>
                            </div>


                            <div class="bottom">
                                <a href="#">
                                <h4> {{ $projet->designation }}</h4></a>
                            </div>
                        </div>
                    </div>
                </article>
                @empty
                <p>Aucun projet disponible</p>

                @endforelse

            </div>
        </div>
    </section>
</div>
