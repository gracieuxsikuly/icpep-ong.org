@extends('layouts.admin.default', ['title'=>'AJOUT MENU'])
@section('content')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Form Layouts</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                    <li class="breadcrumb-item active">Form Layouts</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Ajouter Menu</h4>

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

    <div class="col-xl-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List Menu</h4>


                <div class="table-responsive">
                    <table class="table table-dark mb-0">

                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <!-- end col -->
</div>
@endsection
