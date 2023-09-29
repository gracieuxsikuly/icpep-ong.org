@extends('layouts.default', ['title'=>'SERVICE'])
@section('content')
<div class="inner-banner has-base-color-overlay text-center" style="background: url({{asset('assets/images/background/4.jpg')}});">
    <div class="container">
        <div class="box">
            <h1>Nos Actions et Projets</h1>
        </div>
    </div>
</div>
<div class="breadcumb-wrapper">
    <div class="container">
        <div class="pull-left">
            <ul class="list-inline link-list">
                <li>
                    <a href="/">Acceuil</a>
                </li>
                <li>
                    <a href="{{ route('projets') }}">Projets/Action</a>
                </li>

                <li>
                    Nos Projets et actions
                </li>
            </ul>
        </div>
        {{-- <div class="pull-right">
            <a href="#" class="get-qoute"><i class="fa fa-arrow-circle-right"></i>Become a Volunteer</a>
        </div> --}}
    </div>
</div>



<!--End Banner Section -->
@livewire('front.service')
@endsection
