<?php

require_once APPROOT . "/views/layout/home/header.php";

?>

<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                <h2>Search result</h2>
            </div>
        </div>
        <div class="row row-pb-md">
            <?php foreach ($data as $key => $product): ?>
                <?php if ($key % 4 == 0): ?>
                    <div class="w-100"></div>
                <?php endif; ?>
                <div class="col-md-3 col-lg-3 mb-4 text-center">
                    <div class="product-entry border">
                        <a href="<?php echo URLROOT; ?>/product/detail/<?php echo $product['id'] ?>" class="prod-img">
                            <img src="<?php echo UPROOT; ?>/products/<?php echo $product['image'] ?>"
                                 class="img-fluid" alt="image">
                        </a>
                        <div class="desc">
                            <h2><a href="<?php echo URLROOT; ?>/product/detail/<?php echo $product['id'] ?>"><?php echo $product['product_name']; ?></a></h2>
                            <h2><a href="<?php echo URLROOT; ?>/product/detail/<?php echo $product['id'] ?>"><?php echo $product['vendor']; ?></a></h2>
                            <span class="price">$<?php echo $product['price'] ?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php

require_once APPROOT . "/views/layout/home/footer.php";

?>
