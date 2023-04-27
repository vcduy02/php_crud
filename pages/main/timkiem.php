<?php
    //Sản phẩm
    $pageUnit = 4;
    if(isset($_GET['trang'])){
        $page = $_GET['trang'];
    }else{
        $page = 1;
    }
    $from = ($page-1)*$pageUnit;

    $tensp = $_GET['tensp'];
    $sql = "SELECT * FROM sanpham WHERE masp LIKE '%$tensp%' ORDER BY masp DESC LIMIT $from,$pageUnit";
    $sanpham = getData($sql);

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

</style>
    
    <main>
        <div class="container">
            <div class="main1">
                <div class="title">
                    <h4>RTX 3090</h4>
                </div>
                <div class="in-main1">
                    <?php foreach ($sanpham as $sp) : ?>
                        <div class="post">
                            <a href="./sanpham.php?masp=<?= $sp['masp'] ?>">
                                <img src="./img/<?= $sp['anh'] ?>" alt="">
                                <p><b><?= $sp['tensp'] ?></b></p>
                                <h5 class="price"><b><?= adddotstring($sp['gia']) ?>₫</b></h5>
                                <div class="status">
                                    <i class="fas fa-check"><p><?= $sp['tinhtrang'] ?></p></i>
                                    <i class="fas fa-shopping-cart"></i>
                                </div>
                            </a>
                        </div>   
                    <?php endforeach ?> 
                </div>
            </div>
            <div class="page" >
                <?php
                    $x = "SELECT masp FROM sanpham WHERE masp LIKE '%$tensp%'";
                    $stm = $conn->prepare($x);
                    $stm->execute();
                    $products = $stm->fetchAll(PDO:: FETCH_ASSOC);
                    $productSum = count($products);
                    $pageSum = ceil($productSum/$pageUnit);
                    for($i = 1; $i<=$pageSum; $i++) {
                ?>
                    <a class="page-item" href="30series.php?trang=<?=$i?>"><?=$i?></a>
                <?php } ?>
            </div>
        </div>
        <div class="main-late">
            <h6><p>ĐĂNG KÝ NHẬN EMAIL THÔNG BÁO KHUYẾN MẠI HOẶC ĐỂ ĐƯỢC TƯ VẤN MIỄN PHÍ</p></h6>
            <div class="form-late">
                <input type="text" placeholder="Nhập email hoặc số điện thoại của bạn">
                <a href="">
                    <p>Gửi</p>
                </a>
               
            </div>  
        </div>
        <hr>
        <div class="container">
            <div class="post-footer">
                <div class="in-footer">
                    <p><b>Giới thiệu NVIDIA</b></p>
                    <hr class="line">
                    <a href=""><p>Giới thiệu công ty</p></a>
                    <a href=""><p>Liên hệ hợp tác kinh doanh</p></a>
                    <a href=""><p>Thông tin tuyển dụng</p></a>
                </div>
                <div class="in-footer">
                    <p><b>CHÍNH SÁCH CHUNG</b></p>
                    <hr class="line">
                    <a href=""><p>Chính sách, quy định chung</p></a>
                    <a href=""><p>Chính sách vận chuyển</p></a>
                    <a href=""><p>Chính sách bảo hành</p></a>
                    <a href=""><p>Chính sách hàng chính hãng</p></a>
                    <a href=""><p>Bảo mật thông tin khách hàng</p></a>
                </div>
                <div class="in-footer">
                    <p><b>THÔNG TIN KHUYẾN MẠI</b></p>
                    <hr class="line">
                    <a href=""><p>Thông tin khuyến mại</p></a>
                    <a href=""><p>Sản phẩm khuyến mại</p></a>
                    <a href=""><p>Sản phẩm bán chạy</p></a>
                    <a href=""><p>Sản phẩm mới</p></a>
                    <a href="">
                        <img src="./img/bo-cong-thuong-1170x780.jpg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </main>