<?php
$id = $_GET['id'];
$myCon = new PDO('mysql:host=localhost; dbname=products', 'root', '');
$eliminar = "DELETE FROM products WHERE NumID = '$id'";
$elimina = $myCon->query($eliminar);
header("location:Index.php");
?>








