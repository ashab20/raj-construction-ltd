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
                                
                                @php
                                    $purchase_details = DB::table('purchase_details')->get();
                                @endphp
                                {{$purchase_details}}


                                @forelse ($purchase_details as $item)
                                    <br><h3>{{$item->sub_total}}</h3>
                                @empty
                                    <br>
                                @endforelse
                                
                                    {{$materials}}
                                {{-- {{$materials as $material->qty}} --}}
                                <tbody>
                                    @forelse ($purchases as $purchase)
                                        <tr>
                                            {{-- {{$purchase}} --}}
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
                <h4 class="modal-title" id="NewTaskModalLabel">Invoice</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- Invoice Logo-->
                                <div class="clearfix">
                                    <div class="float-start mb-3">
                                        <img src="{{ asset('assets/images/logo-light.png')}}" alt="" height="18">
                                    </div>
                                    <div class="float-end">
                                        <h4 class="m-0 d-print-none">Invoice</h4>
                                    </div>
                                </div>

                                <!-- Invoice Detail-->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="float-end mt-3">
                                            <p><b>Hello, Cooper Hobson</b></p>
                                            <p class="text-muted font-13">Please find below a cost-breakdown for the recent work completed. Please make payment at your earliest convenience, and do not hesitate to contact me with any questions.</p>
                                        </div>
    
                                    </div><!-- end col -->
                                    <div class="col-sm-4 offset-sm-2">
                                        <div class="mt-3 float-sm-end">
                                            <p class="font-13">
                                                <strong>Purchase Date: </strong> &nbsp;&nbsp;&nbsp; <span id="materialData"></span>
                                            </p>
                                            <p class="font-13"><strong>Order Status: </strong> <span class="badge bg-success float-end">Paid</span></p>
                                            <p class="font-13"><strong>Order ID: </strong> <span class="float-end">#123456</span></p>
                                        </div>
                                    </div><!-- end col -->
                                </div>
                                <!-- end row -->
    
                                <div class="row mt-4">
                                    <div class="col-sm-4">
                                        <h6>Billing Address</h6>
                                        <address>
                                            Lynne K. Higby<br>
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                            <abbr title="Phone">P:</abbr> (123) 456-7890
                                        </address>
                                    </div> <!-- end col-->
    
                                    <div class="col-sm-4">
                                        <h6>Shipping Address</h6>
                                        <address>
                                            Cooper Hobson<br>
                                            795 Folsom Ave, Suite 600<br>
                                            San Francisco, CA 94107<br>
                                            <abbr title="Phone">P:</abbr> (123) 456-7890
                                        </address>
                                    </div> <!-- end col-->
    
                                    <div class="col-sm-4">
                                        <div class="text-sm-end">
                                            <img src="{{ asset('assets/images/barcode.png')}}" alt="barcode-image" class="img-fluid me-2" />
                                        </div>
                                    </div> <!-- end col-->
                                </div>    
                                <!-- end row -->        

                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table mt-4">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Item</th>
                                                        <th>Quantity</th>
                                                        <th>Unit Cost</th>
                                                        <th class="text-end">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td></td>
                                                        <td id="materialname"></td>
                                                        <td id="materialquantity">1</td>
                                                        <td>$1799.00</td>
                                                        <td id="materialTotal" class="text-end"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> <!-- end table-responsive-->
                                    </div> <!-- end col -->
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="clearfix pt-3">
                                            <h6 class="text-muted">Notes:</h6>
                                            <small id="materialnote">
                                                
                                    {{-- {"id":2,"created_at":"2022-12-27T18:37:05.000000Z","updated_at":"2022-12-27T18:37:05.000000Z","purchase_date":"2022-12-28","voucher":"5471672166225.jpg","tax":15,"discount":0,"total_cost":28750,"payment":28750,"note":"This is for a test.","status":1,"purchase_by":3,"created_by":3,"updated_by":null,"deleted_at":null,"name":"Sand","quantity_name":"feet","quantity":"50"}  --}}
                                            </small>
                                        </div>
                                    </div> <!-- end col -->
                                    <div class="col-sm-6">
                                        <div class="float-end mt-3 mt-sm-0">
                                            <p><b>Sub-total:</b> <span class="float-end">$4120.00</span></p>
                                            <p><b>VAT:</b> <span class="float-end" id="materialtax"></span></p>
                                            <h3 id="materialTotalCost"></h3>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div> <!-- end col -->
                                </div>
                                <!-- end row-->

                                <div class="d-print-none mt-4">
                                    <div class="text-end">
                                        <a href="javascript:window.print()" class="btn btn-primary"><i class="mdi mdi-printer"></i> Print</a>
                                        {{-- <a href="javascript: void(0);" class="btn btn-info">Submit</a> --}}
                                    </div>
                                </div>   
                                <!-- end buttons -->

                            </div> <!-- end card-body-->
                        </div> <!-- end card -->
                    </div> <!-- end col-->
                </div>
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
                        <td>${data.purchase_date}</td>
                    </tr>
                `;

            $('#materialData').html(content);
            content = `
                    ${data.note}
                `;

            $('#materialnote').html(content);

            content = `
                    ${data.name}
                `;
            $('#materialname').html(content);
            
            content = `
                    ${data.quantity}
                `;
            $('#materialquantity').html(content);

            content = `${data.total_cost - data.tax}`;
            $('#materialTotal').html(content);

            content = `${data.total_cost}`;
            $('#materialTotalCost').html(content);

            content = `
                    ${data.tax}
                `;
            $('#materialtax').html(content);
        }
    </script>
@endpush