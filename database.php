<?php 


$HOSTNAME = "localhost";
$USERNAME = "root";
$PASSWORD = "";
$DATABASE = "books_manager";


$connection = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if(!$connection){
    die("connection failed");
}
?>

