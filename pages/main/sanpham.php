<?php
    //Sản phẩm
    $masp = $_GET['masp'];
    $sql = "SELECT * FROM sanpham WHERE masp=$masp";
    $sp = getData($sql, false);

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
    main{
        background-color: rgb(243, 248, 252);
    }
    .main{
        display: flex;
    }
    .main img{
        padding: 10px;
        width: 600px;
    }
    .in-main{
        padding: 10px;
    }
    .in-main h4{
        margin-bottom: 20px;
    }
    .gia{
        margin: 20px 0;
        font-size: 20px;

    }
    .in-gia{
        color: red;
        font-size: 30px;
    }
    .submit{
        padding: 10px 20px;
        color: white;
        font-size: 20px;
        background-color: red;
        border: 1px solid red;
        border-radius: 5px;
    }
    .submit:hover{
        text-decoration: none;
        color: red;
        background-color: white;
    }
</style>
    <main>
        <div class="container">
            <div class="main">
                    <img src="./img/<?php echo $sp['anh'] ?>" alt="">
                    <div class="in-main">
                        <h4><b><?php echo $sp['tensp'] ?></b></h4>
                        <h5><b>Thông tin chung:</b></h5>
                        <p><?php echo $sp['thongtin'] ?></p>
                        <p class="gia">Giá: <b class="in-gia"><?php echo adddotstring($sp['gia']) ?>đ</b></p>
                        <a class="submit" href=""><b>ĐẶT HÀNG</b></a>
                    </div>
            </div>
            <div class="thongso">
                <h4><b>Thông số kĩ thuật</b></h4>
                <br>
                <p><?php echo $sp['thongso'] ?></p>
            </div>
        </div>
    </main>