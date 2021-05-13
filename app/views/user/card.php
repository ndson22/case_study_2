<?php

require_once APPROOT . "/views/layout/home/header.php";

?>
<div class="colorlib-loader"></div>

<div id="page">
    <div class="colorlib-product">
        <div class="container">
            <div class="row row-pb-lg">
                <div class="col-md-12">
                    <div class="product-name d-flex">
                        <div class="one-forth text-left px-4">
                            <span>Product Details</span>
                        </div>
                        <div class="one-eight text-center">
                            <span>Size</span>
                        </div>
                        <div class="one-eight text-center">
                            <span>Quantity</span>
                        </div>
                        <div class="one-eight text-center">
                            <span>Price</span>
                        </div>
                        <div class="one-eight text-center">
                            <span>Total</span>
                        </div>
                        <div class="one-eight text-center px-4">
                            <span>Remove</span>
                        </div>
                    </div>
                    <?php if (isset($data)): ?>
                    <?php foreach ($data as $product): ?>
                            <div class="product-cart d-flex">
                                <div class="one-forth">
                                    <div class="display-tc">
                                        <h3><?php echo $product['product_name']; ?></h3>
                                    </div>
                                </div>
                                <div class="one-eight text-center">
                                    <div class="display-tc">
                                        <?php echo $product['size']; ?>
                                    </div>
                                </div>
                                <div class="one-eight text-center">
                                    <div class="display-tc">
                                        <input type="text" id="quantity" name="quantity" readonly
                                               class="form-control input-number text-center" value="<?php echo $product['quantity']; ?>" min="1" max="100">
                                    </div>
                                </div>
                                <div class="one-eight text-center">
                                    <div class="display-tc">
                                        <span class="price">$<?php echo $product['unit_price']; ?></span>
                                    </div>
                                </div>
                                <div class="one-eight text-center">
                                    <div class="display-tc">
                                        <span class="price">$ <?php echo $product['total'] ?></span>
                                    </div>
                                </div>
                                <div class="one-eight text-center">
                                    <div class="display-tc">
                                        <a href="<?php echo URLROOT; ?>/product/deleteCartProduct/<?php echo $product['cart_id'] . "/" . $product['product_id'] ?>" class="closed"></a>
                                    </div>
                                </div>
                            </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row row-pb-lg">
                <div class="col-md-12">
                    <div class="total-wrap">
                        <div class="row">
                            <div class="col-sm-8">
                                <?php if (!empty($data)): ?>
                                <div class="row form-group">
                                    <div class="col-sm-12">
                                        <a href="<?php echo URLROOT; ?>/product/pay" class="btn btn-primary">Pay now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 text-center">
                                <div class="total">
                                    <div class="sub">
                                        <p>
                                            <span>Subtotal:</span>
                                            <span>
                                                <?php if (isset($data)): ?>
                                                <?php $result = 0; ?>
                                                <?php foreach ($data as $product): ?>
                                                <?php $result += $product['total'] ?>
                                                <?php endforeach; ?>
                                                <?php echo "$ " . $result; ?>
                                                <?php else: ?>
                                                <?php echo "$ 0"; ?>
                                                <?php endif; ?>
                                            </span>
                                        </p>
                                        <p><span>Delivery:</span> <span>$ 0.00</span></p>
                                        <p>
                                            <span>Discount:</span>
                                            <span>
                                                <?php if (isset($data)): ?>
                                                <?php echo "$ " . $discount = $result * 0.1; ?>
                                                <?php else: ?>
                                                <?php echo "$ 0"; ?>
                                                <?php endif; ?>
                                            </span>
                                        </p>
                                    </div>
                                    <div class="grand-total">
                                        <p>
                                            <span><strong>Total:</strong></span>
                                            <span>
                                                <?php if (isset($data)): ?>
                                                <?php echo "$ " . ($result + $discount); ?>
                                                <?php else: ?>
                                                <?php echo "$ 0"; ?>
                                                <?php endif; ?>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

require_once APPROOT . "/views/layout/home/footer.php";

?>
