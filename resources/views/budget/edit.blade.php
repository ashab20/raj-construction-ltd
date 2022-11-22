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
                            <li class="breadcrumb-item active">Material Update</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Material Update</h4>
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
                                    <form class="form" method="post" enctype="multipart/form-data" action="{{ route('material.update',$material->id)}}">
                                        @csrf
                                        @method('patch')
                                        <div class="row">
                                            <div class="mb-3 col-md-4">
                                                <label for="uname" class="form-label">Name</label>
                                                <select class="form-control select2" data-toggle="select2" name="uname" id="uname">
                                                    <option value="">Select Name</option>
                                                    @forelse($projectname as $uName)
                                                        <option value="{{$uName->id}}" {{ old('uname',$material->unit_id)==$uName->id?"selected":""}}> {{ $uName->name}}</option>
                                                    @empty
                                                        <option value="">No data found</option>
                                                    @endforelse
                                                </select>
                                            </div>


                                            <div class="mb-3 col-md-4">
                                                <h4 class="mt-0">Project Name</h4>
                                                <select class="form-control select2" data-toggle="select2" name="projectName" id="projectName">
                                                    <option value="">Select Name</option>
                                                    @forelse($projectname as $pName)
                                                        <option value="{{$pName->id}}" {{ old('projectName')==$pName->id?"selected":""}}> {{ $pName->project_name}}</option>
                                                    @empty
                                                        <option value="">No data found</option>
                                                    @endforelse
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <h4 class="mt-0">Floor No.</h4>
                                                <select class="form-control select2" data-toggle="select2" name="floorno" id="floorno">
                                                    <option value="">Select Name</option>
                                                    @forelse($floorno as $fno)
                                                        <option value="{{$fno->id}}" {{ old('floorno')==$fno->id?"selected":""}}> {{ $fno->floor_no}}</option>
                                                    @empty
                                                        <option value="">No data found</option>
                                                    @endforelse
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <h4 class="mt-0">Piles Height</h4>
                                                <select class="form-control select2" data-toggle="select2" name="pilesheight" id="pilesheight">
                                                    <option value="">Select Name</option>
                                                    @forelse($foundation as $foun)
                                                        <option value="{{$foun->id}}" {{ old('pilesheight')==$foun->id?"selected":""}}> {{ $foun->height}}</option>
                                                    @empty
                                                        <option value="">No data found</option>
                                                    @endforelse
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-4">                                                
                                                <h4 class="mt-0">Total Working Day</h4>
                                                <input type="text" id="totalday" name="totalday" class="form-control">
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <h4 class="mt-0">Total Worker</h4>
                                                <input type="text" id="tworker" name="tworker" class="form-control">
                                            </div>
                                            <div class="mb-3 col-md-4">
                                                <h4 class="mt-0">Issue Date</h4>
                                                <input type="date" id="issuedate" name="issuedate" class="form-control">
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