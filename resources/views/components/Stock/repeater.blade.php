<div class="form-group">
    <div class="row bg-light p-2 rounded-top">
        <div class="col-1"></div>  
        <div class="col-2"><label for="">Item</label></div>
        <div class="col-2"><label for="">Brand</label></div>
        <div class="col-2"><label for="">Rate</label></div>
        <div class="col-1"><label for="">Quantity</label></div>
        <div class="col-2"><label for="">Price</label></div>
        <div class="col-2"><label for="">Type</label></div>
    </div>
    <!-- outer repeater -->
    <div class="repeater">
        <div data-repeater-list="outer-list">
            <div  data-repeater-item class="row mt-2">
                <div class="col-1 px-1">
                    <button class="btn bg-danger text-white btn-sm mt-1" data-repeater-delete type="button">
                        <i class="mdi mdi-minus-circle"></i>
                </button>
                </div>
                @php
                    $units = DB::table('units')->get();
                @endphp
                {{-- ","name":"Rod","quantity":"1","quantity_name":"kg","builder_options_id":null, --}}
                <div class="col-2 pr-1">
                    <!-- <div class="p-0"> -->
                        {{-- unit (rod) quantiry(pelam) --}}
                        <select name="unit" class="form-select" onchange="handleUnitChange(this)">
                            <option value="">{{_('Select Item')}}</option>
                            @forelse ($units as $unit)
                                <option value="{{$unit->id}}" data-qty-name="{{$unit->quantity_name}}">{{$unit->name}}</option>
                            @empty
                                <option value="">No data found</option>
                            @endforelse

                        </select>
                    <!-- </div> -->
                </div>                               
                <div class="col-2 px-1">
                    <input type="text" class="form-control descirbe" name="brand">
                </div>                
                <div class="col-2 px-1 text-center">
                    <input type="text" class="form-control rate " name="per_unit_price"  onkeyup="getRateHandler(this)" value="0">
                </div>
                <div class="col-1 px-1">
                    <input type="text" class="form-control qty " name="unit" onkeyup="getQuntityHandler(this)" value="0">
                </div>
                <div class="col-2 px-1">
                    <input type="text" class="form-control price" name="price" value="0">
                </div>
                <div class="col-2 px-1">
                    <input type="text" class="form-control type " name="type">
                </div>
               
            </div>
            
        </div>
        <div class="p-0 float-end" >
          <button class="btn m-0 bg-primary m-1 text-white btn-sm" data-repeater-create type="button">
            {{-- <i class="mdi mdi-plus-circle"></i> --}}
            Add Item
          </button>
        </div>
        
    </div>
</div>
@push('scripts')
<script src="{{asset('assets/js/jquery.repeater.min.js')}}"></script>

<script>
    // scuffholding
    let rate = $('.rate');
    let qty = $('.qty');
    let price = $('.price');
    let total = 0

    // default value
    parseFloat(qty.val(1));
    parseFloat(price.val(0));

    // action

    // price handle change
    function getRateHandler(e){ 
        let quantity = $(e).closest('.row').find('.qty').val();
        let priceFielt = $(e).closest('.row').find('.price');

        amount =  parseFloat(e.value * quantity);
        priceFielt.val(amount);
    //    quantity $(e).closest('.row').find('.qty').val();
        // price.val(amount)
    }


    // quantity handle changes
    function getQuntityHandler(e){   
        let rate = $(e).closest('.row').find('.rate').val();
        let priceFielt = $(e).closest('.row').find('.price');

        amount =  parseFloat(rate * e.value );
        priceFielt.val(amount);
    }

    function handleUnitChange(e){
        $(e).closest('.row').find('.rate').val(0);
        $(e).closest('.row').find('.qty').val(1);
        $(e).closest('.row').find('.price').val(0);

    }

</script>

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
                selector: '.inner-repeater',
                show: function (e) {
                    console.log($(e));
            },
            }]
        });
    });
</script>
    
@endpush