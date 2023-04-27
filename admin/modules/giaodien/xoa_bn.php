<?php
    include '../../config/conn.php';

    $malg = $_GET['mabn'];
    $sql = "DELETE FROM banner WHERE mabn=$mabn";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    header('location:../../index.php?action=giaodien&query=editgd&message=Xóa banner thành công');
    die;