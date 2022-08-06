<?php

session_start();
error_reporting(0);

if (isset($_POST['submit'])) {
    $data = $_POST['data'];
    $rannum  = $_SESSION["number"];
    if ($data == $rannum) {
        header("Location: txt.php");
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>เข้าสู่ระบบ</h1>
    <form action="" method="post">
        Username:<br>
        <input type="text" pattern="[_A-Xa-z0-9]{8,}"><br>
        Password:<br>
        <input type="password" pattern="[A-Xa-z0-9]{8,}"><br>
        กรุณาพิมพ์เลขตามตัวเลขที่ปรากฎ:
        <?php
        $_SESSION["number"] = rand(1000, 9999);
        echo $_SESSION["number"];
        echo "<br>";
        ?>
        <input type="text" name="data" id="data"><br>
        <div class="input-group">
            <button name="submit">Login</button>
        </div>

    </form>


</body>

</html>