<?php
    $sql = "SELECT * FROM danhmuc ORDER BY madm DESC";
    $danhmuc = getData($sql);
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
        <a href="?action=danhmuc&query=them_dm">Thêm danh mục</a>
    </div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Mã DM</th>
            <th scope="col">Tên DM</th>
            <th scope="col">Chỉnh sửa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($danhmuc as $dm) : ?>
                <tr>
                    <td><?= $dm['madm'] ?></td>
                    <td><?= $dm['tendm'] ?></td>
                    <td>
                        <a href="?action=danhmuc&query=sua_dm&madm=<?= $dm['madm'] ?>">Sửa</a>
                        <span>/</span>
                        <a onclick="return confirm('Bạn có chắc chắc xóa không?')" href="../admin/modules/danhmuc/xoa_dm.php?madm=<?= $dm['madm'] ?>">Xóa</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>