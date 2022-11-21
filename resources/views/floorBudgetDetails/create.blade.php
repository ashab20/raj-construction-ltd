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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Project</a></li>
                            <li class="breadcrumb-item active">Floor Budget Details Create</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Floor Budget Details Create</h4>
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
                                    <form class="form" enctype="multipart/form-data" method="post" action="{{ route('floorBudgetDetails.store')}}">
                                        @csrf
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="matName" class="form-label">Material Name</label>
                                                <select class="form-control" name="matName" id="matName">
                                                    <option value="">Select Name</option>
                                                    @forelse($matname as $mtn)
                                                        <option value="{{$mtn->id}}" {{ old('matName')==$mtn->id?"selected":""}}> {{ $mtn->material_name}}</option>
                                                    @empty
                                                        <option value="">No data found</option>
                                                    @endforelse
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="quantity" class="form-label">Quantity</label>
                                                <input type="text" id="quantity" name="quantity" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="mPrice" class="form-label">Market Price</label>
                                                <input type="text" id="mPrice" name="mPrice" class="form-control">
                                            </div>
                                            {{-- automaticaly total budget calculate hobe --}}
                                            {{-- <div class="mb-3 col-md-6">
                                                <label for="tBudget" class="form-label">Total Budget</label>
                                                <input type="text" id="tBudget" name="tBudget" class="form-control">
                                            </div> --}} 
                                            <div class="mb-3 col-md-6">
                                                <label for="issueDate" class="form-label">Issues Date</label>
                                                <input type="date" id="issueDate" name="issueDate" class="form-control">
                                            </div>
                                        </div>
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