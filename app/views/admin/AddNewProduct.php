<?php

require_once APPROOT . "/views/layout/admin/header.php";
require_once APPROOT . "/views/layout/admin/sidebar.php";

?>
<!-- Textual inputs starts -->
<div class="content-wrapper mt-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-header-text">Thêm sản phẩm mới</h5>
                    </div>
                    <?php if (isset($_SESSION['success'])): ?>
                        <div class="form-control-feedback text-success"><?php echo $_SESSION['success']; ?></div>
                    <?php unset($_SESSION['success']); ?>
                    <?php  endif; ?>
                    <div class="card-block">
                        <form action="<?php echo URLROOT; ?>/Manager/addProducts" method="post"
                              enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="example-text-input"
                                       class="col-xs-2 col-form-label form-control-label">Mã</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="product_code" id="example-text-input">
                                    <?php if (isset($data['errorCode'])): ?>
                                        <div class="form-control-feedback text-danger"><?php echo $data['errorCode']; ?></div>
                                    <?php  endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-search-input"
                                       class="col-xs-2 col-form-label form-control-label">Tên</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="example-search-input"
                                           name="product_name">
                                    <?php if (isset($data['errorName'])): ?>
                                        <div class="form-control-feedback text-danger"><?php echo $data['errorName']; ?></div>
                                    <?php  endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-email-input"
                                       class="col-xs-2 col-form-label form-control-label">Loại</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="example-email-input" name="category">
                                    <?php if (isset($data['errorCategory'])): ?>
                                        <div class="form-control-feedback text-danger"><?php echo $data['errorCategory']; ?></div>
                                    <?php  endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-url-input"
                                       class="col-xs-2 col-form-label form-control-label">Hãng</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="vendor" id="example-url-input">
                                    <?php if (isset($data['errorVendor'])): ?>
                                        <div class="form-control-feedback text-danger"><?php echo $data['errorVendor']; ?></div>
                                    <?php  endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-xs-2 col-form-label form-control-label">Mô tả</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description" id="example-tel-input"
                                              rows="5"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-password-input" class="col-xs-2 col-form-label form-control-label">Số lượng</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" name="amount" id="example-password-input">
                                    <?php if (isset($data['errorAmount'])): ?>
                                        <div class="form-control-feedback text-danger"><?php echo $data['errorAmount']; ?></div>
                                    <?php  endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-number-input" class="col-xs-2 col-form-label form-control-label">Size</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="example-number-input" name="size">
                                    <?php if (isset($data['errorSize'])): ?>
                                        <div class="form-control-feedback text-danger"><?php echo $data['errorSize']; ?></div>
                                    <?php  endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-number-input" class="col-xs-2 col-form-label form-control-label">Đơn giá</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" id="example-number-input" name="price">
                                    <?php if (isset($data['errorPrice'])): ?>
                                        <div class="form-control-feedback text-danger"><?php echo $data['errorPrice']; ?></div>
                                    <?php  endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="file" class="col-md-2 col-form-label form-control-label">Ảnh sản
                                    phẩm</label>
                                <div class="col-md-9">
                                    <input type="file" id="file" name="image">
                                    <?php if (isset($data['errorImage'])): ?>
                                    <div class="form-control-feedback text-danger"><?php echo $data['errorImage']; ?></div>
                                    <?php  endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <button class="col-md-2 btn btn-success">Thêm mới</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Textual inputs ends -->
        </div>
    </div>
</div>


<?php

require_once APPROOT . "/views/layout/admin/footer.php";

?>
