<?php
declare(encoding='UTF-8');
namespace cqy{
class con{
    function start(){
        echo "namespace is ".__NAMESPACE__,PHP_EOL;
    }
}
function start(){
    echo "namespace is ".__NAMESPACE__,PHP_EOL;
}
}

namespace fxg{
    class con{
        static function start(){
            echo "namespace is ".__NAMESPACE__,PHP_EOL;
        }
    }
}

namespace {
    // 全局的命名空间
    cqy\start();
    echo fxg\con::start();// 双冒号是用来访问静态方法
    $c1=new cqy\con();
    $c1->start();
}

namespace Foo{

function strlen() {}
const INI_ALL = 3;
class Exception {}

$a = \strlen('hi'); // 调用全局函数strlen
$b = \INI_ALL; // 访问全局常量 INI_ALL
$c = new \Exception('error'); // 实例化全局类 Exception
echo $c;
}
// \subplace\function()和subplace\function() 是不一样的，前者是绝对的路径，根目录
// 是最根部的根目录，后者是相对的路径，根目录是从currantspace开始的。
// 前者称为完全限定，后者成为限定名称
?>

