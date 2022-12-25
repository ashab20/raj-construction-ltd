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
                            <li class="breadcrumb-item active">Design Edit</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Design Edit</h4>
                </div>                     
            </div>
        </div>                                                                  
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <form class="form" method="post" enctype="multipart/form-data" action="{{route('design.update',$designDetail->id)}}">
                                @csrf
                                @method('patch')
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-floating">
                                            <div>
                                                <label for="desiname" class="form-label">{{__('Designer')}}: </label>
                                                <select  class="form-control select2" data-toggle="select2" name="desiname" required>
                                                    <option value="" >Select Designer</option>
                                                    @forelse ($employee as $em)
                                                        <option value="{{$em->id}}" {{old('desiname',$designDetail->designer_id) === $em->id?'selected':''}}>{{$em->name}}</option>
                                                    @empty
                                                        <option value="" disabled>{{__('No data found!')}}</option>
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div>
                                            <label for="designdetails" class="form-label">Details</label>
                                            <textarea class="form-control" id="designdetails" placeholder="Enter designdetails" rows="5" name="designdetails">{{ old('designdetails',$designDetail->design_details)}}</textarea>
                                        </div>                                        
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label" for="document">Document</label>
                                        <input class="form-control" value="{{ old('document',$designDetail->document)}}" name="document" id="document" type="file">
                                    </div>
                                </div>
                                <div class="form-group my-4">
                                    <div class="row p-0 m-0">
                                        <div class="col-6">
                                            <div>
                                                <label for="designdetails" class="form-label">Details</label>
                                                <textarea class="form-control" id="designdetails" placeholder="Enter designdetails" rows="5" name="designdetails">{{ old('designdetails',$designDetail->design_details)}}</textarea>
                                            </div>                                        
                                        </div>
                                        <div class="col-6">
                                            <div class="col-lg-12">
                                                <label class="form-label" for="document">Document</label>
                                                <input class="form-control" value="{{ old('document',$designDetail->document)}}" name="document" id="document" type="file">
                                            </div>
                                            {{-- <div class="mb-3">
                                                <label for="bsfeet" class="form-label">Building squire feet</label>
                                                <input type="number" value="{{ old('bsfeet',$designDetail->building_squire_feet)}}" id="bsfeet" name="bsfeet" class="form-control">
                                            </div>
                                            <div class="mb-3">
                                                <label for="tfnumber" class="form-label">Total floor number</label>
                                                <input type="number" value="{{ old('tfnumber',$designDetail->total_floor_number)}}" id="tfnumber" name="tfnumber" class="form-control">
                                            </div> --}}
                                        </div>
                                    </div>                                        
                                </div>
                                
                                
                                
                                <button type="submit" class="btn btn-primary">Submit</button>

                            </form>         
                        </div> <!-- end preview-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->
@endsection