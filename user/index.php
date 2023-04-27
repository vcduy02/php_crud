<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../user/css/style.css">
    <script src="https://kit.fontawesome.com/cb88c756b4.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        session_start();
        include '../admin/config/conn.php';
        include '../user/mudules/header.php';
        include '../user/mudules/main.php';
    ?>
</body>
</html>