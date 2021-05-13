<!-- Side-Nav-->
<aside class="main-sidebar hidden-print ">
    <section class="sidebar" id="sidebar-scroll">
        <!-- Sidebar Menu-->
        <ul class="sidebar-menu">
            <li class="nav-level">--- Thông tin</li>
            <li class="active treeview">
                <a class="waves-effect waves-dark" href="<?php echo URLROOT; ?>/Home/managerIndex">
                    <i class="icon-speedometer"></i><span> Tổng quan</span>
                </a>
            </li>
            <li class="nav-level">--- Quản lý</li>
            <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span> Sản phẩm</span><i class="icon-arrow-down"></i></a>
                <ul class="treeview-menu">
                    <li><a class="waves-effect waves-dark" href="<?php echo URLROOT; ?>/Manager/ProductsList/1"><i class="icon-arrow-right"></i> Danh sách sản phẩm</a></li>
                    <li><a class="waves-effect waves-dark" href="<?php echo URLROOT; ?>/Manager/addProducts"><i class="icon-arrow-right"></i> Thêm sản phẩm</a></li>
                </ul>
            </li>
            <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Khách hàng</span><i class="icon-arrow-down"></i></a>
                <ul class="treeview-menu">
                    <li><a class="waves-effect waves-dark" href="<?php echo URLROOT; ?>/Manager/UserList"><i class="icon-arrow-right"></i>Danh sách khách hàng</a></li>
                </ul>
            </li>
            <li class="treeview"><a class="waves-effect waves-dark" href="#!"><i class="icon-briefcase"></i><span>Đơn hàng</span><i class="icon-arrow-down"></i></a>
                <ul class="treeview-menu">
                    <li><a class="waves-effect waves-dark" href="<?php echo URLROOT; ?>/Manager/OrdersList/1"><i class="icon-arrow-right"></i>Danh sách đơn hàng</a></li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
</div>