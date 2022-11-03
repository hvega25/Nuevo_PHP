<?php
$id = $_POST['id'];
$name = $_POST['Name'];
$description = $_POST['Description'];
$price =  $_POST['Price'];
$quantity = $_POST['Price'];


$myCon = new PDO('mysql:host=localhost; dbname=products', 'root', '');
$editar = "UPDATE products set Name = $name, ";
$elimina = $myCon->query($editar);
header("location:Index.php");
?>