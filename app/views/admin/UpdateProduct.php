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
                        <h5 class="card-header-text">Cập nhật sản phẩm</h5>
                        <?php if (isset($data['success'])): ?>
                            <div class="form-control-feedback text-success"><?php echo $data['success']; ?></div>
                        <?php  endif; ?>
                    </div>
                    <div class="card-block">
                        <form action="<?php echo URLROOT; ?>/Manager/updateProduct/<?php echo $data['id']; ?>" method="post"
                              enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="example-text-input"
                                       class="col-xs-2 col-form-label form-control-label">Mã</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" value="<?php echo $data['product_code']; ?>" name="product_code" id="example-text-input">
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
                                           name="product_name" value="<?php echo $data['product_name']; ?>">
                                    <?php if (isset($data['errorName'])): ?>
                                    <div class="form-control-feedback text-danger"><?php echo $data['errorName']; ?></div>
                                    <?php  endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-email-input"
                                       class="col-xs-2 col-form-label form-control-label">Loại</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="example-email-input" name="category" value="<?php echo $data['category']; ?>">
                                    <?php if (isset($data['errorCategory'])): ?>
                                        <div class="form-control-feedback text-danger"><?php echo $data['errorCategory']; ?></div>
                                    <?php  endif; ?>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label for="example-url-input"
                                       class="col-xs-2 col-form-label form-control-label">Hãng</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="vendor" id="example-url-input" value="<?php echo $data['vendor']; ?>">
                                    <?php if (isset($data['errorVendor'])): ?>
                                        <div class="form-control-feedback text-danger"><?php echo $data['errorVendor']; ?></div>
                                    <?php  endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-tel-input" class="col-xs-2 col-form-label form-control-label">Mô tả</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description" id="example-tel-input"
                                              rows="5" value="<?php echo $data['description']; ?>"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-password-input" class="col-xs-2 col-form-label form-control-label">Số lượng</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" name="amount" id="example-password-input" value="<?php echo $data['amount']; ?>">
                                    <?php if (isset($data['errorAmount'])): ?>
                                        <div class="form-control-feedback text-danger"><?php echo $data['errorAmount']; ?></div>
                                    <?php  endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-number-input" class="col-xs-2 col-form-label form-control-label">Size</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" id="example-number-input" name="size" value="<?php echo $data['size']; ?>">
                                    <?php if (isset($data['errorSize'])): ?>
                                        <div class="form-control-feedback text-danger"><?php echo $data['errorSize']; ?></div>
                                    <?php  endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="example-number-input" class="col-xs-2 col-form-label form-control-label">Đơn giá</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" id="example-number-input" name="price" value="<?php echo $data['price']; ?>">
                                    <?php if (isset($data['errorPrice'])): ?>
                                        <div class="form-control-feedback text-danger"><?php echo $data['errorPrice']; ?></div>
                                    <?php  endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="file" class="col-md-2 col-form-label form-control-label">Ảnh sản
                                    phẩm</label>
                                <div class="col-md-9">
                                    <div class="mb-3">
                                        <img src="<?php echo dirname(URLROOT); ?>/upload/products/<?php echo $data['image']; ?>" width="40%" height="30%" alt="asd" />
                                    </div>
                                    <div class="mt-3">
                                    <input type="file" id="file" name="image" value="<?php echo $data['image']; ?>">
                                   <?php if (isset($data['errorImage'])): ?>
                                   <div class="form-control-feedback text-danger"><?php echo $data['errorImage']; ?></div>
                                   <?php  endif; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <button class="col-md-2 btn btn-success">Cập nhật</button>
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
