<?php

class Employee{
    public $name;
    public $age;
    public $salary;

    public function __construct($n,$a,$s){
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    public function info(){
        echo "<h1>Employee Details</h1>";
        echo "<h2>Employee Name:</h2>".$this->name;
        echo "<h2>Employee age:</h2>".$this->age;
        echo "<h2>Employee salary:</h2>".$this->salary;
    }     
}
class Manager extends Employee{
        public $ta = 1000;
        public $phone = 2000;
        public $total;

        

        public function info(){
            $this->total = $this->ta+$this->phone+$this->salary;
            echo "<h1>Manager Details</h1>";
            echo "<h2>Manager Name:</h2>".$this->name;
            echo "<h2>Manager age:</h2>".$this->age;
            echo "<h2>Manager salary:</h2>".$this->total;
        }
}

class Fm extends Employee{
    public $m =5000;
    public $totalSalary;

    public function info(){
            $this->totalSalary = $this->m+$this->salary;
            echo "<h1>Fm Details</h1>";
            echo "<h2>Fm Name:</h2>".$this->name;
            echo "<h2>FM age:</h2>".$this->age;
            echo "<h2>Fm salary:</h2>".$this->totalSalary;
}
}

$employee = new Employee("Pankaj Kumar",25,20000);
$manager = new Manager("Pintu Kumar",24,15000);
$fm = new Fm("Sanjeev Kumar",45,30000);
$employee->info();
$manager->info();
$fm->info();

?>