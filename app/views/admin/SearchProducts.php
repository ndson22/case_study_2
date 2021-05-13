<?php

require_once APPROOT . "/views/layout/admin/header.php";
require_once APPROOT . "/views/layout/admin/sidebar.php";

?>

<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="col-sm-6 card-header">
                <h5 class="card-header-text">Kết quả tìm kiếm</h5>
            </div>
            <div class="col-sm-6 card-header">
                <form action="<?php echo URLROOT; ?>/Manager/searchProducts/1" method="post">
                    <input type="text" name="search">
                    <button class="btn btn-sm btn-success">Tìm kiếm</button>
                </form>
            </div>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>MÃ SẢN PHẨM</th>
                            <th>TÊN SẢN PHẨM</th>
                            <th>LOẠI</th>
                            <th>HÃNG SẢN XUẤT</th>
                            <th>SỐ LƯỢNG</th>
                            <th>GIÁ</th>
                            <th>SIZE</th>
                            <th colspan="2" class="text-center">CHỈNH SỬA</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data as $key => $product): ?>
                            <tr>
                                <td><?php echo ++$key; ?></td>
                                <td class="text-warning"><?php echo $product['product_code']; ?></td>
                                <td><a class="link-info"
                                       href="<?php echo URLROOT; ?>/Manager/ProductDetail/<?php echo $product['id']; ?>"><?php echo $product['product_name']; ?></a>
                                </td>
                                <td><?php echo $product['category']; ?></td>
                                <td><?php echo $product['vendor']; ?></td>
                                <td><?php echo $product['amount']; ?></td>
                                <td><?php echo $product['price']; ?></td>
                                <td><?php echo $product['size']; ?></td>
                                <td>
                                    <a href="<?php echo URLROOT; ?>/Manager/updateProduct/<?php echo $product['id']; ?>">
                                        <button type="button" class="btn btn-sm btn-info">Sửa</button>
                                    </a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                            data-target="#<?php echo $product['id']; ?>">Xóa
                                    </button>
                                    <form action="<?php echo URLROOT; ?>/Manager/deleteProducts/<?php echo $product['id']; ?>"
                                          method="get">
                                        <div class="modal fade" id="<?php echo $product['id']; ?>" tabindex="-1"
                                             role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Xác nhận xóa</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Bạn có muốn xóa sản phẩm này không ?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Đóng
                                                        </button>
                                                        <button type="submit" class="btn btn-primary">Xóa</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

require_once APPROOT . "/views/layout/admin/footer.php";

?>
