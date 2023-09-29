@extends('layouts.default', ['title'=>'CONTACT'])
@section('content')
@livewire('front.details-evenemt', ['slug'=>$slug])
@endsection
