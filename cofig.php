<!-- conexion entre el "visual studio" y la vase de datos con "XAMPP"-->
<?php 

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$datebase = "crud_php"; 

// crear la conexion  
$conn = new mysqli($servername, $username, $password, $datebase); 

// verificar conexion 
if ($conn->connect_error) {
    die("conexion fallida a la base de datos: " . $conn->connect_error); 
}