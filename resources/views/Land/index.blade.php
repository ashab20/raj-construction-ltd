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
                            <li class="breadcrumb-item active">Land Details</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Land Details</h4>
                </div>
            </div>
        </div>      
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Land</h4>
                        <div class="tab-content">
                            <div class="tab-pane overflow-auto show active" id="scroll-horizontal-preview">
                                <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                                    <thead>
                                        <tr>
                                            <th>#SL</th>
                                            <th>Squire Feet</th>
                                            <th>House No.</th>
                                            <th>Block</th>
                                            <th>Road No.</th>
                                            <th>Address</th>
                                            <th>Design</th>
                                            <th>Total Budget</th>
                                            <th>Total Cost</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($Lands as $land)
                                        <tr>	 	 	 	 	 	 	 
                                            <td scope="row">{{ ++$loop->index }}</td>
                                            <td>{{ $land->squire_feet}}</td>
                                            <td>{{ $land->house_no}}</td>
                                            <td>{{ $land->block}}</td>
                                            <td>{{ $land->road_no}}</td>
                                            <td>{{ $land->address}}</td>
                                            <td><img width="50px" src="{{ asset('uploads/land/'.$land->design_id)}}" alt=""></td>
                                            <td>{{ $land->total_budget}}</td>
                                            <td>{{ $land->total_cost}}</td>
                                            
                                            <td class="table-action">
                                                <a href="{{ route('document.edit',$land->id)}}" class="action-icon"> <i class="mdi mdi-pencil"></i> </a>                                            
                                                <a href="javascript:void()" onclick="$('#form{{$land->id}}').submit()">
                                                    <i class="mdi mdi-delete"></i>
                                                </a>
                                                <form id="form{{$land->id}}" action="{{ route('document.destroy',$land->id)}}" method="post">
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