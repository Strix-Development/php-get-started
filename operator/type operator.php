<?php
class Mobile{
    public $model;
function ShowModel($number)
{
$this->model = $number;
echo "model number is $this->model";
}
}
$samsung =new Mobile;

var_dump($samsung instanceof Mobile);
echo "<br>";


?>