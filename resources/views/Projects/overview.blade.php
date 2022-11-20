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
                            <li class="breadcrumb-item active">Gantt</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Projects</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <!-- start projects-->
                    <div class="col-xxl-3 col-lg-4">
                        <div class="pe-xl-3">
                            <h5 class="mt-0 mb-3">Projects</h5>
                            <!-- start search box -->
                            <div class="app-search">
                                <form>
                                    <div class="mb-2 position-relative">
                                        <input type="text" class="form-control"
                                            placeholder="search by name..." />
                                        <span class="mdi mdi-magnify search-icon"></span>
                                    </div>
                                </form>
                            </div>
                            <!-- end search box -->

                            <div class="row">
                                <div class="col">
                                    <div data-simplebar style="max-height: 535px;">
                                        <a href="javascript:void(0);" class="text-body">
                                            <div class="d-flex mt-2 p-2">
                                                <div class="avatar-sm d-table">
                                                    <span class="avatar-title bg-success-lighten rounded-circle text-success">
                                                        <i class='uil uil-moonset font-24'></i>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    <h5 class="mt-0 mb-0">
                                                        Overview
                                                        <span class="badge badge-success-lighten ms-1">On Track</span>
                                                    </h5>
                                                    <p class="mt-1 mb-0 text-muted">
                                                        ID: proj101
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:void(0);" class="text-body">
                                            <div class="d-flex bg-light p-2">
                                                <div class="avatar-sm d-table">
                                                    <span
                                                        class="avatar-title bg-success-lighten rounded-circle text-success">
                                                        <i class='uil uil-moon-eclipse font-24'></i>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    <h5 class="mt-0 mb-0">
                                                        Project Informations
                                                        <span class="badge badge-success-lighten ms-1">On
                                                            Track</span>
                                                    </h5>
                                                    <p class="mt-1 mb-0 text-muted">
                                                        ID: proj102
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="text-body">
                                            <div class="d-flex bg-light p-2">
                                                <div class="avatar-sm d-table">
                                                    <span
                                                        class="avatar-title bg-success-lighten rounded-circle text-success">
                                                        <i class='uil uil-moon-eclipse font-24'></i>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    <h5 class="mt-0 mb-0">
                                                        Test
                                                        <span class="badge badge-success-lighten ms-1">On
                                                            Track</span>
                                                    </h5>
                                                    <p class="mt-1 mb-0 text-muted">
                                                        ID: proj102
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="text-body">
                                            <div class="d-flex mt-1 px-2 py-2">
                                                <div class="avatar-sm d-table">
                                                    <span
                                                        class="avatar-title bg-warning-lighten rounded-circle text-warning">
                                                        <i class='uil uil-moon font-24'></i>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    <h5 class="mt-0 mb-0">
                                                        Design
                                                        <span
                                                            class="badge badge-warning-lighten ms-1">Locked</span>
                                                    </h5>
                                                    <p class="mt-1 mb-0 text-muted">
                                                        ID: proj104
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="text-body">
                                            <div class="d-flex mt-1 px-2 py-2">
                                                <div class="avatar-sm d-table">
                                                    <span
                                                        class="avatar-title bg-warning-lighten rounded-circle text-warning">
                                                        <i class='uil uil-mountains font-24'></i>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    <h5 class="mt-0 mb-0">
                                                        Estimate Budget
                                                        <span class="badge badge-warning-lighten ms-1">Locked</span>
                                                    </h5>
                                                    <p class="mt-1 mb-0 text-muted">
                                                        ID: proj103
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:void(0);" class="text-body">
                                            <div class="d-flex mt-1 px-2 py-2">
                                                <div class="avatar-sm d-table">
                                                    <span
                                                        class="avatar-title bg-warning-lighten rounded-circle text-warning">
                                                        <i class='uil uil-moon font-24'></i>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    <h5 class="mt-0 mb-0">
                                                        Project Managment
                                                        <span
                                                            class="badge badge-warning-lighten ms-1">Locked</span>
                                                    </h5>
                                                    <p class="mt-1 mb-0 text-muted">
                                                        ID: proj104
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        

                                        <a href="javascript:void(0);" class="text-body">
                                            <div class="d-flex mt-1 px-2 py-2">
                                                <div class="avatar-sm d-table">
                                                    <span
                                                        class="avatar-title bg-danger-lighten rounded-circle text-danger">
                                                        <i class='uil uil-ship font-24'></i>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    <h5 class="mt-0 mb-0">
                                                        Worker List
                                                        <span
                                                            class="badge badge-danger-lighten ms-1">Delayed</span>
                                                    </h5>
                                                    <p class="mt-1 mb-0 text-muted">
                                                        ID: proj106
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:void(0);" class="text-body">
                                            <div class="d-flex mt-1 px-2 py-2">
                                                <div class="avatar-sm d-table">
                                                    <span
                                                        class="avatar-title bg-success-lighten rounded-circle text-success">
                                                        <i class='uil uil-subway-alt font-24'></i>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    <h5 class="mt-0 mb-0">
                                                        Darwin
                                                        <span class="badge badge-success-lighten ms-1">On
                                                            Track</span>
                                                    </h5>
                                                    <p class="mt-1 mb-0 text-muted">
                                                        ID: proj107
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:void(0);" class="text-body">
                                            <div class="d-flex mt-1 px-2 py-2">
                                                <div class="avatar-sm d-table">
                                                    <span
                                                        class="avatar-title bg-danger-lighten rounded-circle text-danger">
                                                        <i class='uil uil-gold font-24'></i>
                                                    </span>
                                                </div>
                                                <div class="ms-2">
                                                    <h5 class="mt-0 mb-0">
                                                        Eagle
                                                        <span class="badge badge-danger-lighten ms-1">Delayed</span>
                                                    </h5>
                                                    <p class="mt-1 mb-0 text-muted">
                                                        ID: proj108
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end projects -->

                    <!-- gantt view -->
                    <div class="col-xxl-9 mt-4 mt-xl-0 col-lg-8">
                        <div class="ps-xl-3">
                            <div class="row">
                                <div class="col-auto">
                                    <a href="javascript: void(0);" class="btn btn-success btn-sm mb-2">Add New Task</a>
                                </div>
                                <div class="col text-sm-end">
                                    <div class="btn-group btn-group-sm mb-2" data-bs-toggle="buttons" id="modes-filter">
                                        <label class="btn btn-primary d-none d-sm-inline-block">
                                            <input  class="btn-check" type="radio" name="modes" id="qday" value="Quarter Day"> Quarter Day
                                        </label>
                                        <label class="btn btn-primary">
                                            <input  class="btn-check" type="radio" name="modes" id="hday" value="Half Day"> Half Day
                                        </label>
                                        <label class="btn btn-primary">
                                            <input  class="btn-check" type="radio" name="modes" id="day" value="Day"> Day
                                        </label>
                                        <label class="btn btn-primary active">
                                            <input  class="btn-check" type="radio" name="modes" id="week" value="Week" checked> Week
                                        </label>
                                        <label class="btn btn-primary">
                                            <input  class="btn-check" type="radio" name="modes" id="month" value="Month"> Month
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            
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
                        </div>
                    </div>
                    <!-- end gantt view -->
                </div>
            </div>
        </div>
        
    </div> <!-- End Content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
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
<script src="{{asset('assets/js/vendor/apexcharts.min.js')}}"></script>

<script src="{{asset('assets/js/pages/demo.dashboard-crm.js')}}"></script>
<script>

    $('#condensed-check').prop('checked', true);
</script>
@endpush