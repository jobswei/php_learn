PHP 将所有全局变量存储在一个名为 $GLOBALS[index] 的数组中。 
index 保存变量的名称。这个数组可以在函数内部访问，也可以直接用来更新全局变量

<?php
$x=5;
$y=10;
 
function myTest()
{
    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
} 
 
myTest();
echo $y;
?>