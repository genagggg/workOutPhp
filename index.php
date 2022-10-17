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
    session_start();
    $_SESSION['color']='red';
    ?>
    <h1 style = "<?php $stl="color:red";echo $stl; ?> "> Heading </h1>
    <?php include "main/main.php";
    require "main/config.php" ?> 
    <img src="<?php echo $image_path?>1.jpg">
    <img src="images/1.jpg">
    <form action="actionPost.php" method="post">
        Name: <input type="text" name="name"/>
        Age: <input type="text" name="age"/>
        <input type="submit" namу="submit" value="Submit"/>
    </form>

    <form action='posts.php' method='get'>
<input type='text' name='posts'/>
<input type='submit' name='submit' value='Submit'/>
    </form>

    <p><?php echo $_SESSION['color'] ?></p>
<?php


//$i = 1;
//while($i<=15){
    //echo "<h1 class=\"heading-item\">Hello world</h1>";
    //$i++;
//}
//==========================================================

// $i = 5;
// do { 
//     echo "The number is ".$i. "</br>";
//     $i++;
// }
// while($i<=8);

//==============================================
//The for loop

// for($i=0;$i<=10;$i++){
//     echo "Value of i: ".$i."</br>";c
// }
//==============================================
//foreach
// $person = array("Maxim", "Andrey", "Robert");
// foreach($person as $key=>$persons){
//     echo $persons;
// }

// $a = 7;

// switch($a){
//     case 5:
//         echo "Noo";
//         break;
//         case 7:
//             echo "Yes";
//             break;
//             default:
//             echo "default";

// }
//Функции
// function someSum($a, $b){
//     echo $a+$b;
// }

// someSum($x, 9);

// function myFunc($a, $b=10){
//     echo $a*$b;
// }

// myFunc(15, $x);

// function func($arg)  {

//     $result = 0;
  
//     for($i=0; $i<$arg; $i++) {
  
//       $result = $result + $i;
  
//     }
  
//     return $result;
  
//   }
  
//   echo func(5);
  //Глобальные переменные

  
  echo $_SERVER['HTTP_HOST'];
?>

<?php 
//Сохранение cookie
$name = "Tom";
$age = 36;
setcookie("name", $name);
setcookie("age", $age, time()+3600); //Срок действия -1 час (3600 секунд)
echo "Куки установлены";
?>

<?php
//Получение cookie
if (isset($_COOKIE["name"]))echo "Name: " .$_COOKIE["name"]."<br>";
if (isset($_COOKIE["age"]))echo "Age: ".$_COOKIE["age"]."<br>";
?>

<?php
//Сохранение массивов в cookie
setcookie("lang[1]", "PHP");
setcookie("lang[2]", "C#");
setcookie("lang[3]", "Java");

if(isset($_COOKIE["lang"])){
    foreach ($_COOKIE["lang"] as $name=>$value){
        $name = htmlspecialchars($name);
        $value = htmlspecialchars($value);
        echo "$name.$value <br />";
    }
}
//Удаление cookie
setcookie("lang[3]","", time()-3600);
?>
<script src="script.js"></script>
</body>
</html>
