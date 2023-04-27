<?php
    session_start();
    require_once '../../admin/config/conn.php';

    $id = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = getData($sql, false);

    if ($result['usertype'] == "admin"){
        header('location:../../admin?action=admin&query=index');
    }else{
        header('location:../../user?action=user&query=index');
    }

?>
