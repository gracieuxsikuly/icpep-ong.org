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
@livewire('front.galery')
@endsection
