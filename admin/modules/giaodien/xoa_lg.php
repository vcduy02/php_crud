<?php
    include '../../config/conn.php';

    $malg = $_GET['malg'];
    $sql = "DELETE FROM logo WHERE malg=$malg";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header('location:../../index.php?action=giaodien&query=editgd&message=Xóa logo thành công');
    die;