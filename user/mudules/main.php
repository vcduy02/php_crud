<?php
    if (isset($_GET['action']) && isset($_GET['query'])) {
        $tam = $_GET['action'];
        $query = $_GET['query'];
    }else {
        $tam = '';
        $query = '';
    }

    if ($tam == 'user' && $query =='user') {
        include("mudules/user/user.php");
    }elseif ($tam == 'user' && $query =='edit_user') {
        include("mudules/user/edit_user.php");
    }else{ 
        include("mudules/user/user.php");
    }
?>