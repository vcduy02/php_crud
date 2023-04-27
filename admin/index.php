<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../admin/css/style.css">
    <script src="https://kit.fontawesome.com/cb88c756b4.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/7t6f95a5oy9i852hzhorgh7d67g6j6notj1hkvlmam5ecpms/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
    <?php
        session_start();
        include './config/conn.php';
        include './modules/header.php';
        include './modules/main.php';
    ?>
    <script>
            tinymce.init({
            selector: 'textarea#classic',
            plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            });
    </script>
</body>
</html>