<?php 
$Host = "localhost"; // Los datos del hosting
$User = "root"; // usuario del hosting
$Password = ""; // password del hosting
$BD = "cherry"; // base de datos a conectar
$ConectinDb = mysqli_connect($Host,$User,$Password,$BD); // Pasar los parametros
if($ConectinDb->connect_errno){
    die('Error al conectar la base de datos'.$ConectinDb->connect_errno);
}
?>