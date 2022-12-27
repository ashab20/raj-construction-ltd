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
                            <li class="breadcrumb-item"><a href="{{ route('purchase.index')}}">{{__('Home')}}</a></li>
                            <li class="breadcrumb-item active">
                                {{__('Purchase')}}
                            </li>
                        </ol>
                    </div>
                    <h4 class="page-title">Purchase</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 
    
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <a href="{{route('purchase.create')}}" class="btn btn-danger mb-2"><i class="mdi mdi-plus-circle me-2"></i> Add Purchase</a>
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
                            @if(Session::has('response'))
                            {!!Session::get('response')['message']!!}
                            @endif
                            {{-- table --}}
                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                                <thead>
                                    {{-- purchase_date 	voucher 	tax 	discount 	total_cost 	payment 	note  $purchases--}}
                                    <tr>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Total Cost</th>
                                        <th>Payment</th>
                                        <th>Purchase By</th>
                                        <th>Voucher</th>
                                        <th>Note</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @php
                                    $materials = DB::table('materials')->get();
                                @endphp
                                
                                    {{-- {{$materials}} --}}
                                {{-- {{$materials as $material->qty}} --}}
                                <tbody>
                                    @forelse ($purchases as $purchase)
                                        <tr>
                                            <td>{{ $purchase->purchase_date }}</td>
                                            <td>{{ $purchase->name }}</td>
                                            <td>{{ $purchase->quantity }} {{ $purchase->quantity_name }}</td>
                                            <td>{{ $purchase->total_cost }}</td>
                                            <td>{{ $purchase->payment }}</td>
                                            <td>{{ $purchase->purchase?->name }}</td>
                                            <td>{{ $purchase->voucher }}</td>
                                            <td>{{ $purchase->note }}</td>
                                            <td class="d-flex">
                                                {{-- <a href="{{route('purchaseDetails.index',$purchase)}}" class="action-icon">
                                                    <i class="uil-list-ul"></i>
                                                </a> --}}
                                                <button href="#" data-bs-toggle="modal" data-bs-target="#add-new-task-modal" class="btn btn-sm" onclick="getPurchase({{$purchase}})">
                                                    <i class="mdi mdi-clipboard-text-outline"></i>
                                                </a></h4>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="9" class="text-center">No Data Found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{-- table close --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



  <!--  Add new task modal -->
  <div class="modal fade task-modal-content" id="add-new-task-modal" tabindex="-1" role="dialog" aria-labelledby="NewTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="NewTaskModalLabel">Create New Task</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table>
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr id="materialData">
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



@endsection

@push('scripts')
    <script>
        function getPurchase(data){
            console.log(data);
            content = `
                    <tr>
                        <td>${data.name}</td>
                    </tr>
                `;

            $('#materialData').html(content);
        }
    </script>
@endpush