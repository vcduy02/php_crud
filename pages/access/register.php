<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $hoten = $_POST['hoten'];
        $user = $_POST['username'];
        $pass = md5($_POST['password']);
        $pass1 = md5($_POST['password1']);

        if (empty($email) || empty($hoten) || empty($user) || empty($pass) || empty($pass1)){
            $erros = "Không được để trống mục nào!";
        }else if($pass != $pass1){
            $erros = 'Mật khẩu phải trùng nhau!';
        }else{
            $sql = "INSERT INTO users(email, hoten, username, password) VALUES ('$email', '$hoten', '$user', '$pass')";
            $stmt = $conn->prepare($sql);
            $stmt->execute();

            header('location:?action=access&query=login&message=Đăng ký thành công');
        }
    }
?>
<style>
    main{
        width: 300px;
        margin: 0 auto;
        margin-top: 20px;
        border: 1px solid black;
        padding: 20px 50px;
        text-align: center;
        box-sizing: unset;
    }
    form h1{
        margin-bottom: 20px;
        color: red;
    }
    form label{
        float: left;
    }
    form input{
        margin-top: 5px;
        margin-bottom: 20px;
        width: 290px;
        height: 30px;
        padding: 0  10px;
    }
    form button{
        text-align: center;
        padding: 5px 10px;
        border: solid;
        border-radius: 5px;
        background-color: red;
        color: white;
        margin-bottom: 5px;
        font-size: 20px;
    }
    form  footer a{
        text-decoration: none;
    }
</style>
    <main>
        <form action="" method="post">
            <h1>ĐĂNG KÝ</h1>
            <?php if(isset($erros)) : ?>
                <div style="color: red;">
                    <p><?= $erros ?></p>
                </div>
            <?php endif ?>
            <label for=""><b>Email</b></label>
            <br>
            <input type="text" name="email" id="">
            <label for=""><b>Họ tên</b></label>
            <br>
            <input type="text" name="hoten" id="">
            <label for=""><b>Tên đăng nhập</b></label>
            <br>
            <input type="text" name="username" id="">
            <br>
            <label for=""><b>Mật khẩu</b></label>
            <br>
            <input type="password" name="password" id="">
            <br>
            <label for=""><b>Xác nhận mật khẩu</b></label>
            <br>
            <input type="password" name="password1" id="">
            <br>
            <button type="submit">Đăng ký</button>
            <div class="footer">Đã có tài khoản! <a href="?action=access&query=login">Đăng nhập</a></div>
            <div class="footer"><a href="?action=access&query=">Quên mật khẩu?</a></div>
        </form>
    </main>