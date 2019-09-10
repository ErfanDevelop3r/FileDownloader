<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>افزودن فیلم به پلیر</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css"> 
</head>
<body>
<div class="container">
    <form method="post" action="index.php">

        <div class="formbox"> 
        <img src="logo.png" alt="" srcset="">
            <div class="centerform">
                <label>لینک دانلود فیلم:</label><input type="text" name="link" id="dllink" placeholder="لینک خود را وارد کنید"><br/>
                <label>نام فیلم جهت پخش:</label><input type="text" name="name" id="name" placeholder="نام فایل را به همراه فرمت وارد کنید"><br>
                <p class="badge badge-danger size">توجه: هنگاه وارد کردن اسم فایل حتما فرمت فایل را وارد کنید</p>
                <div class="box"><input type="submit" class="button" value="آپلود فایل"> <a href="<?php if(isset($_POST['name'])){echo '../HTML5Video/'.$_POST['name'];} ?>"><input class="button" type="button" value="تماشای فیلم"></a></div>
            </div>
        </div>
        
    </form>
</div>

    <?php

    if (isset($_POST['link']) and isset($_POST['name']))
    {
        $link = $_POST['link'];
        $name = $_POST['name'];
        file_put_contents("../HTML5Video/".$name, fopen($link,'r'));
    }
    ?>
</body>
</html>