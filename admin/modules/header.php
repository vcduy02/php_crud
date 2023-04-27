<nav class="nav-top">
                <ul class="ul1">
                    <li>
                        <a href="../index.php">Trang chủ</a>
                    </li>
                    <li>
                        <a href="index.php?action=admin&query=admin">Thông tin</a>
                    </li>
                    <li>
                        <a href="index.php?action=sanpham&query=edit">Sản phẩm</a>
                    </li>
                    <li>
                        <a href="index.php?action=danhmuc&query=edit_dm">Danh mục</a>                    
                    </li>
                    <li>
                        <a href="index.php?action=giaodien&query=editgd">Giao diện</a>
                    </li>
                    <li><a href="index.php?action=khachhang&query=edit_kh">Khách hàng</a></li>
                    <li>
                        <a href="index.php?action=tintuc&query=edit_tt">Bài viết</a>
                    </li>
                </ul>
                <?php if(isset($_SESSION['hoten'])) : ?>
                    <div class="login">
                        <?= $_SESSION['hoten'] ?>
                        <a href="../pages/access/logout.php"><i class="fas fa-sign-out-alt"></i></a>
                    </div>
                <?php endif ?>
    </nav>