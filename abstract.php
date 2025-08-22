<?php
abstract class A{

    protected $name;

    protected function __construct($n){
        $this->name = $n;
    }

    abstract protected function show();

}
class B extends A{

    public function __construct($n){
    parent::__construct($n);
    }
public function show(){
    echo "My Name is :".$this->name;
}
}

$obj = new B("Suraj Jaiswal");
$obj->show();
?>