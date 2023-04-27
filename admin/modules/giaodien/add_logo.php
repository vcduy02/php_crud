<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $img_logo = 'no_image.png';
        if ($_FILES['anh']['size'] > 0){
            $anh = $_FILES['anh']['name'];
        }

        $sql = "INSERT INTO logo(img_logo) VALUES ('$img_logo')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        //Upload ảnh
        if ($_FILES['img_logo']['size'] > 0){
            move_uploaded_file($_FILES['img_logo']['tmp_name'], 'img/' . $img_logo);
        }

        header('location:?action=giaodien&query=edit_lg&message=Thêm logo thành công');
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
        <h1>Thêm Logo</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="img_logo" placeholder="Ảnh logo">
            <br>
            <button class="save" type="submit">Thêm</button>
            <br>
            <a class="backds" href="?action=giaodien&query=edit_lg">Logo</a>
        </form>
    </main>