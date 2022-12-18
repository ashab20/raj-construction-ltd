<div class="form-group">
    <div class="row bg-light p-2 rounded-top">
        <div class="col-1"></div>  
        <div class="col-2 text-center">
            <label for="">Name</label>
        </div>
        <div class="col-2 text-center">
            <label for="">Date</label>
        </div>
        <div class="col-1 text-center">
            <label for="">Tax</label>
        </div>
        <div class="col-1 text-center">
            <label for="">Discount</label>
        </div>
        <div class="col-1 text-center">
            <label for="">Total Cost</label>
        </div>
        <div class="col-1 text-center">
            <label for="">Payment</label>
        </div>
        <div class="col-2 text-center">
            <label for="">Note</label>
        </div>
        <div class="col-1 text-center">
            <label for="">Voucher</label>
        </div>
    </div>

    {{-- purchase_date 	voucher 	tax 	discount 	total_cost 	payment 	note  $purchases--}}

    <!-- outer repeater -->
    <div class="repeater">
        <div data-repeater-list="outer-list">
            <div  data-repeater-item class="row mt-2">
                <div class="col-1 mx-2">
                    <button class="btn bg-danger text-white btn-sm mt-1" data-repeater-delete type="button">
                        <i class="mdi mdi-minus-circle"></i>
                    </button>
                </div>

                @php
                    $units = DB::table('units')->get();                        
                @endphp

                <div class="col-2 mx-1">
                    <!-- <div class="p-0"> -->
                    {{-- unit (rod) quantiry(pelam) --}}
                    <select name="unitName" class="form-select" onchange="product_add(this)">
                        <option value="">Select Name</option>
                        @forelse ($units as $uName)
                            <option value="{{$uName->id}}">{{ $uName->name }}</option>
                        @empty
                            <option>No data found</option>
                        @endforelse
                    </select>
                    <!-- </div> -->
                </div>                               
                <div class="col-2 p-0 mx-1">
                    {{-- <input type="date" class="form-control descirbe" name="date" onkeyup="get_count(this)"> --}}
                </div>
                <div class="col-1 p-0 mx-1">
                    <input type="text" onkeyup="get_pricecount(this)" class="form-control price" name="tax[]">
                </div>
                <div class="col-1 p-0 mx-1">
                    <input type="text" onkeyup="get_pricecount(this)" class="form-control price" name="discount[]">
                </div>
                <div class="col-1 p-0 mx-1">
                    <input readonly type="text" class="form-control sub bg-white" name="total">
                </div>
                <div class="col-1 p-0 mx-1">
                    <input type="text" onkeyup="get_pricecount(this)" class="form-control price" name="payment">
                </div>
                <div class="col-1 p-0 mx-1">
                    <input type="text" class="form-control descirbe" name="note" onkeyup="get_count(this)">
                </div>                
                <div class="col-1 p-0 mx-1">
                    <input type="file" class="form-control descirbe" name="voucher" onkeyup="get_count(this)">
                </div>                
            </div>
        </div>
        <div class="col-2" >
          <button class="btn bg-primary m-2 text-white btn-sm" data-repeater-create type="button">
            <i class="mdi mdi-plus-circle"></i>
          </button>
        </div>

        <div class="col-10 offset-1 d-flex justify-content-end">

            <button type="reset" class="btn btn-warning mt-2 mx-1"><i class="mdi mdi-content-save"></i> Reset</button>
            <button type="submit" class="btn btn-success mt-2"><i class="mdi mdi-content-save mx-1"></i> Save</button>
        </div>
        
    </div>
</div>
@push('scripts')
<script src="{{asset('assets/js/jquery.repeater.min.js')}}"></script>
<script>
      $(document).ready(function () {
        $('.repeater').repeater({
            // (Required if there is a nested repeater)
            // Specify the configuration of the nested repeaters.
            // Nested configuration follows the same format as the base configuration,
            // supporting options "defaultValues", "show", "hide", etc.
            // Nested repeaters additionally require a "selector" field.
            repeaters: [{
                // (Required)
                // Specify the jQuery selector for this nested repeater
                selector: '.inner-repeater'
            }]
        });
    });
</script>
    
@endpush