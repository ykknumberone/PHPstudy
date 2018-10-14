<?php
    $flag = true;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['username'];
        $p = $_POST['pwd'];
        if($name == 'Admin'&& $p == '123'){
            $flag = false;
        }else{
            $flag=true;
        }
    }

?>

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
        if($flag) {
    ?>

            <form action="login_1.php" method="post">
                用户名:<input type="text" name="username" ><br/>
                密码:<input type="password" name="pwd" ><br/>
                <input type="submit" value="submit">
            </form>
    <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                echo "密码错误,请重新输入!";
            }

    ?>
</body>
</html>
    <?php
        }else{
            echo "成功!";
        }
    ?>