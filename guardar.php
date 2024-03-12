<?php 
include 'cofig.php'; 
include 'plantilla.php';

$nombre = $_POST['nombre'];
$precio = $_POST['precio']; 

//insertar el producto en la tabla 
$sql ="INSERT INTO productos (nombre, precio) VALUES ('$nombre', '$precio')"; 

if($conn->query($sql) === TRUE) {
    header("Location= indet.php");
} else{
    echo "Error: " . $sql . "<br>" . $conn->error;
} 

$conn->close();