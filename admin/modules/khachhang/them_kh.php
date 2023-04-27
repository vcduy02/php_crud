<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $hoten = $_POST['hoten'];
        $user = $_POST['username'];
        $pass = md5($_POST['password']);
        $pass1 = md5($_POST['password1']);

        if (empty($email) || empty($hoten) || empty($user) || empty($pass) || empty($pass1)){
            $erros = "Không được để trống mục nào!";
        }else if ($pass != $pass1){
            $erros = "Mật khẩu phải trùng nhau!";
        }else{
            $sql = "INSERT INTO users(email, hoten, username, password) VALUES ('$email', '$hoten', '$user', '$pass')";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            
            header('location:?action=khachhang&query=edit_kh&message=Thêm khách hàng thành công');
            die;
        }
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
        margin-bottom: 10px;
        width: 300px;
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
        <h1>Thêm khách hàng</h1>
        <?php if(isset($erros)) : ?>
            <div style="color: red;">
                <p><?= $erros ?></p>
            </div>
        <?php endif ?>
        <form action="" method="post"></label>
            <label for=""><b>Email</b></label>
            <br>
            <input type="email" name="email">
            <br>
            <label for=""><b>Họ tên</b></label>
            <br>
            <input type="text" name="hoten">
            <br>
            <label for=""><b>Tên đăng nhập</b></label>
            <br>
            <input type="text" name="username">
            <br>
            <label for=""><b>Mật khẩu</b></label>
            <br>
            <input type="password" name="password">
            <br>
            <label for=""><b>Nhập lại mật khẩu</b></label>
            <br>
            <input type="password" name="password1">
            <br>
            <button class="save" type="submit">Thêm</button>
            <br>
            <a class="backds" href="?action=khachhang&query=edit_kh">Danh sách</a>
        </form>
    </main>