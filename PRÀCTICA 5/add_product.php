<?php

//Declaramos las variables y les assignamos los datos del formulario
$nombre = $_POST["name"];
$descripcion = $_POST["description"];
$precio = $_POST["price"];
$cantidad = $_POST["quantity"];
// Consulta para añadir los productos
$insertar = "INSERT INTO products(Name, Description, Price, q_sold)

VALUES ('$nombre', '$descripcion' , '$precio', '$cantidad')";

$consulta = $this->connect()->prepare($insertar);
//ejecutamos la consulta
$consulta->query([$insertar]);

try {
    //Connexió a la BBDD
    $myCon = new PDO('mysql:host=localhost; dbname=products', 'root', '');
    //Creem la consulta sql
    $sql ="SELECT * FROM products";

    //En caso de error
} catch (PDOException $e) {
    echo "error de connexió: " . $e->getMessage() . "<br/>";
    die();
}

    

?>

