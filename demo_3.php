<!DOCTYPE html>
<html>
<body>
<?php
/*
echo 和 print 之间的差异：
echo - 能够输出一个以上的字符串
print - 只能输出一个字符串，并始终返回 1
echo 是一个语言结构，有无括号均可使用：echo 或 echo()。
*/

//var_dump() 会返回变量的数据类型和值：

$x = 10.365;
var_dump($x);
echo "<br>";
$x = 'aaa';
var_dump($x);
echo "<br>";
$x = true;
var_dump($x);

?>

</body>
</html>