<?php
session_start();
echo $_POST['name'].'   '.$_SESSION['color'];
echo $_POST['age'];

?>