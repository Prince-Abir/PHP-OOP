
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning PHP Oops Concept</title>
</head>
<body>
    <h1>PHP OOPs Concept....</h1>
    
</body>
</html>


<?php

class MyClass{

    private string $name;
    private $id;
    private $age;
    private $address;
    public $salary;

    

    function __construct($name, $id , $age, $sa, $add){
        $this->name = $name;
        $this->id = $id;
        $this->age = $age;
        $this->salary = $sa;
        $this->address = $add;
    }

 

    function printName(){
        echo "Hello It's me " . $this->name . "</br>";
    }

    function printId(){
        echo "My ID is :" . $this->id . "</br>";
    }

    function printSalary(){

        echo "And My Salary is : " . $this->salary . "</br>";
    }

}

$myClass = new MyClass("Prince", 201,17,50000,"Badda Notun Bazar");

$myClass->printName();
$myClass->printId();
$myClass->printSalary();


?>