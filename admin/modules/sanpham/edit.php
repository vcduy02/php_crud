<?php
    $sql = "SELECT * FROM sanpham ORDER BY madm DESC";
    $sanpham = getData($sql);
?>

<style>
    table{
        border-top: 1px solid black;
    }
    .addsp{
        margin: 10px 5px;
    }
    .addsp a{
        border: 1px solid black;
        padding: 5px;
        margin-right: 10px;
    }
    .addsp a:hover{
        background-color: rgb(66, 44, 44);
    }

</style>
    <div class="addsp">
        <a href="?action=sanpham&query=them_sp">Thêm sản phẩm</a>
    </div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Mã SP</th>
            <th scope="col">Ảnh SP</th>
            <th scope="col">Tên SP</th>
            <th scope="col">Giá SP</th>
            <th scope="col">Mã DM</th>
            <th scope="col">Tình trạng</th>
            <th scope="col">Chỉnh sửa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($sanpham as $sp) : ?>
                <tr>
                    <td><?= $sp['masp'] ?></td>
                    <td><img src="../img/<?= $sp['anh'] ?>" width="50"></td>
                    <td><?= $sp['tensp'] ?></td>
                    <td><?= $sp['gia'] ?></td>
                    <td><?= $sp['madm'] ?></td>
                    <td><?= $sp['tinhtrang'] ?></td>
                    <td>
                        <a href="?action=sanpham&query=sua_sp&masp=<?= $sp['masp'] ?>">Sửa</a>
                        <span>/</span>
                        <a onclick="return confirm('Bạn có chắc chắc xóa không?')" href="../admin/modules/sanpham/xoa_sp.php?masp=<?= $sp['masp'] ?>">Xóa</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>