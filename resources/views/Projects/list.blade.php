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
                            <li class="breadcrumb-item active">Projects List</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Projects</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row mb-2">
            <div class="col-sm-4">
                <a href="{{route('project.create')}}" class="btn btn-danger rounded-pill mb-3"><i class="mdi mdi-plus"></i> Create Project</a>
            </div>
            <div class="col-sm-8">
                <div class="text-sm-end">
                    <div class="btn-group mb-3">
                        <button type="button" class="btn btn-primary">All</button>
                    </div>
                    <div class="btn-group mb-3 ms-1">
                        <button type="button" class="btn btn-light">Ongoing</button>
                        <button type="button" class="btn btn-light">Finished</button>
                    </div>
                    <div class="btn-group mb-3 ms-2 d-none d-sm-inline-block">
                        <button type="button" class="btn btn-secondary"><i class="dripicons-view-apps"></i></button>
                    </div>
                    <div class="btn-group mb-3 d-none d-sm-inline-block">
                        <button type="button" class="btn btn-link text-muted"><i class="dripicons-checklist"></i></button>
                    </div>
                </div>
            </div><!-- end col-->
        </div>
        <!-- end row-->

        <div class="row">
            @forelse($projects as $project)
            <div class="col-md-6 col-xxl-3">
                <!-- project card -->
                <div class="card d-block">
                    <!-- project-thumbnail -->
                    <img class="card-img-top" src="{{asset('/uploads/projects'.$project->project_image)}}" alt="project image cap">
                    <div class="card-img-overlay">
                        @if($project->stage->stage === 'Pending')
                        <div class="badge bg-secondary text-light p-1">{{$project->stage->stage}}</div>
                        @else
                        <div class="badge bg-success mb-3">{{$project->stage->stage}}</div>

                        @endif
                    </div>

                    <div class="card-body position-relative">
                        <!-- project title-->
                        <h4 class="mt-0">
                            <a href="apps-projects-details.html" class="text-title">
                                {{$project->project_name}}
                            </a>
                        </h4>

                        <!-- project detail-->
                        <p class="mb-3">
                            <span class="pe-2 text-nowrap">
                                <i class="mdi mdi-format-list-bulleted-type"></i>
                                <b>21</b> Tasks
                            </span>
                            <span class="text-nowrap">
                                <i class="mdi mdi-comment-multiple-outline"></i>
                                <b>668</b> Comments
                            </span>
                        </p>
                        <div class="mb-3" id="tooltip-container6">
                            <a href="javascript:void(0);" data-bs-container="#tooltip-container6" data-bs-toggle="tooltip" data-bs-placement="top" title="Mat Helme" class="d-inline-block">
                                <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-xs" alt="friend">
                            </a>

                            <a href="javascript:void(0);" data-bs-container="#tooltip-container6" data-bs-toggle="tooltip" data-bs-placement="top" title="Michael Zenaty" class="d-inline-block">
                                <img src="assets/images/users/avatar-7.jpg" class="rounded-circle avatar-xs" alt="friend">
                            </a>

                            <a href="javascript:void(0);" data-bs-container="#tooltip-container6" data-bs-toggle="tooltip" data-bs-placement="top" title="James Anderson" class="d-inline-block">
                                <img src="assets/images/users/avatar-8.jpg" class="rounded-circle avatar-xs" alt="friend">
                            </a>
                            <a href="javascript:void(0);" class="d-inline-block text-muted fw-bold ms-2">
                                +5 more
                            </a>
                        </div>

                        <!-- project progress-->
                        <p class="mb-2 fw-bold">Progress <span class="float-end">71%</span></p>
                        <div class="progress progress-sm">
                            <div class="progress-bar" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;">
                            </div><!-- /.progress-bar -->
                        </div><!-- /.progress -->
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->

            @empty
            <div class="card d-block">
                <div class="card-body">

                    <!-- project title-->
                    <h4 class="mt-0">
                        <a href="apps-projects-details.html" class="text-title">
                            NO data Found
                        </a>
                    </h4>
                </div>
            </div> <!-- end card-->
        </div> <!-- end col -->


        @endforelse


        <!-- project card -->
    </div>
    <!-- end row-->

    <!-- end row-->

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

</div> <!-- end wrapper-->
</div>
<!-- END Container -->


@endsection