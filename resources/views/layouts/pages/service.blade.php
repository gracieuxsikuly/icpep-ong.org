@extends('layouts.default', ['title'=>'SERVICE'])
@section('content')
<!-- Page Banner Section -->
<section class="page-banner">
    <div class="image-layer lazy-image" data-bg="url('{{asset('assets/images/background/bg-banner-1.jpg')}}')"></div>
    <div class="bottom-rotten-curve"></div>

    <div class="auto-container">
        <h1>Nos Services</h1>
        <ul class="bread-crumb clearfix">
            <li><a href="index.html">Acceuil</a></li>
            <li class="active">Nos Services</li>
        </ul>
    </div>

</section>
<!--End Banner Section -->
@livewire('front.service')
@endsection
