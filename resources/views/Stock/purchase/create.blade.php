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
                            <form action="">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <div>
                                                <label class="form-label">{{__('Voucher')}}</label>
                                                <input type="file" class="form-control" name="voucher">
                                                <p class="text-muted font-14">Recommended thumbnail size 800x400 (px).</p>
                                            </div>
                                        </div>
                                    </div>
{{-- 
                                    <div class="col-xl-4 mb-3 mt-3 mt-xl-0">
                                        <label for="projectname" class="mb-0">{{__('Project thumbnail')}} : </label>
                                        
                                            <input class="form-control" type="file" id="inputGroupFile04" name="projectImage"
                                            value="{{old('projectImage')}}">
                                            <p class="text-muted font-14">Recommended thumbnail size 800x400 (px).</p>
                                    </div> --}}


                                    <div  class="col-lg-4"></div>
                                    <div class="mb-3 col-lg-4">
                                        <label class="form-label">Date</label>
                                        <input type="text" class="form-control date">
                                    </div>
                                </div>
                                <x-Stock.repeater />
                                {{-- price 	discount 	tax 	 --}}
                                <div class="form-group my-4">
                                    <div class="row p-0 m-0">
                                      <div class="col-6">
                                        <div>
                                            <label for="note" class="form-label text-success">Note:</label>
                                            <textarea class="form-control" id="note" placeholder="Enter Note" rows="12" name="note"></textarea>
                                        </div>                                        
                                      </div>
                                      <div class="col-6">
                                        <div>
                                          <label for="sub_amount" class="form-label text-success">Sub Amount:</label>
                                          <input type="number" class="form-control" id="sub_amount" placeholder="Enter Sub Amount" name="subtotal">
                                        </div>
                                        <div>
                                          <label for="discount" class="form-label text-success">Discount:</label>
                                          <input type="number" class="form-control" id="discount" placeholder="Enter Discount" name="discount" value="0">
                                        </div>
                                        <div>
                                          <label for="tax" class="form-label text-success">Tax (%):</label>
                                          <input type="number" class="form-control" id="tax" placeholder="Enter Tax" name="tax"  value="0" >
                                        </div>
                                        <div>
                                          <label for="total_amount" class="form-label text-success">Total Amount:</label>
                                          <input type="number" value="0" class="form-control" id="total_amount" placeholder="Enter Total Amount" name="total">
                                        </div>
                                        <div>
                                          <label for="payment" class="form-label text-success">Pay Amount:</label>
                                          <input type="number" value="0" class="form-control" id="payment" placeholder="Enter Pay Amount" name="payment">
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection