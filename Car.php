<?php
/**
 * Created by PhpStorm.
 * User: 于楷
 * Date: 2018/10/13
 * Time: 14:34
 */

class Car
{
    var $color;
    function Car($color = 'red'){
        $this -> color = $color;
    }
    function what_car(){
        return $this->color;
    }
}
$xx = new Car();  
$aa = new Car('green');
echo $xx->what_car() . "<br/>";
echo $aa->what_car();