<div class="row" id="project_budget">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('project.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                        
                    <h5 class="mb-3 text-uppercase bg-light p-2 mt-4"><i class="mdi mdi-office-building me-1"></i> {{__('Project Budget')}} :</h5>
                    <div class="form-group">
                        <div class="row bg-light p-2 rounded-top">
                            <div class="col-2"></div>
                            <div class="col-3">
                                <label for="">Test</label>
                            </div>
                            <div class="col-2"><label for="">Description</label></div>
                            <div class="col-2"><label for="">Price</label></div>
                            <div class="col-3"><label for="">Total</label></div>

                        </div>
                        <!-- outer repeater -->
                        <div class="repeater">
                            <div data-repeater-list="outer-list">
                                <div data-repeater-item class="row mt-2">
                                    <div class="col-1 mx-2">
                                        <button class="btn bg-danger text-white btn-sm mt-1" data-repeater-delete type="button">
                                            <i class="mdi mdi-minus-circle"></i>
                                        </button>
                                    </div>
                                    <div class="col-3 mr-2">
                                        <!-- <div class="p-0"> -->
                                        <select name="tid" class="form-select" onchange="product_add(this)">
                                            <option value="">Select Item</option>
                                            
                                        </select>
                                        <!-- </div> -->
                                    </div>
                                    <div class="col-2 p-0 mx-2">
                                        <input type="text" class="form-control descirbe" name="describtion" onkeyup="get_count(this)">
                                    </div>
                                    <div class="col-2 p-0 mx-2">
                                        <input type="text" onkeyup="get_pricecount(this)" class="form-control price" name="price">
                                    </div>
                                    <!-- <input type="text" hidden  class="test_id" name="test_id"> -->

                                    <div class="col-2 p-0 mx-2">
                                        <input readonly type="text" class="form-control sub bg-white" name="sub">
                                    </div>

                                </div>
                            </div>
                            <div class="col-2">
                                <button class="btn bg-primary m-2 text-white btn-sm" data-repeater-create type="button">
                                    <i class="mdi mdi-plus-circle"></i>
                                </button>
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

 