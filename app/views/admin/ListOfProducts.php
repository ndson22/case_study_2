<?php

require_once APPROOT . "/views/layout/admin/header.php";
require_once APPROOT . "/views/layout/admin/sidebar.php";

?>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card-block">
            <div class="col-sm-6 card-header">
                <h5 class="card-header-text">Danh sách sản phẩm</h5>
            </div>
            <div class="col-sm-6 card-header">
                <form action="<?php echo URLROOT; ?>/Manager/searchProducts" method="post">
                    <input type="text" name="search">
                    <button class="btn btn-sm btn-success">Tìm kiếm</button>
                </form>
            </div>
        </div>
        <div class="card-block">
            <div class="row">
                <div class="col-sm-12 table-responsive">
                    <table class="table table-hover text-center" id="example">
                        <thead>
                        <tr>
                            <th class="text-center">STT</th>
                            <th class="text-center">MÃ SẢN PHẨM</th>
                            <th class="text-center">TÊN SẢN PHẨM</th>
                            <th class="text-center">LOẠI</th>
                            <th class="text-center">HÃNG SẢN XUẤT</th>
                            <th class="text-center">SỐ LƯỢNG</th>
                            <th class="text-center">GIÁ</th>
                            <th class="text-center">SIZE</th>
                            <th colspan="2" class="text-center">CHỈNH SỬA</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data['products'] as $key => $product): ?>
                            <tr>
                                <td><?php echo ++$key + (12 * ($data['page'] - 1)); ?></td>
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
                        <tr>
                            <td colspan="20">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <?php if ($data['page'] == 1): ?>
                                        <li class="page-item"><a class="page-link disabled" href="#">Previous</a></li>
                                        <?php else: ?>
                                        <li class="page-item"><a class="page-link" href="<?php echo URLROOT; ?>/Manager/ProductsList/<?php echo $data['page'] - 1; ?>">Previous</a></li>
                                        <?php endif; ?>
                                        <?php for ($i = 1; $i <= ceil($data['product_quantity']['quantity']/12); $i++): ?>
                                        <?php if ($i == $data['page']): ?>
                                        <li class="page-item active"><a class="page-link" href="<?php echo URLROOT; ?>/Manager/ProductsList/<?php echo $i ?>"><?php echo $i; ?></a></li>
                                        <?php else:; ?>
                                        <li class="page-item"><a class="page-link" href="<?php echo URLROOT; ?>/Manager/ProductsList/<?php echo $i ?>"><?php echo $i; ?></a></li>
                                        <?php endif; ?>
                                        <?php endfor; ?>
                                        <?php if ($data['page'] == ceil($data['product_quantity']['quantity']/12)): ?>
                                            <li class="page-item"><a class="page-link disabled" href="#">Next</a></li>
                                        <?php else: ?>
                                            <li class="page-item"><a class="page-link" href="<?php echo URLROOT; ?>/Manager/ProductsList/<?php echo $data['page'] + 1; ?>">Next</a></li>
                                        <?php endif; ?>
                                    </ul>
                                </nav></td>
                        </tr>
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
