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

$read = file('text.txt');
$count = count($read);
$i = 1;
foreach($read as $line){
    echo $line;
    if($i<$count){
        echo ', ';
    }
    $i++;
}

    // $anyfile = file('actionPost.php');
    // foreach($anyfile as $any){
    //     echo $any;
    // }

?>

<script src="script.js"></script>
</body>
</html>
