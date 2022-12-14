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
                            <form action="{{ route('purchase.store')}}" enctype="multipart/form-data" method="post">
                                @csrf
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
                                        <input type="date" class="form-control date" name="date">
                                    </div>
                                </div>
                                <x-Stock.repeater />
                                {{-- price 	discount 	tax 	 --}}
                                <div class="form-group my-4">
                                    <div class="row p-0 m-0">
                                        <div class="col-6">
                                            <div>
                                                <label for="note" class="form-label">Note:</label>
                                                <textarea class="form-control" id="note" placeholder="Enter Note" rows="12" name="note"></textarea>
                                            </div>                                        
                                        </div>
                                        <div class="col-6">
                                            <div>
                                                <label for="sub_amount" class="form-label">Sub Amount:</label>
                                                <input type="number" class="form-control" id="sub_amount" placeholder="Enter Sub Amount" name="subtotal" readonly>
                                            </div>
                                            <div>
                                                <label for="discount" class="form-label">Discount:</label>
                                                <input type="number" class="form-control" id="discount" placeholder="Enter Discount" name="discount" value="0" onkeyup="totalCounter()">
                                            </div>
                                            <div>
                                                <label for="tax" class="form-label">Tax (%):</label>
                                                <input type="number" class="form-control" id="tax" placeholder="Enter Tax" name="tax"  value="0" onkeyup="totalCounter()" >
                                            </div>
                                            <div>
                                                <label for="total_amount" class="form-label">Total Amount:</label>
                                                <input type="number" value="0" class="form-control" id="total_amount" placeholder="Enter Total Amount" name="total" readonly>
                                            </div>
                                            <div>
                                                <label for="payment" class="form-label">Pay Amount:</label>
                                                <input type="number" value="0" class="form-control" id="payment" placeholder="Enter Pay Amount" name="payment">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-10 offset-1 d-flex justify-content-end">

                                    <button type="reset" class="btn btn-warning mt-2 mx-1"><i class="mdi mdi-content-save"></i> Reset</button>
                                    <button type="submit" class="btn btn-success mt-2"><i class="mdi mdi-content-save mx-1"></i> Save</button>
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

@push('scripts')
    
<script>
    // scuffholding
    let rate = $('.rate');
    let qty = $('.qty');
    let price = $('.price');
    let subtotalField = $('#sub_amount');

    // default value
    parseFloat(qty.val(1));
    parseFloat(price.val(0));
    parseFloat(subtotalField.val(0));

    // action
    // totalCounter
    function totalCounter(){
        let subTotal = parseFloat(subtotalField.val());
        let discount = parseFloat($('#discount').val());
        let tax = parseFloat($('#tax').val());

        if(!sub_amount)subTotal=0;
        if(!discount)discount=0;
        if(tax>0){
            tax = subTotal*(tax/100)
        }else{
            tax = 0;
        }
        let total = Math.round(subTotal - discount + tax);

        

         total = $('#total_amount').val(total);
    }



    // subtotalcount
    function subtotalCounter(){
        let subTotal = 0 
        $('.purdata').find('.price').each(function(e){
            subTotal += parseFloat($(this).val())
        })

        subtotalField.val(subTotal);
        totalCounter();
    }

   

    // price handle change
    function getRateHandler(e){ 
        let quantity = $(e).closest('.row').find('.qty').val();
        let priceFielt = $(e).closest('.row').find('.price');

        amount =  parseFloat(e.value * quantity);
        priceFielt.val(amount);
        subtotalCounter();
        totalCounter();
    }


    // quantity handle changes
    function getQuntityHandler(e){   
        let rate = $(e).closest('.row').find('.rate').val();
        let priceFielt = $(e).closest('.row').find('.price');

        amount =  parseFloat(rate * e.value );

        priceFielt.val(amount);
        subtotalCounter();
    }

    function handleUnitChange(e){
        $(e).closest('.row').find('.rate').val(0);
        $(e).closest('.row').find('.qty').val(1);
        $(e).closest('.row').find('.price').val(0);
        $(e).closest('.row').find('.type').val();
    

    }


</script>

@endpush