<div>
    <section class="about-2 sec-padd3">
        <div class="container">
            <div class="section-title center">
                <h2>Bienvenu chez <span class="thm-color"> ICPEP</span></h2>


                <p>International Center for Peace and Environment Protection By Peasant Communities (ICPEP) a pour objectif principal
                    de contribuer à l’instauration, à la promotion et à la sauvegarde de la justice et de la paix entre les
                     peuples par la mise en œuvre des principes fondamentaux des droits et libertés des peuples, des mécanismes
                     nationaux, régionaux et internationaux de protection des droits de l’homme, et assurer ainsi le bien-être
                     socio-économique des Communautés paysannes par une gestion et une exploitation rationnelles de
                     l’environnement et de ses ressources. </p>
            </div>


            <div class="row">
                <article class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-box"><img alt="" src="{{asset('assets/images/resource/about4.jpg')}}">
                        </div>


                        <div class="content">
                            <div class="clearfix">
                                <div class="icon_box">
                                    <span class="icon-people"></span>
                                </div>
                                <div class="text">
                                    <h4>Promouvoir l'autonomie</h4>
                                    <p>communautaire à des projets</p>
                                </div>
                            </div>
                            <p>Mettre en place des projets communautaires d’auto-prise en charge (l’agriculture,
                                 l’élevage, usine, semi-industriel, alphabétisation, coupe et coutures, art culinaire,
                                 tressage, coiffure, tissage, tricotage, cordonnerie, menuiserie, …).</p>
                        </div>
                    </div>
                </article>
                <article class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-box"><img alt="" src="{{asset('assets/images/resource/about5.jpg')}}">
                        </div>
                        <div class="content">
                            <div class="clearfix">
                                <div class="icon_box">
                                    <span class="icon-animals"></span>
                                </div>
                                <div class="text">
                                    <h4>la commercialisation </h4>
                                    <p>agricole</p>
                                </div>
                            </div>
                            <p>Œuvrer dans l’opérationnalisation de la commercialisation des produits agricoles et appuyer
                                les membres des Groupes Solidaires Paysans (GSP) par un Fonds Solidaire Paysan (FSP) ; </p>
                        </div>
                    </div>
                </article>
                <article class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-item">
                        <div class="img-box"><img alt="" src="{{asset('assets/images/resource/about3.jpg')}}">
                        </div>
                        <div class="content">
                            <div class="clearfix">
                                <div class="icon_box">
                                    <span class="icon-nature"></span>
                                </div>
                                <div class="text">
                                    <h4>Promouvoir la paix</h4>
                                    <p>la sécurité et les droits de l'homme</p>
                                </div>
                            </div>
                            <p>Intensifier les plaidoyers pour la paix et la sécurité en vue de préparer le terrain aux actions de développement durable ;
                                Monitoring de protection pour lutter contre les violations des droits humains et les SVGB ;
                                Monitoring des lieux de détention.
                                </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <section class="urgent-cause2 with-bg sec-padd3">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div class="section-title">
                        <h2>Nos <span class="thm-color">Projets</span></h2>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="link float_right">
                        <a class="thm-btn style-2" href="#">Tous les projets</a>
                    </div>
                </div>
            </div>


            <div class="row">
                @forelse ($projets as $projet)
                <article class="item col-md-4 col-sm-6 col-xs-12">
                    <figure class="img-box">
                        <img src="{{ asset('assets/images/project/' . $projet->image) }}" alt="{{ $projet->image }}">
                        {{-- <img alt="" src="{{asset('assets/images/cause/1.jpg')}}"> --}}

                        <div class="overlay">
                            <div class="inner-box">
                                <div class="content-box">
                                    {{-- <button class="thm-btn style-2 donate-box-btn">donate now</button> --}}
                                </div>
                            </div>
                        </div>
                    </figure>


                    <div class="content">
                        <div class="text center">
                            <a href="#">
                            <h4 class="title">
                                {{ $projet->designation }}
                                </h4></a>

                            <p style="text-align: justify;">

                                {{ Str::of(
                                    $projet->description
                                )->limit(200) }}
                               </p>
                        </div>


                        <div class="progress-box">
                            <div class="bar">
                                <div class="bar-inner animated-bar" data-percent="{{$projet->indicateurs}}%">
                                    <div class="count-text">
                                        {{$projet->indicateurs}}
                                        %
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="donate clearfix">
                            <div class="donate float_left"><span>Status du projet: </span></div>
                            <div class="donate float_right"> {{ $projet->statut }}</div>
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
