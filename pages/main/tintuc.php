<?php
    $sql = "SELECT * FROM logo";
    $logo = getData($sql);

    //Banner
    $sql = "SELECT * FROM banner";
    $banner = getData($sql);

    //Tin tức
    $sql = "SELECT * FROM tintuc ORDER BY mabv DESC";
    $tintuc = getData($sql);

?>
<style>
    .title{
        margin-top: 10px;
        background-color: rgb(0, 211, 0);
        color: white;
    }
    .title h4{
        padding: 5px 5px;
    }
    .main a:hover{
        text-decoration: none;
        opacity: 70%;
    }
    .in-main{
        margin: 20px 0;
        display: flex;
        border: 1px solid brown;
        padding: 10px;
    }
    .in-main img{
        width: 500px;
        object-fit: cover;
    }
    .thongtin{
        color: black;
        margin-left: 10px;
    }

</style>
    <main>
        <div class="container">
            <div class="title">
                    <h4>TIN TỨC</h4>
            </div>
            <div class="main">
                <?php foreach ($tintuc as $tt) : ?>
                    <a href="?action=main&query=baiviet&mabv=<?= $tt['mabv'] ?>">
                        <div class="in-main">
                            <img src="./img/<?= $tt['anh'] ?>" alt="">
                            <div class="thongtin">
                                <h3><b><?= $tt['tenbv'] ?></b></h3>
                            </div>
                        </div>
                    </a>
                <?php endforeach ?>
            </div>
        </div>
       
    </main>