<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_POST['id'];
        $email = $_POST['email'];
        $hoten = $_POST['hoten'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $pass1 = $_POST['password1'];

        if ($pass != $pass1){
            $erros = 'Mật khẩu phải trùng nhau!';
        }else{
            $sql = "UPDATE users SET email='$email', hoten='$hoten', username='$username', password='$password' WHERE id=$id";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            header("location:?action=admin&query=admin&Cập nhật thành công");
            die;
        }
    }

    $id = $_GET['id'];
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
    form{
        margin-left: 10px;
    }
    input{
        margin-bottom: 10px;
        width: 300px;
        height: 30px;
    }
    .tensp{
        width: 600px;
    }
    button{
        margin-top: 10px;
    }
    .backds{
        text-decoration: none;
        border: 1px solid black;
        padding: 5px 10px;
    }
</style>
<main>
    <h1>Thay đổi thông tin</h1>
    <form action="" method="post" enctype="multipart/form-data"></label>
        <input type="hidden" name="id" value="<?= $users['id'] ?>">
        <label for="">Email</label>
        <br>
        <input type="text" name="email" value="<?= $users['email'] ?>">
        <br>
        <label for="">Họ tên</label>
        <br>
        <input type="text" name="hoten" value="<?= $users['hoten'] ?>">
        <br>
        <label for="">Tên tài khoản</label>
        <br>
        <input type="text" name="username" value="<?= $users['username'] ?>">
        <br>
        <label for="">Mật khẩu muốn đổi</label>
        <br>
        <input type="password" name="password">
        <br>
        <label for="">Nhập lại mật khẩu</label>
        <br>
        <input type="password" name="password1">
        <br>
        <button type="submit">Thay đổi</button>
        <br>
        <br>
        <a class="backds" href="?action=admin&query=admin">Thông tin</a>
    </form>
</main>