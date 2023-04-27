<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $mabv = $_POST['mabv'];
        $tenbv = $_POST['tenbv'];
        $noidung = $_POST['noidung'];
        $anh = $_POST['anh'];
        if ($_FILES['anh']['size'] > 0){
            $anh = $_FILES['anh']['name'];
        }

        if ($_FILES['anh']['size'] > 0){
            move_uploaded_file($_FILES['anh']['tmp_name'], 'C:/xampp/htdocs/DUAN1.1/img/' . $anh);
        }

        $sql = "UPDATE tintuc SET tenbv='$tenbv', anh='$anh', noidung='$noidung' WHERE mabv=$mabv";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        header("location:?action=tintuc&query=edit_tt&message=Cập nhật thành công");
        die;
    }

    $mabv = $_GET['mabv'];
    $sql = "SELECT * FROM tintuc WHERE mabv=$mabv";
    $tintuc = getData($sql, false);
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
        margin: 10px 0;
    }
    .tensp{
        width: 600px;
    }
    .backds{
        text-decoration: none;
        border: 1px solid black;
        padding: 5px 10px;
    }
</style>

    <main>
        <h1>Cập nhật bài viết</h1>
        <form action="" method="post" enctype="multipart/form-data"></label>
            <input type="hidden" name="mabv" value="<?= $tintuc['mabv'] ?>">
            <input type="text" class="tenbv" name="tenbv" value="<?= $tintuc['tenbv'] ?>" style="width: 960px;">
            <br>
            <input type="file" name="anh">
            <br>
            <img src="../img/<?= $tintuc['anh'] ?>" width="500">
            <!-- Đặt giá trị của ảnh cũ vào đây -->
            <input type="hidden" name="anh" value="<?= $tintuc['anh'] ?>">
            <br>
            <br>
            <textarea name="noidung" id="classic" cols="117" rows="10"><?= $tintuc['noidung'] ?></textarea>
            <br>
            <button type="submit">Cập nhật</button>
            <br><br>
            <a class="backds" href="?action=tintuc&query=edit_tt">Danh sách</a>
        </form>
    </main>