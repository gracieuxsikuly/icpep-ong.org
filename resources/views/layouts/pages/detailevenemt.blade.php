@extends('layouts.default', ['title'=>'CONTACT'])
@section('content')
<div class="inner-banner has-base-color-overlay text-center" style="background: url({{asset('assets/images/background/4.jpg')}});">
    <div class="container">
        <div class="box">
            <h1>details evenements</h1>
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


                <li>Details evenements</li>
            </ul>
        </div>

{{--
        <div class="pull-right">
            <a class="get-qoute" href="#"><i class="fa fa-arrow-circle-right"></i>Become a Volunteer</a>
        </div> --}}
    </div>
</div>
@livewire('front.details-evenemt', ['slug'=>$slug])
@endsection
