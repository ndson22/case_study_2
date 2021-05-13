<?php

require_once APPROOT . "/views/layout/home/header.php";

?>
<div class="colorlib-product">
        <div class="row">
            <div class="col-lg-8">
                <form method="post" action="<?php echo URLROOT; ?>/product/pay" class="colorlib-form">
                    <h2 id="target_content">Billing Details</h2>
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="fname">Your name</label>
                                <input type="text" id="fname" class="form-control" readonly value="<?php echo $data['name'] ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="fname">Ship address</label>
                                <input type="text" id="address" name="address" class="form-control" placeholder="Enter Your Address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">E-mail Address</label>
                                <input type="text" id="email" class="form-control" value="<?php echo $data['email'] ?>" placeholder="Your email" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Phone">Phone Number</label>
                                <input type="text" id="zippostalcode" class="form-control" placeholder="Phone number" readonly value="<?php echo $data['phone_number'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <p><button class="btn btn-primary">Place an order</button></p>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="cart-detail">
                            <h2>Cart Total</h2>
                            <ul>
                                <li>
                                    <?php $total = null; ?>
                                    <?php foreach ($data as $key => $product): ?>
                                    <?php if (isset($product['total'])): ?>
                                    <?php $total += $product['total']; ?>
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                                    <?php if (isset($total)): ?>
                                    <span>Subtotal</span> <span>$ <?php echo $total; ?></span>
                                    <?php endif; ?>
                                    <ul>
                                        <?php foreach ($data as $key => $product): ?>
                                        <?php if(isset($product['quantity']) && isset($product['product_name']) && isset($product['total'])): ?>
                                        <li><span><?php echo $product['quantity'] . " x " . $product['product_name'] ?> Product Name</span> <span>$ <?php echo $product['total'] ?></span></li>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                                <?php if (isset($total)): ?>
                                <li><span>Shipping</span> <span>$ <?php echo $ship = $total * 0.1; ?></span></li>
                                <li><span>Order Total</span> <span>$ <?php echo $total + $ship; ?></span></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>

                    <div class="w-100"></div>

                    <div class="col-md-12">
                        <div class="cart-detail">
                            <h2>Payment Method</h2>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="radio">
                                        <label><input type="radio" name="optradio" checked> Check Payment</label>
                                    </div>
                                </div>
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