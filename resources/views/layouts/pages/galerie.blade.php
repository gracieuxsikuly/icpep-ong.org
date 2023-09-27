@extends('layouts.default', ['title'=>'GALERIE'])
@section('content')
 <!-- Page Banner Section -->
 <section class="page-banner">
    <div class="image-layer lazy-image" data-bg="url('{{asset('assets/images/background/bg-banner-1.jpg')}}')"></div>
    <div class="bottom-rotten-curve"></div>

    <div class="auto-container">
        <h1>Notre galerie photo</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="/">Acceuil</a></li>
            <li class="active">Galerie</li>
        </ul>
    </div>

</section>
<!--End Banner Section -->
<!-- Gallery Page Section -->
<section class="gallery-page-section">
    <div class="auto-container">
        <!--MixitUp Galery-->
        <div class="mixitup-gallery">
            <!--Filter-->
            <div class="filters clearfix">
                <ul class="filter-tabs filter-btns clearfix">
                    <li class="active filter" data-role="button" data-filter="all">All</li>
                    <li class="filter" data-role="button" data-filter=".children">Children</li>
                    <li class="filter" data-role="button" data-filter=".volunteer">Volunteer</li>
                    <li class="filter" data-role="button" data-filter=".animals">Animals</li>
                    <li class="filter" data-role="button" data-filter=".donate">Donate</li>
                </ul>
            </div>

            <div class="filter-list row">
                <!-- Gallery Item Two -->
                <div class="gallery-item-two mix all volunteer col-lg-4 col-md-6 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img class="lazy-image" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/gallery/7.jpg')}}" alt=""></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/gallery/7.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-cross-1"></span></a></div>
                    </div>
                </div>

                {{-- <!-- Gallery Item Two -->
                <div class="gallery-item-two mix all animals col-lg-4 col-md-6 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img class="lazy-image" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/gallery/8.jpg')}}" alt=""></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/gallery/8.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-cross-1"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item Two -->
                <div class="gallery-item-two mix all volunteer children col-lg-4 col-md-6 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img class="lazy-image" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/gallery/9.jpg')}}" alt=""></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/gallery/9.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-cross-1"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item Two -->
                <div class="gallery-item-two mix all volunteer animals col-lg-4 col-md-6 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img class="lazy-image" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/gallery/10.jpg')}}" alt=""></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/gallery/10.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-cross-1"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item Two -->
                <div class="gallery-item-two mix all volunteer children col-lg-4 col-md-6 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img class="lazy-image" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/gallery/11.jpg')}}" alt=""></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/gallery/11.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-cross-1"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item Two -->
                <div class="gallery-item-two mix all volunteer animals col-lg-4 col-md-6 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img class="lazy-image" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/gallery/12.jpg')}}" alt=""></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/gallery/12.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-cross-1"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item Two -->
                <div class="gallery-item-two mix all donate volunteer children col-lg-4 col-md-6 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img class="lazy-image" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/gallery/13.jpg')}}" alt=""></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/gallery/13.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-cross-1"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item Two -->
                <div class="gallery-item-two mix all donate volunteer animals col-lg-4 col-md-6 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img class="lazy-image" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/gallery/14.jpg')}}" alt=""></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/gallery/14.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-cross-1"></span></a></div>
                    </div>
                </div>

                <!-- Gallery Item Two -->
                <div class="gallery-item-two mix all donate volunteer children col-lg-4 col-md-6 col-sm-12">
                    <div class="image-box">
                        <figure class="image"><img class="lazy-image" src="{{asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{asset('assets/images/gallery/15.jpg')}}" alt=""></figure>
                        <div class="overlay-box"><a href="{{asset('assets/images/gallery/15.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="icon flaticon-cross-1"></span></a></div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!-- End Gallery Page Section -->




{{-- <!-- Call To Action Section -->
@include('layouts.partials.volonterbanner')
<!--End Gallery Section --> --}}
{{-- @livewire('front.galery') --}}
@endsection
