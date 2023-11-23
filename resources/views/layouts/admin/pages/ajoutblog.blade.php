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

                <form>
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">First name</label>
                        <input type="text" class="form-control" id="formrow-firstname-input">
                    </div>
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">First name</label>
                        <input type="text" class="form-control" id="formrow-firstname-input">
                    </div>
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">First name</label>
                        <input type="text" class="form-control" id="formrow-firstname-input">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Textarea</label>
                        <div>
                            <textarea required class="form-control" rows="3"></textarea>
                        </div>
                    </div>




                    <div>
                        <button type="submit" class="btn btn-primary w-md">Submit</button>
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
