<?php
    //Thêm sản phẩm
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $tensp = $_POST['tensp'];
        $thongtin = $_POST['thongtin'];
        $gia = $_POST['gia'];
        $thongso = $_POST['thongso'];
        $madm = $_POST['madm'];
        $tinhtrang = $_POST['tinhtrang'];
        $anh = 'no_image.png';
        if ($_FILES['anh']['size'] > 0){
            $anh = $_FILES['anh']['name'];
        }

        $sql = "INSERT INTO sanpham(anh, tensp, thongtin, gia, thongso, madm, tinhtrang) VALUES ('$anh', '$tensp', '$thongtin', '$gia', '$thongso', '$madm', '$tinhtrang')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        //Upload ảnh
        if ($_FILES['anh']['size'] > 0){
            move_uploaded_file($_FILES['anh']['tmp_name'], 'C:/xampp/htdocs/DUAN1.1/img/' . $anh);
        }

        //Di chuyển sang trang show khi thêm sản phẩm
        header('location:?action=sanpham&query=edit&message=Thêm sản phẩm thành công');
        die;
    }

    //Lấy dữ liệu của bảng danh mục
    $sql = "SELECT * FROM danhmuc";
    $danhmuc = getData($sql);
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
    form{
        margin-left: 10px;
    }
    input{
        margin-bottom: 10px;
    }
    .save{
        margin-bottom: 10px;
    }
    .backds {
        text-decoration: none;
        border: 1px solid black;
        padding: 5px 10px;
        color: black;
    }
    li{
        list-style: none;
        justify-content: center;
    }
</style>
    <main>
        <h1>Thêm sản phẩm</h1>
        <form action="" method="post" enctype="multipart/form-data"></label>
            <label for=""><b>Tên sản phẩm</b></label>
            <br>
            <input type="text" class="tensp" name="tensp">
            <br>
            <label for=""><b>Ảnh sản phẩm</b></label>
            <br>
            <input type="file" name="anh">
            <br>
            <label for=""><b>Thông tin chung</b></label>
            <br>
            <textarea name="thongtin" id="classic" cols="30" rows="10"></textarea>
            <br>
            <label for=""><b>Đơn giá</b></label>
            <br>
            <input type="number" name="gia">
            <br>
            <label for=""><b>Thông số</b></label>
            <br>
            <textarea name="thongso" id="classic" cols="30" rows="10"></textarea>
            <br>
            <label for=""><b>Danh mục</b></label>
            <br>
            <select name="madm" id="">
                <?php foreach ($danhmuc as $dm) : ?>
                    <option value="<?= $dm['madm'] ?>"><?= $dm['tendm'] ?></option>
                <?php endforeach ?>
            </select>
            <br>
            <label for=""><b>Tình trạng</b></label>
            <br>
            <input type="text" name="tinhtrang" placeholder="Tình trạng">
            <br>
            <button class="save" type="submit">Thêm</button>
            <br>
            <a class="backds" href="?action=sanpham&query=edit">Danh sách</a>
        </form>
    </main>