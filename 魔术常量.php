
<?php
function user($name)
{
    echo "my name is".$name,PHP_EOL;
    echo "this line is NO.".__LINE__,PHP_EOL;
    echo "this file is ".__FILE__,PHP_EOL;
    echo "this file is in ".__FILE__,PHP_EOL;
    echo "this function is called ".__FUNCTION__,PHP_EOL;
    echo "namespace is ".__NAMESPACE__,PHP_EOL;

}
class cqy{
    function fxg(){
        echo "class name is ".__CLASS__,PHP_EOL;
        echo "function is ".__FUNCTION__,PHP_EOL;
    }
}

user("wzy");
$t=new cqy();
$t->fxg();
?>

<?php
class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}
 
trait SayWorld {
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
        echo __TRAIT__;
    }
}
 
class MyHelloWorld extends Base {
    use SayWorld;
    // 会优先使用overload的内容
    // function sayHello(){
    //     echo "efsdf",PHP_EOL;
    // }
}
 
$o = new MyHelloWorld();
$o->sayHello();
?>