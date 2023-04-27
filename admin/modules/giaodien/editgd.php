<?php
    $sql = "SELECT * FROM logo";
    $logo = getData($sql);

    $sql = "SELECT * FROM banner";
    $baner = getData($sql);

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
    .post h4{
        margin-top: 10px;
    }
    .in-post{
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid black;
        padding: 10px 5px;
    }
</style>
    <main>
        <div class="main">
            <div class="post">
                <div class="in-post">
                    <h5><b>Ảnh Logo:</b></h5>
                    <?php foreach ($logo as $lg) : ?>             
                        <img src="../img/<?= $lg['img_logo'] ?>" class="img1" width="100px">
                    <?php endforeach ?>
                    <a href="?action=giaodien&query=edit_lg">Chỉnh sửa</a>
                </div>
            </div>
            
            <div class="post">
                <h4><b>Banner Trang chủ</b>
                    <span>
                        <a href="?action=giaodien&query=add_bn"><i class="fas fa-plus-circle"></i></a>
                    </span> 
                </h4>
                <?php foreach ($baner as $bn) : ?>
                    <div class="in-post">
                        <h5><b><?= $bn['tenbn'] ?></b></h5>
                        <img src="../img/<?= $bn['img_bn'] ?>" class="img1" width="100px">
                        <a href="?action=giaodien&query=edit_bn&mabn=<?= $bn['mabn'] ?>">Chỉnh sửa</a>
                    </div>
                <?php endforeach ?>
            </div>
            
        </div>
    </main>