<?php
    include '../../config/conn.php';

    $mabv = $_GET['mabv'];
    $sql = "DELETE FROM tintuc WHERE mabv=$mabv";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header('location:../../index.php?action=tintuc&query=edit_tt&message=Xóa dữ liệu thành công');
    die;