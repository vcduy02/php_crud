<?php
    $sql = "SELECT * FROM logo";
    $logo = getData($sql);
?>
<style>
    main{
        margin-top: 10px;
        margin-left: auto;
        margin-right: auto;
        width: 1000px;
        border: 1px solid black;
        padding: 10px;
    }
    .main{
        margin-bottom: 10px;
    }
    .main img{
        margin: 20px 0;
    }
    .addsp a{
        border: 1px solid black;
        padding: 5px;
    }
    .addsp a:hover{
        background-color: rgb(66, 44, 44);
    }
</style>
    <main>
        <div class="main">
            <?php foreach($logo as $lg) : ?>
                <h4><b>Ảnh Logo</b></h4>
                <img src="../img/<?= $lg['img_logo'] ?>" width="200px">             
            <?php endforeach ?>
        </div>
        <div class="addsp">
            <a href="?action=giaodien&query=add_logo">Thêm logo</a>
            <a href="?action=giaodien&query=sua_lg&malg=<?= $lg['malg'] ?>">Sửa</a>
            <a onclick="return confirm('Bạn có chắc chắc xóa không?')" href="../admin/modules/giaodien/xoa_lg.php?malg=<?= $lg['malg'] ?>">Xóa</a>
            <a href="?action=giaodien&query=editgd">Giao diện</a>
        </div>
    </main>