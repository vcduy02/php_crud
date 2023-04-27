<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $masp = $_POST['masp'];
        $anh = $_POST['anh'];
        $tensp = $_POST['tensp'];
        $thongtin = $_POST['thongtin'];
        $gia = $_POST['gia'];
        $thongso = $_POST['thongso'];
        $madm = $_POST['madm'];
        $tinhtrang = $_POST['tinhtrang'];
        
        if ($_FILES['anh']['size'] > 0){
            $anh = $_FILES['anh']['name'];
        }

        $sql = "UPDATE sanpham SET tensp='$tensp', anh='$anh', thongtin='$thongtin', gia='$gia', thongso='$thongso', madm='$madm', tinhtrang='$tinhtrang' WHERE masp=$masp";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        if ($_FILES['anh']['size'] > 0){
            move_uploaded_file($_FILES['anh']['tmp_name'], 'C:/xampp/htdocs/DUAN1.1/img/' . $anh);
        }

        header("location:?action=sanpham&query=edit&message=Cập nhật thành công");
        die;
    }

    $sql = "SELECT * FROM danhmuc";
    $danhmuc = getData($sql);

    $masp = $_GET['masp'];
    $sql = "SELECT * FROM sanpham WHERE masp=$masp";
    $sanpham = getData($sql, false);
?>
<style>
    main{
        margin-top: 10px;
        margin-bottom: 20px;
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
    .tensp{
        width: 600px;
    }
    button{
        margin-bottom: 10px;
    }
    .backds{
        text-decoration: none;
        border: 1px solid black;
        padding: 5px 10px;
    }
</style>
    <main>
        <h1>Cập nhật sản phẩm</h1>
        <form action="" method="post" enctype="multipart/form-data"></label>
            <input type="hidden" name="masp" value="<?= $sanpham['masp'] ?>">
            <label for=""><b>Tên sản phẩm</b></label>
            <br>
            <input type="text" class="tensp" name="tensp" value="<?= $sanpham['tensp'] ?>">
            <br>
            <label for=""><b>Ảnh sản phẩm</b></label>
            <br>
            <input type="file" name="anh">
            <br>
            <img src="../img/<?= $sanpham['anh'] ?>" width="200">
            <!-- Đặt giá trị của ảnh cũ vào đây -->
            <input type="hidden" name="anh" value="<?= $sanpham['anh'] ?>">
            <br>
            <label for=""><b>Thông tin chung</b></label>
            <br>
            <textarea name="thongtin" id="classic" cols="30" rows="10"><?= $sanpham['thongtin'] ?></textarea>
            <br>
            <label for=""><b>Đơn giá</b></label>
            <br>
            <input type="number" name="gia" value="<?= $sanpham['gia'] ?>">
            <br>
            <label for=""><b>Thông số</b></label>
            <br>
            <textarea name="thongso" id="classic" cols="30" rows="10"><?= $sanpham['thongso'] ?></textarea>
            <br>
            <label for=""><b>Danh mục</b></label>
            <br>
            <select name="madm" id="">
                <?php foreach ($danhmuc as $dm) : ?>
                    <?php if ($dm['madm'] == $sanpham['madm']) : ?>
                        <option value="<?= $dm['madm'] ?>" selected><?= $dm['tendm'] ?></option>
                    <?php else : ?>
                        <option value="<?= $dm['madm'] ?>"><?= $dm['tendm'] ?></option>
                    <?php endif ?>
                <?php endforeach ?>
            </select>
            <br>
            <label for=""><b>Tình trạng</b></label>
            <br>
            <input type="text" name="tinhtrang" value="<?= $sanpham['tinhtrang'] ?>">
            <br>
            <button type="submit">Cập nhật</button>
            <br>
            <a class="backds" href="?action=sanpham&query=edit">Danh sách</a>
        </form>
    </main>