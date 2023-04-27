<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_POST['id'];
        $email = $_POST['email'];
        $hoten = $_POST['hoten'];
        $user = $_POST['username'];
        $pass = md5($_POST['password']);
        $pass1 = md5($_POST['password1']);
        $usertype = $_POST['usertype'];

        if (isset($pass) && isset($pass1)){
            if ($pass != $pass1){
                $erros = "Mật khẩu phải trùng nhau!";
            }else{
                $sql = "UPDATE users SET email='$email', hoten='$hoten', username='$user', password='$pass', usertype='$usertype' WHERE id=$id";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                
                header("location:?action=khachhang&query=edit_kh&message=Cập nhật thành công");
                die;
            }
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
    }
    .tensp{
        width: 600px;
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
        <h1>Cập nhật tài khoản khách hàng</h1>
        <?php if(isset($erros)) : ?>
            <div style="color: red;">
                <p><?= $erros ?></p>
            </div>
        <?php endif ?>
        <form action="" method="post"></label>
            <input type="hidden" name="id" value="<?= $users['id'] ?>">
            <label for=""><b>Email</b></label>
            <br>
            <input type="email" class="tensp" name="email" value="<?= $users['email'] ?>">
            <br>
            <label for=""><b>Họ tên</b></label>
            <br>
            <input type="text" name="hoten" value="<?= $users['hoten'] ?>">
            <br>
            <label for=""><b>Tên đăng nhập</b></label>
            <br>
            <input type="text" name="username" value="<?= $users['username'] ?>">
            <br>
            <label for=""><b>Mật khẩu muốn đổi</b></label>
            <br>
            <input type="password" name="password">
            <br>
            <label for=""><b>Nhập lại mật khẩu</b></label>
            <br>
            <input type="password" name="password1">
            <br>
            <label for=""><b>Quyền hạn</b></label>
            <br>
            <input type="text" name="usertype" value="<?= $users['usertype'] ?>">
            <br>
            <button type="submit">Cập nhật</button>
            <br>
            <a class="backds" href="?action=khachhang&query=edit_kh">Danh sách</a>
        </form>
    </main>