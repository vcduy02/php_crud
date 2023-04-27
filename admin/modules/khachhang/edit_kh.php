<?php
    $sql = "SELECT * FROM users WHERE id != 1";
    $users = getData($sql);
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
        <a href="?action=khachhang&query=them_kh">Thêm khách hàng</a>
    </div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Tên khách hàng</th>
            <th scope="col">Tên đăng nhập</th>
            <th scope="col">Email</th>
            <th scope="col">Quyền hạn</th>
            <th scope="col">Chỉnh sửa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $us) : ?>
                <tr>
                    <td><?= $us['id'] ?></td>
                    <td><?= $us['hoten'] ?></td>
                    <td><?= $us['username'] ?></td>
                    <td><?= $us['email'] ?></td>
                    <td><?= $us['usertype'] ?></td>
                    <td>
                        <a href="?action=khachhang&query=sua_kh&id=<?= $us['id'] ?>">Sửa</a>
                        <span>/</span>
                        <a onclick="return confirm('Bạn có chắc chắc xóa không?')" href="../admin/modules/khachhang/xoa_kh.php?id=<?= $us['id'] ?>">Xóa</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>