<?php

class Parentclass{
    public function greet(){
        echo "Hello from Parents<br>";
    }
}
class childclass extends Parentclass{
    public function greet(){
        Parent::greet(); // use Parent keyword to parentclass method fetch
        echo "Hello from child";
    }

}

$obj = new childclass();
$obj->greet();

?>