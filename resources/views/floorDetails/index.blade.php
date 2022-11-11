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
                    <li class="breadcrumb-item active">Floor</li>
                </ol>
            </div>
            <h4 class="page-title">Floor</h4>
        </div>
    </div>
</div>      
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <a href="{{route('floorDetails.create')}}" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i>Add Floor</a>
                        </div>
                        <div class="col-sm-8">
                            <div class="text-sm-end">
                                <button type="button" class="btn btn-success mb-2 me-1"><i class="mdi mdi-cog"></i></button>
                                <button type="button" class="btn btn-light mb-2 me-1">Import</button>
                                <button type="button" class="btn btn-light mb-2">Export</button>
                            </div>
                        </div><!-- end col-->
                    </div>
    
                    <div class="table-responsive">
                        <table class="table table-centered table-striped dt-responsive nowrap w-100" id="products-datatable">
                                <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Floor No.</th>
                                        <th>Total Squire Feet</th>
                                        <th>Total Budget</th>
                                        <th>Total Cost</th>
                                        <th>Satus</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($floorDetails as $fDetails)
                                    <tr>	 	 	 	 	 	 
                                        <td scope="row">{{ ++$loop->index }}</td>
                                        <td>{{ $fDetails->floor_no}}</td>
                                        <td>{{ $fDetails->total_squire_feet}}</td>
                                        <td>{{ $fDetails->total_budget}}</td>
                                        <td>{{ $fDetails->total_cost}}</td>
                                        <td>
                                            @if ($fDetails->status === 1)
                                            <span class="badge badge-success-lighten">Active</span>
                                            @else                                   
                                                <span class="badge badge-danger-lighten">Blocked</span>
                                            
                                            @endif
                                        </td>
                                        <td class="table-action">
                                            <a href="{{ route('land.edit',$fDetails->id)}}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i> </a>                                            
                                            <a href="javascript:void()" onclick="$('#form{{$fDetails->id}}').submit()">
                                                <i class="mdi mdi-delete"></i>
                                            </a>
                                            <form id="form{{$fDetails->id}}" action="{{ route('land.destroy',$fDetails->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                            </form>
                                        </td>
                                    </tr>                                      
                                    @empty
                                        <tr>
                                            <td colspan="10" class="text-center">No Data Found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>                                          
                        </div> <!-- end preview-->
                    </div> <!-- end tab-content-->
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->
</div>
@endsection