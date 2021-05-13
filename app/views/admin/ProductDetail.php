<?php

require_once APPROOT . "/views/layout/admin/header.php";
require_once APPROOT . "/views/layout/admin/sidebar.php";

?>

<div class="content-wrapper">
    <div class="row container-fluid">
        <div class="col-lg-6">
            <div class="card">
                <div>
                    <img class="img-fluid"
                         src="<?php echo dirname(URLROOT); ?>/upload/products/<?php echo $data['image']; ?>"
                         alt="user-header">
                </div>
                <div class="card-block">
                    <div class="user-block-2-activities">
                        <div class="user-block-2-active">
                            <i class="icofont icofont-badge"></i> <?php echo $data['product_code']; ?>
                        </div>
                    </div>
                    <div class="user-block-2-activities">
                        <div class="user-block-2-active">
                            <i class="icofont icofont-badge"></i> <?php echo $data['product_name']; ?>
                        </div>
                    </div>

                    <div class="user-block-2-activities">
                        <div class="user-block-2-active">
                            <i class="icofont icofont-badge"></i> <?php echo $data['category']; ?>
                        </div>

                    </div>
                    <div class="user-block-2-activities">
                        <div class="user-block-2-active">
                            <i class="icofont icofont-badge"></i> <?php echo $data['vendor']; ?>
                        </div>
                    </div>
                    <div class="user-block-2-activities">
                        <div class="user-block-2-active">
                            <i class="icofont icofont-badge"></i> <?php echo $data['description']; ?>
                        </div>
                    </div>
                    <div class="user-block-2-activities">
                        <div class="user-block-2-active">
                            <i class="icofont icofont-badge"></i> <?php echo $data['amount']; ?>
                        </div>
                    </div>
                    <div class="user-block-2-activities">
                        <div class="user-block-2-active">
                            <i class="icofont icofont-badge"></i> <?php echo $data['size']; ?>
                        </div>
                    </div>
                    <div class="user-block-2-activities">
                        <div class="user-block-2-active">
                            <i class="icofont icofont-badge"></i> <?php echo $data['price']; ?>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="<?php echo URLROOT; ?>/Manager/updateProduct/<?php echo $data['id']; ?>"
                           class="btn btn-primary waves-effect waves-light text-uppercase m-r-30">
                            Chỉnh sửa
                        </a>
                        <a href="<?php echo URLROOT; ?>/Manager/deleteProducts/<?php echo $data['id']; ?>"
                           class="btn btn-danger waves-effect waves-light text-uppercase">
                            Xóa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

require_once APPROOT . "/views/layout/admin/footer.php";

?>
