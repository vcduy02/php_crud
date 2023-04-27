<?php
    //Logo
    $sql = "SELECT * FROM logo";
    $logo = getData($sql);

    //Banner
    $sql = "SELECT * FROM banner";
    $banner = getData($sql);

    $mabv = $_GET['mabv'];
    $sql = "SELECT * FROM tintuc WHERE mabv=$mabv";
    $tintuc = getData($sql);
?>
<style>
    .main{
        margin: 10px 0;
    }
    .main img{
        width: 1200px;
        margin: 20px 0;
    }
</style>
    <main>
        <div class="container">
            <div class="main">
                <?php foreach ($tintuc as $tt) : ?>
                    <h3><b><?= $tt['tenbv'] ?></b></h3>
                    <img src="./img/<?= $tt['anh'] ?>" alt="">
                    <div><?= $tt['noidung'] ?></div>
                <?php endforeach ?>
            </div>
        </div>
    </main>