let produc = 0;

function addNewProduct(a, length){

    if(produc == null) {
        produc = Number(length);
      }
      produc++;
      const n = produc;
     var new_Prod= `

                <div class="row" id="${n}_top" >
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Product Name</label>
                    <select class="form-control" name="product[${n}][product_id]" id="product_id_${n}" required>
                        `+document.getElementById('product_id_0').innerHTML+`</select>                     
                    </div>
                    
                </div>
                <!--/span-->
                <div class="col-md-1">
                    <div class="form-group">
                        <label>Quanity</label>
                        <input type="number" value="1" class="form-control" name="product[${n}][quantity]" id="quantity_${n}"  min="0" onchange="change_price(${n})" required>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" class="form-control" name="product[${n}][price]" min="0" id="price_${n}" onchange="change_price(${n})" required>
                    </div>
                </div>

                <div class="col-md-1">
                    <div class="form-group">
                        <label>Discount</label>
                        <input type="number" class="form-control" name="product[${n}][discount]" id="discount_${n}" value="0" min="0" onchange="change_price(${n})" required>
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label>Total</label>
                        <input type="number" class="form-control sub-total" name="product[${n}][total]"  id="total_${n}" required>
                    </div>
                </div>
                <div class="col-md-1">
                <button type="button" class="btn btn-danger " style="margin-top:30px" onclick="delet(${n})"> <i class="fa fa-trash" aria-hidden="true"></i></button>
                </div>
                <!--/span-->
            </div>
            <!--/row-->
            <div class="form-actions">
            </div></div>`;
            var a = document.getElementById('head_products');

    a.insertAdjacentHTML('beforeend', new_Prod);
    $("#product_id_"+n).select2();
  }


function delet(id){
    var product = document.getElementById(id+"_top").remove();
    calcAll();
}

function change_price(id){

  //  alert(2);
    var price    = Number(document.getElementById('price_'+id).value);
    var discount = Number(document.getElementById('discount_'+id).value);
    var quantity = Number(document.getElementById('quantity_'+id).value);

    var  total = (price*quantity) - discount;
    
    if(total < 0 )
        total = 0 ;

    document.getElementById('total_'+id).value=total;

    calcAll();

}

function calcAll(){
    
    var inputs = document.getElementsByClassName('sub-total');
    var total =0;
    for(I = 0; I < inputs.length; I++) {
        total += Number(inputs[I].value);

    }
    document.getElementById('invoice_price').innerHTML=total;
    console.log(total);
}