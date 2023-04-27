<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $madm = $_POST['madm'];
        $tendm = $_POST['tendm'];

        $sql = "INSERT INTO danhmuc(madm, tendm) VALUES ('$madm', '$tendm')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        header('location:?action=danhmuc&query=edit_dm&message=Thêm danh mục thành công');
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
</style>
    <main>
        <h1>Thêm danh mục</h1>
        <form action="" method="post" enctype="multipart/form-data"></label>
            <input type="text" name="madm" placeholder="Mã danh mục">
            <br>
            <input type="text" name="tendm" placeholder="Tên danh mục">
            <br>
            <button class="save" type="submit">Thêm</button>
            <br>
            <a class="backds" href="?action=danhmuc&query=edit_dm">Danh sách</a>
        </form>
    </main>