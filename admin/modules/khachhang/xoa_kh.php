<?php
    include '../../config/conn.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id=$id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header('location:../../index.php?action=khachhang&query=edit_kh&message=Xóa khách hàng thành công');
    die;