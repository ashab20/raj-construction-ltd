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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Form Elements</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Form Elements</h4>
                </div>                     
            </div>
        </div>                                                                  
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Design</h4>
                    <hr>

                    <div class="tab-content">
                        <div class="tab-pane show active" id="input-types-preview">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="form" method="post" enctype="multipart/form-data" action="{{route('design.update',$design->id)}}">
                                        @csrf
                                        @method('patch')
                                        <div class="mb-3">
                                            <label for="desiname" class="form-label">Designer Name</label>
                                            <input type="text" value="{{ old('desiname',$design->designer_id)}}" id="desiname" name="desiname" class="form-control">
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <label for="document">Document</label>
                                                <input class="form-control" value="{{ old('document',$design->document)}}" name="document" id="document" type="file">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="bsfeet" class="form-label">Building squire feet</label>
                                            <input type="number" value="{{ old('bsfeet',$design->building_squire_feet)}}" id="bsfeet" name="bsfeet" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="tfnumber" class="form-label">Total floor number</label>
                                            <input type="number" value="{{ old('tfnumber',$design->total_floor_number)}}" id="tfnumber" name="tfnumber" class="form-control">
                                        </div>
                                        <div class="mb-3">
                                            <label for="designdetails" class="form-label">design details</label>
                                            <textarea class="form-control"  id="designdetails" name="designdetails" rows="5">{{ old('designdetails',$design->design_details)}}</textarea>
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