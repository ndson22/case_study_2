<?php

require_once APPROOT . "/views/layout/admin/header.php";
require_once APPROOT . "/views/layout/admin/sidebar.php";

?>
<div class="content-wrapper">
    <!-- Container-fluid starts -->
    <!-- Main content starts -->
    <div class="container-fluid">
        <div class="row">
            <div class="main-header">
                <h4>Tổng quan</h4>
            </div>
        </div>
        <!-- 4-blocks row start -->
        <div class="row dashboard-header">
            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-product">
                    <span>Sản phẩm</span>
                    <h2 class="dashboard-total-products"><?php echo $data['quantity'] ?></h2>
                    <span class="label label-warning">Sales</span>
                    <div class="side-box">
                        <i class="ti-signal text-warning-color"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-product">
                    <span>Số lượng</span>
                    <h2 class="dashboard-total-products"><?php echo $data['amount'] ?></h2>
                    <span class="label label-primary">Units</span>
                    <div class="side-box ">
                        <i class="ti-gift text-primary-color"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-product">
                    <span>Khách hàng</span>
                    <h2 class="dashboard-total-products"><span><?php echo $data['quantity_user'] ?></span></h2>
                    <span class="label label-success">Customers</span>
                    <div class="side-box">
                        <i class="ti-direction-alt text-success-color"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card dashboard-product">
                    <span>Tài khoản</span>
                    <h2 class="dashboard-total-products"><span><?php echo $data['quantity_account'] ?></span></h2>
                    <span class="label label-danger">Accounts</span>
                    <div class="side-box">
                        <i class="ti-rocket text-danger-color"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- 4-blocks row end -->
    </div>
<?php

require_once APPROOT . "/views/layout/admin/footer.php";

?>
