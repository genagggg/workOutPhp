<?php
if(isset($_POST["text"])){
echo $_POST['age'];
echo $_POST["text"];
$myFile=fopen("text.txt","w") or die("Не удалось открыть фаил");
fwrite($myFile,$_POST["text"]);
fclose($myFile);
}
?>