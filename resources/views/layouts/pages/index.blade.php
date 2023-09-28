@extends('layouts.default', ['title'=>'APROPOS'])
@section('content')
<section class="rev_slider_wrapper">
    <div class="rev_slider" data-version="5.0" id="slider1">
        <ul>
            <li data-transition="fade">
                <img alt="" data-bgfit="cover" data-bgparallax="1" data-bgposition="top center" data-bgrepeat="no-repeat" height="888" src="{{asset('assets/images/slider/1.jpg')}}" width="1920">

                <div class="tp-caption tp-resizeme" data-hoffset="15" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="700" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-voffset="350" data-x="left" data-y="top">
                    <div class="slide-content-box">
                        <h1>Nous pouvons changer<br>
                            <span class="thm-color">le monde</span></h1>
                       <p>Aspirer à la transformation et conservation artisanale, semi-industrielle <br>
                           ou industrielle de production locale.</p>
                    </div>
                </div>


                <div class="tp-caption tp-resizeme" data-hoffset="15" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="2300" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-voffset="580" data-x="left" data-y="top">
                    <div class="slide-content-box">
                        <div class="button">
                            <a class="thm-btn" href="{{ route('contact') }}">Contact</a>
                        </div>
                    </div>
                </div>

                {{-- <div class="tp-caption tp-resizeme" data-hoffset="90" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="2600" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-voffset="550" data-x="left" data-y="top">
                    <div class="slide-content-box">
                        <div class="button">
                            <a class="thm-btn style-3" href="{{ route('projets') }}">Nos projets</a>
                        </div>
                    </div>
                </div> --}}
                <div class="tp-caption tp-resizeme" data-hoffset="190" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="2600" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-voffset="580" data-x="left" data-y="top">
                    <div class="slide-content-box">
                        <div class="button">
                            <a class="thm-btn style-3" href="{{ route('projets') }}">Nos projets</a>
                        </div>
                    </div>
                </div>
            </li>


            <li data-transition="fade">
                <img alt="" data-bgfit="cover" data-bgparallax="1" data-bgposition="top center" data-bgrepeat="no-repeat" height="580" src="{{asset('assets/images/slider/2.jpg')}}" width="1920">

                <div class="tp-caption tp-resizeme" data-hoffset="" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="700" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-voffset="370" data-x="center" data-y="top">
                    <div class="slide-content-box center">
                        <h1>Vous pouvez aider  les pauvres</h1>
                        <p>Participer dans les programmes de la conservation communautaire <br>
                            des forêts des communautés locales.</p>
                    </div>
                </div>


                <div class="tp-caption tp-resizeme" data-hoffset="-90" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="2300" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-voffset="550" data-x="center" data-y="top">
                    <div class="slide-content-box">
                        <div class="button">
                            <a class="thm-btn" href="#">Faire un don</a>
                        </div>
                    </div>
                </div>


                <div class="tp-caption tp-resizeme" data-hoffset="90" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="2600" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-voffset="550" data-x="center" data-y="top">
                    <div class="slide-content-box">
                        <div class="button">
                            <a class="thm-btn style-3" href="{{ route('projets') }}">Nos projets</a>
                        </div>
                    </div>
                </div>
            </li>


            <li data-transition="fade">
                <img alt="" data-bgfit="cover" data-bgparallax="1" data-bgposition="top center" data-bgrepeat="no-repeat" height="580" src="{{asset('assets/images/slider/3.jpg')}}" width="1920">

                <div class="tp-caption tp-resizeme" data-hoffset="200" data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="700" data-transform_idle="o:1;" data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-voffset="340" data-x="center" data-y="top">
                    <div class="slide-content-box">
                        <h1>Une petite quantité de<br>
                            L'eau sauve la vie</h1>
                        <p>Organiser régulièrement des campagnes de sensibilisation sur l’importance de la protection
                            et <br> de la gestion rationnelle de l’environnement.</p>
                    </div>
                </div>


                <div class="tp-caption tp-resizeme" data-hoffset="0" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="2300" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-voffset="570" data-x="center" data-y="top">
                    <div class="slide-content-box">
                        <div class="button">
                            <a class="thm-btn" href="{{ route('contact') }}">Contactez-nous</a>
                        </div>
                    </div>
                </div>


                <div class="tp-caption tp-resizeme" data-hoffset="90" data-responsive_offset="on" data-splitin="none" data-splitout="none" data-start="2600" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-voffset="550" data-x="center" data-y="top">
                    <div class="slide-content-box">
                        <div class="button">
                            <a class="thm-btn style-3" href="#">Faire un don</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

<!--End rev slider wrapper-->
@livewire('front.partial.projet-livewire')
@livewire('front.partial.about-livewire')
@livewire('front.partial.team-livewire')
@livewire('front.partial.latest-project-livewire')
@livewire('front.partial.timer-livewire')
@include('layouts.partials.partenaire')
@livewire('front.partial.event-livewire')
{{-- <section class="call-out">
    <div class="container">
        <div class="float_left">
            <h4>Join Our Mission to Improve a Child's Feature, Pet's Life and Our Planet.</h4>
        </div>


        <div class="float_right">
            <a class="thm-btn style-3" href="#">Become a Volunteer</a>
        </div>
    </div>
</section> --}}
@endsection
