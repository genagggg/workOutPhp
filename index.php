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
class Person{
    public $name;

    public function speak(){
        echo "Hi";
    }
}

$person1 = new Person();
$person1->name="Grigoriy";
$person1->speak();
echo $person1->name;
?>

<script src="script.js"></script>
</body>
</html>
