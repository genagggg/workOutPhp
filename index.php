<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
<?php
// class Dog{
//     public $legs=4;
//     public function display(){
//         echo $this->legs;
//     }
// }

// $dog1 = new Dog();
// $dog1->display();

// $dog2 = new Dog();
// $dog2->legs=2;
// $dog2->display();

// class Person{
//     public function __constructor(){
//         echo "Object created";
//     }
// }
// $p = new Person();
// $p->__constructor();

// class Person{
//     public $name;
//     public $age;
//     public function __construct($name, $age){
//         $this->name=$name;
//         $this->age=$age;
//         echo 2;
//     }
//     public function __destruct(){
//         echo 1;
//     }

// }

// $test = new Person('Жора', 22);
// $test->__construct();
// unset($test);
// 
class Animals {
    public $tail;
    public $age;
    public function __construct($tail, $age){
        $this->tail=$tail;
        $this->age=$age;
    }

}

class Dog extends Animals{}

$dog1 = new Dog(false, 12);
echo $dog1->tail.'  '.$dog1->age;

?>


<script src="script.js"></script>
</body>
</html>
