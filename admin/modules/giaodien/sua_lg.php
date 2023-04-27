<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $malg = $_POST['malg'];
        $img_logo = $_POST['img_logo'];
        
        if ($_FILES['img_logo']['size'] > 0){
            $img_logo = $_FILES['img_logo']['name'];
        }

        $sql = "UPDATE logo SET img_logo='$img_logo' WHERE malg=$malg";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        if ($_FILES['img_logo']['size'] > 0){
            move_uploaded_file($_FILES['img_logo']['tmp_name'], 'img/' . $img_logo);
        }

        header("location:?action=giaodien&query=editgd&message=Cập nhật thành công");
        die;
    }

    $malg = $_GET['malg'];
    $sql = "SELECT * FROM logo WHERE malg=$malg";
    $logo = getData($sql, false);
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
    button{
        margin: 10px 0;
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
            <input type="hidden" name="malg" value="<?= $logo['malg'] ?>">
            <br>
            <input type="file" name="img_logo" placeholder="Logo">
            <br>
            <img src="../img/<?= $logo['img_logo'] ?>" width="200">
            <!-- Đặt giá trị của ảnh cũ vào đây -->
            <input type="hidden" name="img_logo" value="<?= $logo['img_logo'] ?>">
            <br>
            <button type="submit">Cập nhật</button>
            <br>
            <a class="backds" href="?action=giaodien&query=edit_lg">Logo</a>
        </form>
    </main>