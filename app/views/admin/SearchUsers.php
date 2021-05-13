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
                <form action="<?php echo URLROOT; ?>/Manager/searchUser" method="post">
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
                            <th class="text-center">HỌ TÊN</th>
                            <th class="text-center">SỐ ĐIỆN THOẠI</th>
                            <th class="text-center">ĐỊA CHỈ</th>
                            <th class="text-center">EMAIL</th>
                            <th class="text-center">TÀI KHOẢN</th>
                            <th class="text-center">QUYỀN TRUY CẬP</th>
                            <th class="text-center">ẢNH</th>
                            <th class="text-center">CHỈNH SỬA</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data as $key => $customer): ?>
                            <tr>
                                <td><?php echo ++$key; ?></td>
                                <td><a  class="link-info" href="#"><?php echo $customer['name']; ?></a></td>
                                <td><?php echo $customer['phone_number']; ?></td>
                                <td><?php echo $customer['address']; ?></td>
                                <td><?php echo $customer['email']; ?></td>
                                <td><?php echo $customer['account']; ?></td>
                                <?php if ($customer['permission'] > 0): ?>
                                    <td><?php echo "Admin"; ?></td>
                                <?php else: ?>
                                    <td><?php echo "Người dùng"; ?></td>
                                <?php endif; ?>
                                <td><img src="<?php echo UPROOT . "/user/" . $customer['image']; ?>" alt="image" width="200px" height="200px"></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#<?php echo $customer['id']; ?>">Xóa
                                    </button>
                                    <form action="<?php echo URLROOT; ?>/Manager/deleteUser/<?php echo $customer['id']; ?>"
                                          method="get">
                                        <div class="modal fade" id="<?php echo $customer['id']; ?>" tabindex="-1"
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
                                                        Bạn có muốn xóa khách hàng này không ?
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
