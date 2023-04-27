<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $tenbn = $_POST['tenbn'];
        $img_bn = 'no_image.png';


        if ($_FILES['img_bn']['size'] > 0){
            $img_bn = $_FILES['img_bn']['name'];
        }

        $sql = "INSERT INTO banner(tenbn, img_bn) VALUES ('$tenbn', '$img_bn')";

        //Chuẩn bị
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        //Upload ảnh
        if ($_FILES['img_bn']['size'] > 0){
            move_uploaded_file($_FILES['img_bn']['tmp_name'], 'img/' . $img_bn);
        }

        header('location:?action=giaodien&query=editgd&message=Thêm logo thành công');
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
    .backds{
        text-decoration: none;
        border: 1px solid black;
        padding: 5px 10px;
        color: black;
    }
</style>
    <main>
        <h1>Thêm Banner</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="tenbn" placeholder="Tên banner">
            <br>
            <label for="">Ảnh Banner</label>
            <br>
            <input type="file" name="img_bn">
            <br>
            <button class="save" type="submit">Thêm</button>
            <br>
            <a class="backds" href="?action=giaodien&query=editgd">Giao diện</a>
        </form>
    </main>
