<?php
    if (isset($_GET['action']) && isset($_GET['query'])) {
        $tam = $_GET['action'];
        $query = $_GET['query'];
    }else {
        $tam = '';
        $query = '';
    }

    if ($tam == 'access' && $query =='login') {
        include("pages/access/login.php");
    }elseif ($tam == 'access' && $query =='register') {
        include("pages/access/register.php");
    }elseif ($tam == 'admin' && $query =='index') {
        include("admin/index.php");
    }elseif ($tam == 'user' && $query =='index') {
        include("user/index.php");
    }elseif ($tam == 'main' && $query =='tintuc') {
        include("main/tintuc.php");
    }elseif ($tam == 'main' && $query =='baiviet') {
        include("main/baiviet.php");
    }elseif ($tam == 'main' && $query =='sanpham') {
        include("main/sanpham.php");
    }else{ 
        include("pages/main/index.php");
    }
?>