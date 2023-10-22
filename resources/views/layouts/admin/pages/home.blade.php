@extends('layouts.admin.default', ['title'=>'DASHBOARD'])
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Blog</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">

        <div class="col-xl-8">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">

                            <div class="d-flex flex-wrap">
                                <div class="me-3">
                                    <p class="text-muted mb-2">Total Post</p>
                                    <h5 class="mb-0">120</h5>
                                </div>

                                <div class="avatar-sm ms-auto">
                                    <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                        <i class="bx bxs-book-bookmark"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card blog-stats-wid">
                        <div class="card-body">

                            <div class="d-flex flex-wrap">
                                <div class="me-3">
                                    <p class="text-muted mb-2">Pages</p>
                                    <h5 class="mb-0">86</h5>
                                </div>

                                <div class="avatar-sm ms-auto">
                                    <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                        <i class="bx bxs-note"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card blog-stats-wid">
                        <div class="card-body">
                            <div class="d-flex flex-wrap">
                                <div class="me-3">
                                    <p class="text-muted mb-2">Comments</p>
                                    <h5 class="mb-0">4,235</h5>
                                </div>

                                <div class="avatar-sm ms-auto">
                                    <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                        <i class="bx bxs-message-square-dots"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-start">
                        <h5 class="card-title me-2">Visitors</h5>
                        <div class="ms-auto">
                            <div class="toolbar d-flex flex-wrap gap-2 text-end">
                                <button type="button" class="btn btn-light btn-sm">
                                    ALL
                                </button>
                                <button type="button" class="btn btn-light btn-sm">
                                    1M
                                </button>
                                <button type="button" class="btn btn-light btn-sm">
                                    6M
                                </button>
                                <button type="button" class="btn btn-light btn-sm active">
                                    1Y
                                </button>

                            </div>
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-lg-4">
                            <div class="mt-4">
                                <p class="text-muted mb-1">Today</p>
                                <h5>1024</h5>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="mt-4">
                                <p class="text-muted mb-1">This Month</p>
                                <h5>12356 <span class="text-success font-size-13">0.2 % <i class="mdi mdi-arrow-up ms-1"></i></span></h5>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="mt-4">
                                <p class="text-muted mb-1">This Year</p>
                                <h5>102354 <span class="text-success font-size-13">0.1 % <i class="mdi mdi-arrow-up ms-1"></i></span></h5>
                            </div>
                        </div>
                    </div>

                    <hr class="mb-4">

                    <div class="apex-charts" id="area-chart" dir="ltr"></div>
                </div>
            </div>
        </div>
        <!-- end col -->

        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                            <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-sm rounded-circle img-thumbnail">
                        </div>
                        <div class="flex-grow-1">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <div class="text-muted">
                                        <h5 class="mb-1">Henry wells</h5>
                                        <p class="mb-0">UI / UX Designer</p>
                                    </div>
                                </div>

                                <div class="flex-shrink-0 dropdown ms-2">
                                    <button class="btn btn-light btn-sm" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bxs-cog align-middle me-1"></i> Setting
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else</a>
                                    </div>
                                </div>
                            </div>


                            <hr>

                            <div class="row">
                                <div class="col-4">
                                    <div>
                                        <p class="text-muted text-truncate mb-2">Total Post</p>
                                        <h5 class="mb-0">32</h5>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div>
                                        <p class="text-muted text-truncate mb-2">Subscribes</p>
                                        <h5 class="mb-0">10k</h5>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-start">
                        <h5 class="card-title mb-3 me-2">Subscribes</h5>

                        <div class="dropdown ms-auto">
                            <a class="text-muted font-size-16" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                <i class="mdi mdi-dots-horizontal"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap">
                        <div>
                            <p class="text-muted mb-1">Total Subscribe</p>
                            <h4 class="mb-3">10,512</h4>
                            <p class="text-success mb-0"><span>0.6 % <i class="mdi mdi-arrow-top-right ms-1"></i></span></p>
                        </div>
                        <div class="ms-auto align-self-end">
                            <i class="bx bx-group display-4 text-light"></i>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- end col -->

    </div>
    <!-- end row -->




</div> <!-- container-fluid -->
</div>
@endsection
