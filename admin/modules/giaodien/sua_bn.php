<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $mabn = $_POST['mabn'];
        $img_bn = $_POST['img_bn'];
        
        if ($_FILES['img_bn']['size'] > 0){
            $img_bn = $_FILES['img_bn']['name'];
        }

        $sql = "UPDATE banner SET img_bn='$img_bn' WHERE mabn=$mabn";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        if ($_FILES['img_bn']['size'] > 0){
            move_uploaded_file($_FILES['img_bn']['tmp_name'], 'img/' . $img_bn);
        }

        header("location:?action=giaodien&query=editgd&message=Cập nhật thành công");
        die;
    }

    $mabn = $_GET['mabn'];
    $sql = "SELECT * FROM banner WHERE mabn=$mabn";
    $banner = getData($sql, false);
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
        <h1>Cập nhật banner</h1>
        <form action="" method="post" enctype="multipart/form-data"></label>
            <input type="hidden" name="mabn" value="<?= $banner['mabn'] ?>">
            <br>
            <input type="file" name="img_bn" placeholder="Banner">
            <br>
            <img src="../img/<?= $banner['img_bn'] ?>" width="500">
            <input type="hidden" name="img_bn" value="<?= $banner['img_bn'] ?>">
            <br>
            <button type="submit">Cập nhật</button>
            <br>
            <a class="backds" href="?action=giaodien&query=edit_bn&mabn=<?= $banner['mabn'] ?>">Banner</a>
        </form>
    </main>