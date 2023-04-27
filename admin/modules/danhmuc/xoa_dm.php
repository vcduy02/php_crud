<?php
    include '../../config/conn.php';
    
    $madm = $_GET['madm'];
    $sql = "DELETE FROM danhmuc WHERE madm=$madm";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header('location:../../index.php?action=danhmuc&query=edit_dm&message=Xóa danh mục thành công');
    die;
?>