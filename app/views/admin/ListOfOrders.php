<?php

require_once APPROOT . "/views/layout/admin/header.php";
require_once APPROOT . "/views/layout/admin/sidebar.php";

?>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card-block">
            <div class="col-sm-6 card-header">
                <h5 class="card-header-text">Danh sách đơn hàng</h5>
            </div>
            <div class="col-sm-6 card-header">
                <form action="<?php echo URLROOT; ?>/Manager/searchOrders" method="post">
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
                            <th class="text-center">MÃ ĐƠN HÀNG</th>
                            <th class="text-center">SẢN PHẨM</th>
                            <th class="text-center">SỐ LƯỢNG</th>
                            <th class="text-center">GIÁ</th>
                            <th class="text-center">SIZE</th>
                            <th class="text-center">KHÁCH HÀNG</th>
                            <th class="text-center">SỐ ĐIỆN THOẠI</th>
                            <th class="text-center">NƠI SHIP</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data['orders'] as $key => $order): ?>
                            <tr>
                                <td><?php echo ++$key + (12 * ($data['page'] - 1)); ?></td>
                                <td class="text-warning"><?php echo $order['order_number']; ?></td>
                                <td><a class="link-info" href="#"><?php echo $order['product_code']; ?></a>
                                </td>
                                <td><?php echo $order['quantity']; ?></td>
                                <td><?php echo $order['unit_price']; ?></td>
                                <td><?php echo $order['size']; ?></td>
                                <td><?php echo $order['name']; ?></td>
                                <td><?php echo $order['phone_number']; ?></td>
                                <td><?php echo $order['ship_address']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="20">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <?php if ($data['page'] == 1): ?>
                                            <li class="page-item"><a class="page-link disabled" href="#">Previous</a></li>
                                        <?php else: ?>
                                            <li class="page-item"><a class="page-link" href="<?php echo URLROOT; ?>/Manager/OrdersList/<?php echo $data['page'] - 1; ?>">Previous</a></li>
                                        <?php endif; ?>
                                        <?php for ($i = 1; $i <= ceil($data['order_quantity']['quantity']/12); $i++): ?>
                                            <?php if ($i == $data['page']): ?>
                                                <li class="page-item active"><a class="page-link" href="<?php echo URLROOT; ?>/Manager/ProductsList/<?php echo $i ?>"><?php echo $i; ?></a></li>
                                            <?php else:; ?>
                                                <li class="page-item"><a class="page-link" href="<?php echo URLROOT; ?>/Manager/OrdersList/<?php echo $i ?>"><?php echo $i; ?></a></li>
                                            <?php endif; ?>
                                        <?php endfor; ?>
                                        <?php if ($data['page'] == ceil($data['order_quantity']['quantity']/12)): ?>
                                            <li class="page-item"><a class="page-link disabled" href="#">Next</a></li>
                                        <?php else: ?>
                                            <li class="page-item"><a class="page-link" href="<?php echo URLROOT; ?>/Manager/OrdersList/<?php echo $data['page'] + 1; ?>">Next</a></li>
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
