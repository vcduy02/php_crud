<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $tenbv = $_POST['tenbv'];
        $noidung = $_POST['noidung'];
        $anh = 'no_image.png';

        if ($_FILES['anh']['size'] > 0){
            $anh = $_FILES['anh']['name'];
        }

        if ($_FILES['anh']['size'] > 0){
            move_uploaded_file($_FILES['anh']['tmp_name'], 'C:/xampp/htdocs/DUAN1.1/img/' .$anh);
        }
        
        $sql = "INSERT INTO tintuc(tenbv, anh, noidung) VALUES ('$tenbv', '$anh', '$noidung')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        header('location:?action=tintuc&query=edit_tt&message=Thêm bài viết thành công');
        die;
    }
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
        <h1>Thêm bài viết</h1>
        <form action="" method="post" enctype="multipart/form-data"></label>
            <input type="text" name="tenbv" placeholder="Tên bài viết" style="width: 960px;">
            <br>
            <input type="file" name="anh" placeholder="Ảnh bài viết">
            <br>
            <textarea name="noidung" id="classic" cols="117" rows="10"></textarea>
            <br>
            <button class="save" type="submit">Thêm</button>
            <br>
            <a class="backds" href="?action=tintuc&query=edit_tt">Danh sách</a>
        </form>
    </main>