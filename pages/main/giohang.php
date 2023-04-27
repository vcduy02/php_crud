<h3>Giỏ hàng</h3>
    <div class="wrapper">
    <p>
    My shopping cart: 
        <?php 
            if(isset($_SESSION['hoten'])){
                echo $_SESSION['hoten'];
            }
        ?>
    </p>
    <?php
    if(isset($_SESSION['cart'])){

    }
    // unset($_SESSION['register']);
    ?>
        <table class="table-cart">
        <tr>
            <th>STT</th>
            <th>Mã sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Số lượng</th>
            <th>Giá sản phẩm</th>
            <th>Thành tiền</th>
            <th>Thao tác</th>
        </tr>
        <?php 
            if(isset($_SESSION['cart'])){
                $i = 0;
                $tt = 0;
                foreach ($_SESSION['cart'] as $cart_item) {
                    $thanhtien = $cart_item['so_luong'] * $cart_item['gia_sanpham'];
                    $tt += $thanhtien;
                    $i++;
        ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $cart_item['ma_sanpham'] ?></td>
            <td class="img-products"><img src="<?php echo 'admin/modules/quanlysp/uploads/'.$cart_item['image'];?>" alt=""></td>
            <td><?php echo $cart_item['name_sanpham'] ?></td>
            <td class="edit-solg">
                <a href="pages/main/add-card.php?cong=<?php echo $cart_item['id']?>"><button>+</button></a>
                <?php echo $cart_item['so_luong'] ?>
                <a href="pages/main/add-card.php?tru=<?php echo $cart_item['id']?>"><button>-</button></a> 
            </td>
            <td><?php echo number_format($cart_item['gia_sanpham'],0,',','.'). 'vnđ'; ?></td>
            <td><?php echo number_format($thanhtien,0,',','.').'vnđ'?></td>
            <td><a href="pages/main/add-card.php?delid=<?php echo $cart_item['id']?>">Xóa</a></td>
        </tr>
        <?php 
            }
        ?>
        <tr>
            <td><p>Tổng tiền: <?php echo number_format($tt,0,',','.'). 'vnđ'  ?></p></td>
            <td><a href="pages/main/add-card.php?delall=1">Xóa tất cả</a></td>
        </tr>
        <tr>
            <?php 
                if(isset($_SESSION['hoten'])) {
            ?>
                <td><a href="index.php?quanly=payment">Thanh toán</a></td>
            <?php
            } else {
            ?>
                <td><a href="index.php?quanly=dangky">Đăng ký thanh toán</a></td>
            <?php
                }
            ?>
        </tr>
        <?php
        }else {
            ?>
        <tr>
            <td text-align="center"><p>Hiện tại giỏ hàng trống</p></td>
        </tr>
        <?php
            }
        ?>
    </table>
    </div>

