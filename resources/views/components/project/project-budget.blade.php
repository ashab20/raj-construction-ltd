<div class="row d-none project_budget" id="project_budget">
    <div class="col-12">
        <div class="card">
            <h5 class="mb-3 text-uppercase bg-light p-2 mt-4"><i class="mdi mdi-office-building me-1"></i> {{__('Project Budget')}} :</h5>
                    <div class="form-group">
            <div class="card-body">
                <form action="{{route('budget.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <input type="number" value="{{$project?->id}}" name="project_id" hidden>
                    <div class="row">                            
                        <div class="col-xl-4 mb-3">
                            <label for="projectname" class="form-label">{{__('Budget For')}}</label>
                            <select name="" id="" class="form-select" onchange="handleBudgetChange(this)">
                                <option value="">Select Budget Options</option>
                                <option value="floor">Floor</option>
                                <option value="piler">Pilar</option>
                            </select>
                        </div>
                        <div class="mb-0 col-xl-4 col-6"> 
                            <div class="mb-3" id="floor">
                                @php
                                    $floor = DB::table('floor_details')->get()
                                @endphp
                                <label class="form-label" >
                                    {{__('Floor No')}}
                                </label>
                                <select name="" id="" class="form-select">
                                    <option value="">Select</option>
                                    @forelse ($floor as $f)
                                    <option value="{{$f->id}}">{{$f->floor_no}}</option>
                                    
                                    @empty
                                    <option value="{{$f->id}}">{{__('No Data Founds!')}}</option>
                                        
                                    @endforelse
                                </select>
                            </div>                           
                            <div class="mb-3 d-none" id="piler">
                                <label class="form-label" >
                                    {{__('Piler No')}}
                                </label>
                                <input class="form-control" type="text" placeholder="Piller No/Floor no">
                            </div>                           
                        </div>
                        <div class="mb-0 col-xl-4 col-6"> 
                            <div class="mb-3">
                                <label class="form-label">
                                    {{__('Total Working Day')}}
                                </label>
                                <input data-toggle="touchspin" data-bts-max="500" value="128" data-btn-vertical="true" type="text">
                            </div>                           
                        </div>
                        <div class="mb-0 col-xl-4 col-6">
                            <div class="mb-3">
                                <label class="form-label">
                                    {{__('Total Worker')}}
                                </label>
                                <input data-toggle="touchspin" data-bts-max="500" value="128" data-btn-vertical="true" type="text">
                            </div>                           
                        </div>
                        <div class="mb-0 col-xl-4 col-6">
                            <div class="mb-3">
                                <label class="form-label">
                                    {{__('Issues Date')}}
                                </label>
                                <input class="form-select" type="date">
                            </div>                           
                        </div>
                    </div>
                    
                        {{-- <div class="row bg-light p-2 rounded-top">
                            <div class="col-2"></div>
                            <div class="col-3">
                                <label for="">Material Name</label>
                            </div>
                            <div class="col-2"><label for="">Market Price</label></div>
                            <div class="col-2"><label for="">Quantity</label></div>
                            <div class="col-3"><label for="">Total</label></div>
                        </div> --}}
                        <!-- outer repeater -->
                        @php
                            $materials = DB::table('units')->get();   
                        @endphp
                        <hr>
                        <div class="repeater bg-light p-2 justify-content-center text-center">
                            <div data-repeater-list="outer_list">
                                <div data-repeater-item class="row mt-2 offset-2">
                                    
                                    <div class="col-1 mx-2">
                                        <button class="btn bg-danger text-white btn-sm mt-4" data-repeater-delete type="button">
                                            <i class="mdi mdi-minus-circle"></i>
                                        </button>
                                    </div>
                                    <div class="col-3 mr-2">
                                        <!-- <div class="p-0"> -->
                                            <label for=""  class="form-label">Material Name</label>
                                        <select name="material_id" class="form-select" >
                                            <option value="">Select Item</option>
                                            @forelse ($materials as $material)
                                            <option value="{{$material->id}}" 

                                                data-quantity_name="{{$material->quantity_name}}"
                                                data-quantity="{{$material->quantity}}"
                                                
                                                >
                                                {{$material->name}} - {{$material->quantity}} {{$material->quantity_name}}
                                            </option>
                                                
                                            @empty
                                            <option value="">{{__('No data Founds!')}}</option> 
                                            @endforelse
                                            
                                        </select>
                                        <!-- </div> -->
                                    </div>
                                    <div class="col-2 p-0 mx-2">
                                        <label for=""  class="form-label">Market Price</label>
                                        <input type="text" class="form-control price" name="market_price" onkeyup="getPriceCount(this)" id="market_price">
                                    </div>
                                    <div class="col-2 p-0 mx-2">
                                        <label for=""  class="form-label">Quantity</label>
                                        {{-- <input type="numbet" onkeyup="get_quintity(this)" class="form-control price" name="quantity" id="quantity" value="1"> --}}
                                        <input data-toggle="touchspin" class="form-control quantity" data-bts-max="500" value="1" onkeyup="getQuintity(this)" name="quantity"data-btn-vertical="true" type="text" >
                                    </div>
                                    <div class="col-2 p-0 mx-2">
                                        <label for=""  class="form-label">Sub Total</label>
                                        {{-- <input type="numbet" onkeyup="get_quintity(this)" class="form-control price" name="quantity" id="quantity" value="1"> --}}
                                        <input data-toggle="touchspin" class="form-control sub"  value="1" onkeyup="sub_amount(this)" name="quantity" type="text" >
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row justify-content-center">                                
                                <div class="col-xl-4 p-0 mx-2 m-2 ">
                                    <input type="text" id="total" onkeyup="totalCount(this)" class="form-control total" name="total" disabled>
                                    <label for=""  class="form-label p-2 text-center">Total</label>
                                </div>
                                <div class="col-2">                                
                                    <button class="btn bg-primary m-2 text-white btn-sm" data-repeater-create type="button">
                                    <i class="mdi mdi-plus-circle"></i> New
                                </button>
                                </div>
                            </div>

                        </div>
                    </div>

                
                    <!-- end row -->
                    <!-- Plot Documents -->
                    <div class="col-10 offset-1 d-flex justify-content-end">

                        <button type="reset" class="btn btn-warning mt-2 mx-1"><i class="mdi mdi-content-save"></i> Reset</button>
                        <button type="submit" class="btn btn-success mt-2"><i class="mdi mdi-content-save mx-1"></i> Save</button>
                    </div>
                </form>

            </div> <!-- end card-body -->
        </div> <!-- end card-->
    </div>

