<?php
    $mabn = $_GET['mabn'];
    $sql = "SELECT * FROM banner WHERE mabn=$mabn";
    $banner = getData($sql);
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
            <?php foreach($banner as $bn) : ?>
                <h4><b><?= $bn['tenbn'] ?></b></h4>
                <img src="../img/<?= $bn['img_bn'] ?>" width="500px">             
            <?php endforeach ?>
        </div>
        <div class="addsp">
            <a href="?action=giaodien&query=sua_bn&mabn=<?= $bn['mabn'] ?>">Sửa</a>
            <a onclick="return confirm('Bạn có chắc chắc xóa không?')" href="../admin/modules/giaodien/xoa_bn.php?mabn=<?= $bn['mabn'] ?>">Xóa</a>
            <a href="?action=giaodien&query=editgd">Giao diện</a>
        </div>
    </main>
