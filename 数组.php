数值数组<br>
<?php
$car=array("Volvo","BMW");
$arraylen=count($car);
echo "数组长度".(string)$arraylen,PHP_EOL;// 强制类型转换与并置
?>

关联数组<br>
<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
foreach($age as $x=>$x_value){
    echo "Key=".$x." Value= ".$x_value;
    echo 
    PHP_EOL,"<br>";
}