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
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Ajouter la publication</h4>

                <form wire:submit.prevent="submitForm" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="titre" class="form-label">Titre</label>
                        <input wire:model="titre" type="text" class="form-control" id="titre">
                        @error('titre') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-3">
                        <label for="contenu" class="form-label">Contenu</label>
                        <textarea wire:model="contenu" class="form-control" rows="3"></textarea>
                        @error('contenu') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>



                    {{-- <div class="mb-3">
                        <label for="publie" class="form-label">Publié</label>
                        <select wire:model="publie" class="form-control" id="publie">
                            <option value="1">Oui</option>
                            <option value="0">Non</option>
                        </select>
                        @error('publie') <span class="text-danger">{{ $message }}</span> @enderror
                    </div> --}}

                    {{-- <div class="mb-3">
                        <label for="notation" class="form-label">Notation</label>
                        <input wire:model="notation" type="text" class="form-control" id="notation">
                        @error('notation') <span class="text-danger">{{ $message }}</span> @enderror
                    </div> --}}

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input wire:model="image" type="file" class="form-control" id="image">
                        @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    {{-- <div class="mb-3">
                        <label for="vue" class="form-label">Vue</label>
                        <input wire:model="vue" type="text" class="form-control" id="vue">
                        @error('vue') <span class="text-danger">{{ $message }}</span> @enderror
                    </div> --}}

                    <div>
                        <button type="submit" class="btn btn-primary w-md">Enregistrer la publication</button>
                    </div>
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->


    <!-- end col -->
</div>
@endsection
