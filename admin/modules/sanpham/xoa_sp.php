<?php
    include '../../config/conn.php';

    $masp = $_GET['masp'];
    $sql = "DELETE FROM sanpham WHERE masp=$masp";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header('location:../../index.php?action=sanpham&query=edit&message=Xóa sản phẩm thành công');
    die;