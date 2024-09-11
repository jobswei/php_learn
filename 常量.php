<?php
// 区分大小写的常量名
define("GREETING", "欢迎访问 Runoob.com");
echo GREETING;    // 输出 "欢迎访问 Runoob.com"
echo '<br>';
//echo greeting;   // 输出 "greeting"，但是有警告信息，表示该常量未定义
?>

常量在定义后，默认是全局变量，可以在整个运行的脚本的任何地方使用。
<?php
define("GREETING2", "欢迎访问 Runoob.com");
 
function myTest() {
    echo GREETING2;
}
 
myTest();    // 输出 "欢迎访问 Runoob.com"
?> 