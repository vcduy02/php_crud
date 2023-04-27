<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $madm = $_POST['madm'];
        $tendm = $_POST['tendm'];

        $sql = "UPDATE danhmuc SET madm='$madm', tendm='$tendm' WHERE madm=$madm";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        header("location:?action=danhmuc&query=edit_dm&message=Cập nhật thành công");
        die;
    }

    $madm = $_GET['madm'];
    $sql = "SELECT * FROM danhmuc WHERE madm=$madm";
    $danhmuc = getData($sql, false);
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
            <input type="text" name="madm" value="<?= $danhmuc['madm'] ?>">
            <br>
            <input type="text" name="tendm" value="<?= $danhmuc['tendm'] ?>">
            <br>
            <button type="submit">Cập nhật</button>
            <br><br>
            <a class="backds" href="?action=danhmuc&query=edit_dm">Danh sách</a>
        </form>
    </main>
