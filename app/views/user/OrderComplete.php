<?php

require_once APPROOT . "/views/layout/home/header.php";

?>

<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 offset-sm-1 text-center">
                <p class="icon-addcart"><span><i class="icon-check"></i></span></p>
                <h2 class="mb-4">Thank you for purchasing, Your order is complete</h2>
                <p>
                    <a href="<?php echo URLROOT;  ?>"class="btn btn-primary btn-outline-primary">Home</a>
                    <a href="<?php echo URLROOT;  ?>/product/ListProducts/1"class="btn btn-primary btn-outline-primary"><i class="icon-shopping-cart"></i> Continue Shopping</a>
                </p>
            </div>
        </div>
    </div>
</div>

<?php

require_once APPROOT . "/views/layout/home/footer.php";

?>
