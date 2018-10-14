<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $name = $_POST['username'];
    $p = $_POST['pwd'];
    $s = $_POST['sex'];
    $a = $_POST['hobby'];
    $m = $_POST['list'];
    echo "您的用户名是:$name<br/>"."您的密码是:$p<br/>"."性别:$s<br/>";
    var_dump($a);
//    echo "<br/>school:$m";
    var_dump($m);

?>
</body>
</html>
