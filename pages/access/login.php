<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user = $_POST['username'];
        $pass = md5($_POST['password']);

        $sql = "SELECT * FROM users WHERE username='".$user."' AND password='".$pass."'";
        $result = getData($sql, false);

        if ($result){
            $_SESSION['hoten'] = $result['hoten'];
            $_SESSION['id'] = $result['id'];
            header('location:index.php');
        }else {
            if (empty($result)){
                $erros = 'Tên đăng nhập hoặc mật khẩu không được để trống';
                
            } else{
                $erros = 'Tên đăng nhập hoặc mật khẩu sai';
            }
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
            <h1>ĐĂNG NHẬP</h1>
            <?php if(isset($erros)) : ?>
                <div style="color: red;">
                    <p><?= $erros ?></p>
                </div>
            <?php endif ?>
            <input type="text" name="usertype" hidden>
            <label for=""><b>Tên đăng nhập</b></label>
            <br>
            <input type="text" name="username" id="">
            <br>
            <label for=""><b>Mật khẩu</b></label>
            <br>
            <input type="password" name="password" id="">
            <br>
            <button type="submit">Đăng nhập</button>
            <div class="footer">Chưa có tài khoản? <a href="?action=access&query=register">Đăng ký</a></div>
            <div class="footer"><a href="?action=access&query=">Quên mật khẩu?</a></div>
        </form>
    </main>