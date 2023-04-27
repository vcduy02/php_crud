<?php
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE id=$id";
    $users = getData($sql, false);
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
    .tt{
        margin-top: 10px;
    }
    .in-tt{
        padding: 5px;
        border: 1px solid;
        color: white;
        background-color: blue;
    }
    .in-tt:hover{
        color: blue;
        background-color: white;

    }
</style>
<main>
    <div class="main">
        <p><b>Email:</b> <span><?= $users['email'] ?></span></p>
        <p><b>Họ tên:</b> <span><?= $users['hoten'] ?></span></p>
        <p><b>Tên đăng nhập:</b> <span><?= $users['username'] ?></span></p>
        <div class="tt">   
            <a class="in-tt" href="?action=admin&query=edit_admin&id=<?= $users['id'] ?>">Thay đổi thông tin</a>
        </div>
    </div>
</main>