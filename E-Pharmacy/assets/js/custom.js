$(document).ready(function () {
    

    $('.increment-btn').click(function (e) { 
        e.preventDefault();

        var qty = $(this).closest('.product_data').find('.input-qty').val();
        
        var value = parseInt(qty,100);
        value = isNaN(value) ? 0 : value;
        if(value < 100)
        {
            value++;
            $(this).closest('.product_data').find('.input-qty').val(value);
        }
    });

    $('.decrement-btn').click(function (e) { 
        e.preventDefault();

        var qty = $(this).closest('.product_data').find('.input-qty').val();
        
        var value = parseInt(qty,100);
        value = isNaN(value) ? 0 : value;
        if(value > 1)
        {
            value--;
            $(this).closest('.product_data').find('.input-qty').val(value);
        }
    });

    $('.addToCartBtn').click(function (e) { 
        e.preventDefault();
        
        var qty = $(this).closest('.product_data').find('.input-qty').val();
        var prod_id = $(this).val();

        alert(prod_id);

        $.ajax({
            method: "POST",
            url: "functions/handlecart.php",
            data: {
                "prod_id":prod_id,
                "prod_qty":qty,
                "scope":"add"
            },
            success: function (response) {
                if(response == 201)
                {
                    alertify.success("Product Added to cart");
                }
                else if(response == "existing")
                {
                    alertify.success("Product already in cart");
                }
                else if(response == 401)
                {
                    alertify.success("Login to Continue");
                }
                else if(response == 500)
                {
                    alertify.success("Something Went Wrong");
                }
            }
        });
    });
    
    $(document).on('click','.updateQty', function () {
        var qty = $(this).closest('.product_data').find('.input-qty').val();
        var prod_id = $(this).closest('.product_data').find('.prodId').val();

        $.ajax({
            method: "POST",
            url: "functions/handlecart.php",
            data: {
                "prod_id":prod_id,
                "prod_qty":qty,
                "scope":"update"
            },
            success: function (response) {
                //alert(response);   
            }
        });
        
    });

    $(document).on('click','.deleteItem', function () {
        var cart_id = $(this).val();
        alert(cart_id);
    });

});