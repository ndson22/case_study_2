<?php

require_once APPROOT . "/views/layout/admin/header.php";
require_once APPROOT . "/views/layout/admin/sidebar.php";

?>
<div class="content-wrapper">
    <div class="col-lg-4">
        <div class="card">
            <div class="user-block-2">
                <!--            <img class="img-fluid" src="-->
                <?php //echo dirname(APPROOT); ?><!--upload/user/user-1.png" alt="user-header">-->
                <h5><?php echo $data['name'] ?></h5>
                <h6>
                    <?php if ($_SESSION['permission'] == 1): ?>
                        <?php echo "Admin" ?>
                    <?php else: ?>
                        <?php echo "Người dùng"; ?>
                    <?php endif; ?>
                </h6>
            </div>
            <div class="card-block">
                <div class="user-block-2-activities">
                    <div class="user-block-2-active">
                        <i class="icofont icofont-ui-user"></i> <?php echo $data['account'] ?>
                    </div>
                </div>
                <div class="user-block-2-activities">
                    <div class="user-block-2-active">
                        <i class="icofont icofont-mail"></i> <?php echo $data['email'] ?>
                    </div>
                </div>

                <div class="user-block-2-activities">
                    <div class="user-block-2-active">
                        <i class="icofont icofont-address-book"></i> <?php echo $data['address'] ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php

require_once APPROOT . "/views/layout/admin/footer.php";

?>
