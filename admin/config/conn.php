<?php
    try {
        $conn = new PDO("mysql:host=localhost; dbname=asm; charset=utf8", 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e){
        echo "Lỗi kết nối: " . $e->getMessage();
    }

    function getData($sql, $flag = true){
        global $conn;
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        if ($flag){
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function checkEmail($email){
        $sql = "SELECT * From users WHERE email = $email";
        getData($sql, false);
    }