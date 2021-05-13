<?php

require_once APPROOT . "/views/layout/home/header.php";

?>

<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                <h2>View All Products</h2>
            </div>
        </div>
        <div class="row row-pb-md">
            <?php foreach ($data['products'] as $key => $product): ?>
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
        <div class="row row-pb-md">
            <div class="col-md-12 text-center">
                <div class="block-27">
                <ul>
                    <?php if ($data['page'] == 1): ?>
                        <li class="disabled"><a href="#"><i class="ion-ios-arrow-back"></i></a></li>
                    <?php else: ?>
                        <li><a href="<?php echo URLROOT; ?>/Product/ListProducts/<?php echo $data['page'] - 1; ?>"><i class="ion-ios-arrow-back"></i></a></li>
                    <?php endif; ?>
                    <?php for ($i = 1; $i <= ceil($data['product_quantity']['quantity']/12); $i++): ?>
                    <?php if ($i == $data['page']): ?>
                    <li class="active"><a href="<?php echo URLROOT; ?>/Product/ListProducts/<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php else:; ?>
                    <li><a href="<?php echo URLROOT; ?>/Product/ListProducts/<?php echo $i; ?>"><?php echo $i; ?></a></li>
                    <?php endif; ?>
                    <?php endfor; ?>
                    <?php if ($data['page'] == ceil($data['product_quantity']['quantity']/12)): ?>
                        <li class="disabled"><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
                    <?php else: ?>
                        <li><a href="<?php echo URLROOT; ?>/Product/ListProducts/<?php echo $data['page'] + 1; ?>"><i class="ion-ios-arrow-forward"></i></a></li>
                    <?php endif; ?>
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

require_once APPROOT . "/views/layout/home/footer.php";

?>
