<?php

require_once APPROOT . "/views/layout/home/header.php";

?>
    <div class="colorlib-intro">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="intro">It started with a simple idea: Create quality, well-designed products that I wanted myself.</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="colorlib-product">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 text-center">
                <div class="featured">
                    <a href="#" class="featured-img"
                       style="background-image: url(<?php echo URLROOT ?>/assets_home/images/men.jpg);"></a>
                    <div class="desc">
                        <h2><a href="#">Shop Men's Collection</a></h2>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 text-center">
                <div class="featured">
                    <a href="#" class="featured-img"
                       style="background-image: url(<?php echo URLROOT ?>/assets_home/images/women.jpg);"></a>
                    <div class="desc">
                        <h2><a href="#">Shop Women's Collection</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php

require_once APPROOT . "/views/layout/home/footer.php";

?>