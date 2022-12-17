<table class="form-group">
    {{-- <div class="row bg-light p-2 rounded-top">
        <div class="col-1"></div>  
        <div class="col-2"><label for="">Item</label></div>
        <div class="col-2"><label for="">Brand</label></div>
        <div class="col-1"><label for="">Quantity</label></div>
        <div class="col-2"><label for="">Rate</label></div>
        <div class="col-2"><label for="">Price</label></div>
        <div class="col-2"><label for="">Type</label></div>
    </div> --}}
    <thead>
        <tr>
            <th></th>
            <th>Items</th>
            <th>Barnd</th>
            <th>Type</th>
            <th>Rate</th>
            <th>qty</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody class="repeater">
        <span   data-repeater-list="outer-list">
        <tr   data-repeater-item >
            <td>
                <button class="btn bg-danger text-white btn-sm mt-1" data-repeater-delete type="button">
                    <i class="mdi mdi-minus-circle"></i>
                </button>
            </td>
            <td>
                <select name="tid" class="form-select" onchange="product_add(this)">
                    <option value="">Select Item</option>

                </select>
            </td>
        </tr>
    </span>
        <tr>
            <td>
                <button class="btn bg-primary m-2 text-white btn-sm" data-repeater-create type="button">
                    <i class="mdi mdi-plus-circle"></i>
                  </button>
            </td>
        </tr>
    </tbody>
    <!-- outer repeater -->
   
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