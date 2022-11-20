@extends('app')

@section('content')

<div class="content-page">
    <div class="content">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                            <li class="breadcrumb-item active">Project Details</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Project Details</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row mb-2">
            <div class="col-sm-4">
                <div class="btn-group mb-3 ms-2 d-none d-sm-inline-block">
                    <button type="button" class="btn btn-secondary"><i class="dripicons-view-apps"></i></button>
                </div>
                <div class="btn-group mb-3 d-none d-sm-inline-block">
                    <a href="{{route('admin.project.overview',$project)}}" type="button" class="btn btn-link text-muted"><i class="dripicons-checklist"></i></a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="text-sm-end">
                    <div class="btn-group mb-3">
                        <button type="button" class="btn btn-primary">Overview</button>
                    </div>
                    <div class="btn-group mb-3 ms-1">
                        <a href="{{route('construct.index',$project)}}" class="btn btn-light">Construction</a>
                        <button type="button" class="btn btn-light">Managment</button>
                    </div>
                </div>
            </div><!-- end col-->
        </div>


        <div class="row">
            <div class="col-xxl-8 col-lg-6">
                <!-- project card -->
                <div class="card d-block">
                    <div class="card-body">
                        <div class="dropdown float-end">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="dripicons-dots-3"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-pencil me-1"></i>Edit</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-delete me-1"></i>Delete</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-email-outline me-1"></i>Invite</a>
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                            </div>
                        </div>
                        <h3 class="mt-0">
                            {{$project->project_name}}
                        </h3>
                        <div class="badge bg-secondary text-light mb-3">Ongoing</div>

                        <div class="row">
                            <div class="row col-xl-12">
                                <div class="col-lg-4 col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="">
                                                    <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">Start Date</h5>
                                                    <h3 class="my-2 py-1 d-flex">
                                                        {{$project->start_date}}
                                                        <p class="mt-2 p-1 text-muted small">
                                                            (Mitter)
                                                        </p>
                                                    </h3>
                                                </div>
                                            </div> <!-- end row-->
                                        </div> <!-- end card-body -->
                                    </div> <!-- end card -->
                                </div> <!-- end col -->
                                <div class="col-lg-4 col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="">
                                                    <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">End Date</h5>
                                                    <h3 class="my-2 py-1 d-flex">
                                                        {{$project->end_date}}
                                                    </h3>
                                                </div>
                                            </div> <!-- end row-->
                                        </div> <!-- end card-body -->
                                    </div> <!-- end card -->
                                </div> <!-- end col -->
                                <div class="col-lg-4 col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="">
                                                    <h5 class="text-muted fw-normal mt-0 text-truncate" title="Due Date">Due Date</h5>
                                                    <h3 class="my-2 py-1 d-flex text-warning">
                                                        {{ now()->diffInDays($project->end_date) }} Days Left
                                                        
                                                    </h3>
                                                </div>
                                            </div> <!-- end row-->
                                        </div> <!-- end card-body -->
                                    </div> <!-- end card -->
                                </div> <!-- end col -->
                            </div>
                            <div class="row col-xl-12">
                                <div class="col-lg-4 col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="">
                                                    <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">Land Area</h5>
                                                    <h3 class="my-2 py-1 d-flex">
                                                        {{$project->land[0]->land_area}}
                                                        <p class="mt-2 p-1 text-muted small">
                                                            ({{$project->land[0]->plot_area_counter}})
                                                        </p>
                                                    </h3>
                                                </div>
                                            </div> <!-- end row-->
                                        </div> <!-- end card-body -->
                                    </div> <!-- end card -->
                                </div> <!-- end col -->
                                <div class="col-lg-4 col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="text-muted fw-normal mt-0 text-truncate">
                                                    <h5 class="mt-0" title="Campaign Sent">Building Area</h5>
                                                    <h3 class="my-2 py-1 d-flex">
                                                        {{$project->land[0]->building_area}}
                                                        <p class="mt-2 p-1 text-muted small">
                                                            ({{$project->land[0]->Building_area_counter}})
                                                        </p>
                                                    </h3>
                                                </div>
                                            </div> <!-- end row-->
                                        </div> <!-- end card-body -->
                                    </div> <!-- end card -->
                                </div> <!-- end col -->
                                <div class="col-lg-4 col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="">
                                                    <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">Total Height</h5>
                                                    <h3 class="my-2 py-1 d-flex">
                                                        {{$project->land[0]->building_height}}
                                                        <p class="mt-2 p-1 text-muted small">
                                                            ({{$project->land[0]->Building_height_counter}})
                                                        </p>
                                                    </h3>
                                                </div>
                                            </div> <!-- end row-->
                                        </div> <!-- end card-body -->
                                    </div> <!-- end card -->
                                </div> <!-- end col -->
                            </div>
                            <div class="row col-xl-12">
                                <div class="col-lg-4 col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="">
                                                    <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">Estimate Budget</h5>
                                                    <h3 class="my-2 py-1 d-flex">
                                                        {{$project->budget}}
                                                        <p class="mt-2 p-1 text-muted small">
                                                            ({{__('BDT')}})
                                                        </p>
                                                    </h3>
                                                </div>
                                            </div> <!-- end row-->
                                        </div> <!-- end card-body -->
                                    </div> <!-- end card -->
                                </div> <!-- end col -->
                                <div class="col-lg-4 col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="">
                                                    <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">Cost</h5>
                                                    <h3 class="my-2 py-1 d-flex">
                                                        9,184
                                                        <p class="mt-2 p-1 text-muted small">
                                                            (Mitter)
                                                        </p>
                                                    </h3>
                                                </div>
                                            </div> <!-- end row-->
                                        </div> <!-- end card-body -->
                                    </div> <!-- end card -->
                                </div> <!-- end col -->
                                <div class="col-lg-4 col-xl-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="">
                                                    <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">Total Height</h5>
                                                    <h3 class="my-2 py-1 d-flex">
                                                        9,184
                                                        <p class="mt-2 p-1 text-muted small">
                                                            (Mitter)
                                                        </p>
                                                    </h3>
                                                </div>
                                            </div> <!-- end row-->
                                        </div> <!-- end card-body -->
                                    </div> <!-- end card -->
                                </div> <!-- end col -->
                            </div>
            
                        </div>
                        <!-- project title-->
                        
                        <h5>{{__('Project Overview')}}:</h5>
                        <div data-simplebar data-simplebar-primary style="max-height: 250px;">

                            @isset($project->project_overview)
                            {!! Str::markdown($project->project_overview) !!}
                                
                            @endisset
                            
                        </div>
                        

                        <div id="tooltip-container">
                            <h5>Team Members:</h5>
                            <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Mat Helme" class="d-inline-block">
                                <img src="assets/images/users/avatar-6.jpg" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                            </a>

                            <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Michael Zenaty" class="d-inline-block">
                                <img src="assets/images/users/avatar-7.jpg" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                            </a>

                            <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="James Anderson" class="d-inline-block">
                                <img src="assets/images/users/avatar-8.jpg" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                            </a>

                            <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Mat Helme" class="d-inline-block">
                                <img src="assets/images/users/avatar-4.jpg" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                            </a>

                            <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Michael Zenaty" class="d-inline-block">
                                <img src="assets/images/users/avatar-5.jpg" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                            </a>

                            <a href="javascript:void(0);" data-bs-container="#tooltip-container" data-bs-toggle="tooltip" data-bs-placement="top" title="James Anderson" class="d-inline-block">
                                <img src="assets/images/users/avatar-3.jpg" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                            </a>
                        </div>

                    </div> <!-- end card-body-->

                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">   
                        <span class="d-flex justify-content-between">
                            <h4 class="mt-0 mb-3">Building Design</h4>
                            <div class="dropdown float-end">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="dripicons-dots-3"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    @if($project->design->count() > 0)                   

                                        <a href="{{ route('design.edit',encrypt($project->design->first()->id))}}" class="dropdown-item">
                                            <i class="mdi mdi-pencil me-1"></i>Edit
                                        </a>
                                        <!-- item-->
                                        <a  href="{{ route('design.destroy',encrypt($project->design->first()->id))}}" class="dropdown-item">
                                            <i class="mdi mdi-delete me-1"></i>Delete
                                        </a>
                                        <!-- item--> 
                                    @else
                                    <a href="{{ route('design.create',encrypt($project->id))}}" class="dropdown-item">
                                        <i class="uil-file-plus-alt  me-1"></i>
                                        Add New Design
                                    </a>  
                                    @endif
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-email-outline me-1"></i>Invite</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item"><i class="mdi mdi-exit-to-app me-1"></i>Leave</a>
                                </div>
                            </div>
                        </span>

                        <div class="border border-1 ">
                            @if($project->design->count() > 0)
                            <img src="{{asset('uploads/design/'.$project->design->first()->document)}}" alt="image" width="100%" class="">
                            @else
                            <p clas="text-muted text-center">
                                No Design Found!
                            </p>
                            <img src="{{asset('assets/images/construction.svg')}}" alt="image" width="100%" class="opacity-25">
                            @endif

                        </div>
                    </div> <!-- end card-body-->
                </div>
                <!-- end card-->
            </div> <!-- end col -->

            <div class="col-lg-6 col-xxl-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Progress</h5>
                        <div dir="ltr">
                            <div class="mt-3 chartjs-chart" style="height: 320px;">
                                <canvas id="line-chart-example"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <span class="d-flex justify-content-between">
                            <h5 class="card-title mb-3">{{__('Documents')}}</h5>
                            <a href="{{route('document.create')}}" class="btn btn-danger rounded-pill mb-3"><i class="mdi mdi-plus"></i>Add</a>
                        </span>

                        <div class="card mb-1 shadow-none border">
                            <div class="p-2">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="avatar-sm">
                                            <span class="avatar-title rounded">
                                                .ZIP
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col ps-0">
                                        <a href="javascript:void(0);" class="text-muted fw-bold">Hyper-admin-design.zip</a>
                                        <p class="mb-0">2.3 MB</p>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Button -->
                                        <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                            <i class="dripicons-download"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-1 shadow-none border">
                            <div class="p-2">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <img src="assets/images/projects/project-1.jpg" class="avatar-sm rounded" alt="file-image" />
                                    </div>
                                    <div class="col ps-0">
                                        <a href="javascript:void(0);" class="text-muted fw-bold">Dashboard-design.jpg</a>
                                        <p class="mb-0">3.25 MB</p>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Button -->
                                        <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                            <i class="dripicons-download"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-0 shadow-none border">
                            <div class="p-2">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-secondary text-light rounded">
                                                .MP4
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col ps-0">
                                        <a href="javascript:void(0);" class="text-muted fw-bold">Admin-bug-report.mp4</a>
                                        <p class="mb-0">7.05 MB</p>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Button -->
                                        <a href="javascript:void(0);" class="btn btn-link btn-lg text-muted">
                                            <i class="dripicons-download"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

    </div> <!-- End Content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> © Hyper - Coderthemes.com
                </div>
                <div class="col-md-6">
                    <div class="text-md-end footer-links d-none d-md-block">
                        <a href="javascript: void(0);">About</a>
                        <a href="javascript: void(0);">Support</a>
                        <a href="javascript: void(0);">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div> <!-- content-page -->


@endsection


@push('scripts')
<!-- third party js -->
<script src="assets/js/vendor/Chart.bundle.min.js"></script>
<!-- third party js ends -->

<!-- demo app -->
<script src="assets/js/pages/demo.project-detail.js"></script>
@endpush