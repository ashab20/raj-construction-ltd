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
                    <h4 class="page-title">Create Flats</h4>
                </div>                     
            </div>
        </div>   
                                                               
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit Flat</h4>
                    <hr>

                    <div class="tab-content">
                        <div class="tab-pane show active" id="input-types-preview">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="form" method="post" action="{{route('flat.update',$flat)}}">
                                        @csrf
                                        @method('patch')
                                        <div class="mb-3">
                                            <label for="flatname" class="form-label">Flat Name </label>
                                            <input type="text" value="{{ old('flatname',$flat->flat)}}" id="flatname" name="flatname" class="form-control">
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