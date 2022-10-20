<?php
$myCon = new PDO('mysql:host=localhost; dbname=products', 'root', '');
include 'Index.php';
$id = $_GET['NumID'];
$eliminar = "DELETE FROM products WHERE Id_Productos = '$id'";
$elimina = $myCon->query($eliminar);
header("location:Index.php");
$myCon->close();
?>

