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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Constructions</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Floor Details Create</h4>
                </div>
            </div>
        </div>      
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <hr>

                    <div class="tab-content">
                        <div class="tab-pane show active" id="input-types-preview">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="form" method="POST" enctype="multipart/form-data" action="{{ route('floorDetails.update',$floorDetails->id)}}">
                                        @csrf
                                        @method('patch')
                                        <div class="mb-3">
                                            <label for="floorNo" class="form-label">Floor No.</label>
                                            <input type="text" id="floorNo" name="floorNo" value="{{ $floorDetails->floor_no }}" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="tsFeet" class="form-label">Total Squire Feet</label>
                                            <input type="text" id="tsFeet" name="tsFeet" value="{{ $floorDetails->total_squire_feet }}" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label for="tBudget" class="form-label">Total Budget</label>
                                            <input type="text" id="tBudget" name="tBudget" value="{{ $floorDetails->total_cost }}" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label for="tCost" class="form-label">Total Cost</label>
                                            <input type="text" id="tCost" name="tCost" value="{{ $floorDetails->total_budget }}" class="form-control">
                                        </div>

                                        {{-- <div class="mb-3">
                                            <label for="mId" class="form-label">Materials</label>
                                            <input type="text" id="mId" class="form-control" name="mId">
                                        </div> --}}

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div> <!-- end col -->
                                <!-- end col -->
                            </div>
                            <!-- end row-->                      
                        </div> <!-- end preview-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->
@endsection