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
        <!-- mini header -->
        <!-- Path: view/components/project/header -->
        <x-project.header :project="$project" />
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <!-- mini side bar -->
                    <!-- Path: view/components/project/sidebar -->
                    <!-- start projects-->
                    <x-project.sidebar :project="$project" />
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
                                            <input class="btn-check" type="radio" name="modes" id="qday" value="Quarter Day"> Quarter Day
                                        </label>
                                        <label class="btn btn-primary">
                                            <input class="btn-check" type="radio" name="modes" id="hday" value="Half Day"> Half Day
                                        </label>
                                        <label class="btn btn-primary">
                                            <input class="btn-check" type="radio" name="modes" id="day" value="Day"> Day
                                        </label>
                                        <label class="btn btn-primary active">
                                            <input class="btn-check" type="radio" name="modes" id="week" value="Week" checked> Week
                                        </label>
                                        <label class="btn btn-primary">
                                            <input class="btn-check" type="radio" name="modes" id="month" value="Month"> Month
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!-- Path: view/components/project/ -->
                            <x-project.overview :project="$project" />
                            <x-project.project-info :project="$project" />
                            <x-project.project-test :project="$project" />
                            <x-project.project-design :project="$project" />
                            <x-project.project-budget :project="$project" />
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
<script src="{{asset('assets/js/vendor/apexcharts.min.js')}}"></script>

<script src="{{asset('assets/js/pages/demo.dashboard-crm.js')}}"></script>
<script>
    // content button
    let overbtn = $('#overbtn');
    let projectInfoBtn = $('#project_info_btn');
    let projectTestBtn = $('#project_test_btn');
    let projectDesignBtn = $('#project_design_btn');
    let projectBudgetBtn = $('#project_budget_btn');
    let projectManagment = $('#project_managment');

    // content 
    let overview = $('#overview');
    let projectInfo = $('#project-info');
    let projectTest = $('#project_test');
    let projectDesign = $('#project_design');
    let projectBudget = $('.project_budget');



    // button action function
    // overview
    overbtn.click(function(e) {
        overview.removeClass('d-none');
        overbtn.addClass('bg-light');

        projectInfo.addClass('d-none');
        projectInfoBtn.removeClass('bg-light');
        projectTest.addClass('d-none');
        projectTestBtn.removeClass('bg-light');

    });
    // project info
    projectInfoBtn.click(function(e) {
        projectInfo.removeClass('d-none');
        projectInfoBtn.addClass('bg-light');

        overview.addClass('d-none');
        overbtn.removeClass('bg-light');
        projectTest.addClass('d-none');
        projectTestBtn.removeClass('bg-light');
    });

    // project test
    projectTestBtn.click(function(e) {
        projectTest.removeClass('d-none');
        projectTestBtn.addClass('bg-light');

        overview.addClass('d-none');
        overbtn.removeClass('bg-light');
        projectInfo.addClass('d-none');
        projectInfoBtn.removeClass('bg-light');
        projectDesign.addClass('d-none');
        projectDesignBtn.removeClass('bg-light');
    });

    projectDesignBtn.click(function(e) {
        projectDesign.removeClass('d-none');
        projectDesignBtn.addClass('bg-light');

        overview.addClass('d-none');
        overbtn.removeClass('bg-light');
        projectInfo.addClass('d-none');
        projectInfoBtn.removeClass('bg-light');
        projectTest.addClass('d-none');
        projectTestBtn.removeClass('bg-light');
        projectBudget.addClass('d-none');
        projectBudgetBtn.removeClass('bg-light');
    });

    // project budget
    projectBudgetBtn.click(function(e) {
        projectBudget.toggleClass('d-none');
        projectBudgetBtn.addClass('bg-light');

        projectDesign.addClass('d-none');
        projectDesignBtn.removeClass('bg-light');

        overview.addClass('d-none');
        overbtn.removeClass('bg-light');
        projectInfo.addClass('d-none');
        projectInfoBtn.removeClass('bg-light');
        projectTest.addClass('d-none');
        projectTestBtn.removeClass('bg-light');
        
    });

    // data-leftbar-compact-mode="condensed"
</script>



@endpush