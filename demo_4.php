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
//首个参数定义常量的名称
//第二个参数定义常量的值
//可选的第三个参数规定常量名是否对大小写敏感。默认是 false。
define("GREETING","李狗冠<br/>",false);
echo GREETING;
//== 等于 $x == $y 有隐秘的数据转换
//=== 全等（完全相同） $x === $y 如果 $x 等于 $y，且它们类型相同，则返回 true。
$num = array(1,2,2,3,4,5,6,7);
foreach ($num as $index=>$value){

    echo "x:$value<br/>";
    echo "index:$index<br/>";
}
?>

</body>
</html>

