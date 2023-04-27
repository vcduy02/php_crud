<?php
    $sql = "SELECT * FROM tintuc ORDER BY mabv DESC";
    $tintuc = getData($sql);
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
        <a href="?action=tintuc&query=them_bv">Thêm bài viết</a>
    </div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Mã bài</th>
            <th scope="col">Ảnh</th>
            <th scope="col">Tên bài</th>
            <th scope="col">Chỉnh sửa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($tintuc as $tt) : ?>
                <tr>
                    <td><?= $tt['mabv'] ?></td>
                    <td><img src="../img/<?= $tt['anh'] ?>" width="150"></td>
                    <td><b><?= $tt['tenbv'] ?></b></td>
                    <td>
                        <a href="?action=tintuc&query=sua_bv&mabv=<?= $tt['mabv'] ?>">Sửa</a>
                        <span>/</span>
                        <a onclick="return confirm('Bạn có chắc chắc xóa không?')" href="../admin/modules/tintuc/xoa_bv.php?mabv=<?= $tt['mabv'] ?>">Xóa</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>