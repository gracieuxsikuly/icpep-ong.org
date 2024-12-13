@extends('layouts.admin.default', ['title'=>'AJOUT MENU'])
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">formulaire de publication</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active"><a href="{{ route('listblog') }}">Liste de publication</a></li>
                </ol>
            </div>

        </div>
    </div>
</div>
@livewire('admin.add-blog', ['blog' => $blog])

@endsection
