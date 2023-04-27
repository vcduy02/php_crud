<?php
    //Sản phẩm
    $pageUnit = 4;

    $sql = "SELECT * FROM sanpham WHERE madm=3000 ORDER BY masp DESC LIMIT $pageUnit";
    $sanpham30 = getData($sql);

    $sql = "SELECT * FROM sanpham WHERE madm=1000 ORDER BY masp DESC LIMIT $pageUnit";
    $sanpham10 = getData($sql);

    $sql = "SELECT * FROM sanpham WHERE madm=1600 ORDER BY masp DESC LIMIT $pageUnit";
    $sanpham16 = getData($sql);

    $sql = "SELECT * FROM sanpham WHERE madm=2000 ORDER BY masp DESC LIMIT $pageUnit";
    $sanpham20 = getData($sql);

    function adddotstring($strNum) {
 
        $len = strlen($strNum);
        $counter = 3;
        $result = "";
        while ($len - $counter >= 0)
        {
            $con = substr($strNum, $len - $counter , 3);
            $result = '.'.$con.$result;
            $counter+= 3;
        }
        $con = substr($strNum, 0 , 3 - ($counter - $len) );
        $result = $con.$result;
        if(substr($result,0,1)=='.'){
            $result=substr($result,1,$len+1);
        }
        return $result;
    }
?>
    <style>
        .title{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
            background-color: rgb(0, 211, 0);
            color: white;
        }
        .title a{
            color: white;
            margin-right: 5px;
            font-size: 12px;
        }
        .title a:hover{
            color: rgb(129, 110, 0);
        }
        .title h4{
            padding: 5px 5px;
        }
        .in-main1{
            margin-top: 10px;
            display: flex;
            flex-wrap: wrap;
            width: 1213px;
        }
        .post{
            margin-right: 13px;
            width: 290px;
            padding: 5px;
            border: 1px solid green;
        }
        .post img{
            width: 278px;
            height: 278px;
            object-fit: cover;
            margin-bottom: 5px;
        }
        .post h5{
            margin-top: 15px;
            color: red
        }
        .post p{
            font-size: 12px;
            height: 36px;
            color: black;
        }
        .status{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .status i{
            display: flex;
            align-items: center;
        }
        .status .fas{
            font-size: 10px;
        }
        .status i p{
            margin-left: 5px;
            font-weight: 100;
            height: 12px;
            color: rgb(0, 161, 0);
        }
        .post a:hover{
            opacity: 50%;
            text-decoration: none;
        }
        .fa-check{
            color: rgb(0, 161, 0);
        }
    </style>
<main>
        <!-- Banner -->
        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
            <?php
                    $i = 0;
                    foreach ($banner as $bn){
                        $actives = '';
                        if ($i == 0) {
                            $actives = 'active';
                        }
                ?>
                <li data-target="#demo" data-slide-to="<?= $i; ?>" class="<?= $actives; ?>"></li>
                <?php $i++; } ?>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <?php
                    $i = 0;
                    foreach ($banner as $bn){
                        $actives = '';
                        if ($i == 0) {
                            $actives = 'active';
                        }
                ?>
                <div class="carousel-item <?= $actives; ?>">
                    <img src="./img/<?= $bn['img_bn'] ?>" width="100%">
                </div>
                <?php $i++; } ?>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>

        </div>

        <div class="container">
            <div class="main1">
                <div class="title">
                    <h4>RTX 3000 Series</h4>
                    <a href="./30series.php">
                        <p>Xem thêm >></p>
                    </a>
                </div>
                <div class="in-main1">
                    <?php foreach ($sanpham30 as $sp30) : ?>
                        <div class="post">
                            <a href="?action=main&query=sanpham&masp=<?= $sp30['masp'] ?>">
                                <img src="./img/<?= $sp30['anh'] ?>" alt="">
                                <p><b><?= $sp30['tensp'] ?></b></p>
                                <h5 class="price"><b><?= adddotstring($sp30['gia']) ?>₫</b></h5>
                                <div class="status">
                                    <i class="fas fa-check"><p><?= $sp30['tinhtrang'] ?></p></i>
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                        </div>   
                    <?php endforeach ?> 
                </div>
            </div>
            <div class="main1">
                <div class="title">
                    <h4>RTX 2000 Series</h4>
                    <a href="">
                        <p>Xem thêm >></p>
                    </a>
                </div>
                <div class="in-main1">
                    <?php foreach ($sanpham20 as $sp20) : ?>
                        <div class="post">
                            <a href="?action=main&query=sanpham&masp=<?= $sp20['masp'] ?>">
                                <img src="./img/<?= $sp20['anh'] ?>" alt="">
                                <p><b><?= $sp20['tensp'] ?></b></p>
                                <h5 class="price"><b><?= adddotstring($sp20['gia']) ?>₫</b></h5>
                                <div class="status">
                                    <i class="fas fa-check"><p><?= $sp20['tinhtrang'] ?></p></i>
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                        </div>   
                    <?php endforeach ?>   
                </div>
            </div>
            <div class="main1">
                <div class="title">
                    <h4>GTX 1600 Series</h4>
                    <a href="">
                        <p>Xem thêm >></p>
                    </a>
                </div>
                <div class="in-main1">
                    <?php foreach ($sanpham16 as $sp16) : ?>
                        <div class="post">
                            <a href="?action=main&query=sanpham&masp=<?= $sp16['masp'] ?>">
                                <img src="./img/<?= $sp16['anh'] ?>" alt="">
                                <p><b><?= $sp16['tensp'] ?></b></p>
                                <h5 class="price"><b><?= adddotstring($sp16['gia']) ?>₫</b></h5>
                                <div class="status">
                                    <i class="fas fa-check"><p><?= $sp16['tinhtrang'] ?></p></i>
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                        </div>   
                    <?php endforeach ?>   
                </div>
            </div>
            <div class="main1">
                <div class="title">
                    <h4>GTX 1000 Series</h4>
                    <a href="">
                        <p>Xem thêm >></p>
                    </a>
                </div>
                <div class="in-main1">
                    <?php foreach ($sanpham10 as $sp10) : ?>
                        <div class="post">
                            <a href="?action=main&query=sanpham&masp=<?= $sp10['masp'] ?>">
                                <img src="./img/<?= $sp10['anh'] ?>" alt="">
                                <p><b><?= $sp10['tensp'] ?></b></p>
                                <h5 class="price"><b><?= adddotstring($sp10['gia']) ?>₫</b></h5>
                                <div class="status">
                                    <i class="fas fa-check"><p><?= $sp10['tinhtrang'] ?></p></i>
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                        </div>   
                    <?php endforeach ?>  
                </div>
            </div>
        </div>
    </main>