@push('scripts')
<script src="{{asset('assets/js/jquery.repeater.min.js')}}"></script>

<script>

    // varibles
   

function handleBudgetChange(e){
    if(e.value === "piler"){
        // $('#indentity_budget').text("{{__('Piler No')}}") ;
        $('#piler').removeClass('d-none');
        $('#floor').addClass('d-none');
    }else if (e.value === "floor"){
        $('#piler').addClass('d-none');
        $('#floor').removeClass('d-none');
        
    }
}



</script>


{{-- adjust --}}
    <script>
  function totalCount(){
    let marketPrice = parseFloat($('.price').val());
    let quantityfield = parseFloat($('.quantity').val());
    let totalField =$('.sub');
    if(!marketPrice)marketPrice=0;
    if(!quantityfield)quantityfield=0;

    
    var total=(marketPrice * quantityfield);
    totalField.val(total);
  }

  function sub_amount(){
    var sub_amount=0;
    $('.sub').each(function(){
      sub_amount+=parseFloat($(this).val());
      console.log(sub_amount);
    });

    // $('.sub').val(sub_amount);
    $('.total').val(sub_amount);
    totalCount();
  }
</script>
<script>


function getQuintity(e){
    var price=parseFloat($(e).closest('.row').find('.price').val());
var qty=parseFloat($(e).closest('.row').find('.quantity').val());
  var sub=price * qty; // qty*price
  $(e).closest('.row').find('.sub').val(sub);

  sub_amount();
  totalCount();
}





  function getPriceCount(e){
    var price=parseFloat($(e).val());
    var qty=parseFloat($(e).closest('.row').find('.quantity').val());

    var sub=price * qty; // qty*price
    $(e).closest('.row').find('.sub').val(sub);
    sub_amount();
    totalCount();
  }

 



</script>


<script>
    
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
    
</script>

@endpush

 