@extends('layouts.admin.default', ['title'=>'AJOUT PROJET'])
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Enregistrement du nouveau projet</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ route('listprojet') }}">Liste de projet</a></li>

                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
     @livewire('admin.add-projet')
        <!-- end card -->
    </div>


    <!-- end col -->

    <!-- end col -->
</div>

@endsection
