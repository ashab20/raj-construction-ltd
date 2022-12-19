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
        @php
            print_r($purchases);    
        @endphp
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
                            
                            
                                <tbody>
                                    @forelse ($purchases as $purchase)
                                        <tr>
                                            <td>{{ $purchase->purchase_date }}</td>
                                            <td>{{ $purchase->name}}</td>
                                            <td>{{ $purchase->quantity}} {{$purchase->quantity_name}}</td>
                                            <td>{{ $purchase->total_cost }}</td>
                                            <td>{{ $purchase->payment }}</td>
                                            <td>{{ $purchase->purchase_by }}</td>
                                            <td>{{ $purchase->voucher }}</td>
                                            <td>{{ $purchase->note }}</td>
                                            <td></td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">No Data Found</td>
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
@endsection