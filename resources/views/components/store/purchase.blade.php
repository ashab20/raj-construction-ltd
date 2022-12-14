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
            <div  data-repeater-item class="row mt-2">
            <div class="col-1 mx-2">
                    <button class="btn bg-danger text-white btn-sm mt-1" data-repeater-delete type="button">
                        <i class="mdi mdi-minus-circle"></i>
                    </button>
                </div>
                <div class="col-3 mr-2">
                    <!-- <div class="p-0"> -->
                        <select name="tid" class="form-select" onchange="product_add(this)">
                            <option value="">Select Item</option>
                            <?php

                            foreach($testData as $test){
                                ?>
                            <option data-testid="<?= $test['id']?>" data-price="<?= $test['rate'] ?>" value="<?= $test['id'] ?>" data-description="<?= $test['description'] ?>">
                                <?= $test['test_name'] ?>
                            </option>
                            <?php }
                                ?>
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
        <div class="col-2" >
          <button class="btn bg-primary m-2 text-white btn-sm" data-repeater-create type="button">
            <i class="mdi mdi-plus-circle"></i>
          </button>
        </div>
        
    </div>
    </div>