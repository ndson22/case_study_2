<?php

require_once APPROOT . "/views/layout/home/header.php";

?>

<div class="colorlib-product">
    <div class="container">
        <form action="<?php echo URLROOT; ?>/Product/addToCard" method="post">
            <input type="number" name="id" value="<?php echo $data['id']; ?>" hidden/>
            <div class="row row-pb-lg product-detail-wrap">
                <div class="col-sm-8">
                    <div class="item">
                        <div class="product-entry border">
                            <a href="#" class="prod-img">
                                <img src="<?php echo UPROOT; ?>/products/<?php echo $data['image'] ?>" class="img-fluid"
                                     alt="Free html5 bootstrap 4 template">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="product-desc">
                        <h3><?php echo $data['product_name']; ?></h3>
                        <p class="price">
                            <span>$<?php echo $data['price'] ?></span>
                        </p>
                        <div class="size-wrap">
                            <div class="block-26 mb-2">
                                <h4>Size</h4>
                                <select class="form-select" name="size">
                                    <?php foreach ($data['size'] as $size): ?>
                                        <option value="<?php echo $size; ?>"><?php echo $size; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="input-group mb-4">
                     	<span class="input-group-btn">
                        	<button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
                           <i class="icon-minus2"></i>
                        	</button>
                    		</span>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1"
                                   min="1" max="100">
                            <span class="input-group-btn ml-1">
                        	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                             <i class="icon-plus2"></i>
                         </button>
                     	</span>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button class="btn btn-primary btn-addtocart"><i class="icon-shopping-cart"> Add to Cart</i></button>
                            </div>
                        </div>
                        <?php if (isset($_SESSION['success'])): ?>
                            <div class="row text-success">
                                <?php echo $_SESSION['success']; ?>
                                <?php unset($_SESSION['success']); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-12 pills">
                        <div class="bd-example bd-example-tabs">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-description-tab" data-toggle="pill"
                                       href="#pills-description" role="tab" aria-controls="pills-description"
                                       aria-expanded="true">Description</a>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane border fade show active" id="pills-description" role="tabpanel"
                                     aria-labelledby="pills-description-tab">
                                    <p><?php echo $data['description']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    let quantity = parseInt(document.querySelector("#quantity").value);
    document.querySelector(".quantity-right-plus").addEventListener("click", function () {
        quantity = quantity + 1;
        document.querySelector("#quantity").value = quantity;
    })
    document.querySelector(".quantity-left-minus").addEventListener("click", function () {
        if (quantity > 0) {
            quantity = quantity - 1;
            document.querySelector("#quantity").value = quantity;
        }
    })
</script>
<?php

require_once APPROOT . "/views/layout/home/footer.php";

?>



