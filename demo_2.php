<!DOCTYPE html>
<html>
<body>
<?php
//请把变量视为存储数据的容器
$x = 5;//全局

//local（局部）global（全局）static（静态）
//函数之外声明的变量拥有 Global 作用域，只能在函数以外进行访问。
//函数内部声明的变量拥有 LOCAL 作用域，只能在函数内部进行访问。
function text(){
    $y = 10;//局部
    $x = 6;
    echo "变量x是：".$x."<br/>";
    echo "变量y是".$y."<br/>";
}
text();
echo "x:".$x."<br/>";
echo "global:"."<br/>";
$a = 1;
$b = 2;
$sum = 0;
//局部访问全局变量
function text_global(){
    global $a,$b;
    $GLOBALS['sum'] = $GLOBALS['a']+$GLOBALS['b'];
    echo "变量a是：".$a."<br/>";
    echo "变量a是".$b."<br/>";
    echo "变量a+b是".$b."<br/>";
    $a = 10;

}
text_global();
echo "a:".$a."<br/>";
//static
echo "static:<br/>";
function static_text(){
    static $m = 0;
    echo "m:".$m."<br/>";
    $m++;
}
static_text();
static_text();
static_text();
?>

</body>
</html>