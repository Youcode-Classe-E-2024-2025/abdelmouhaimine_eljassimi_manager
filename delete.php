<?php
include('database.php');

$id = $_GET["id"];

$query = "UPDATE actors SET status = 'archived' WHERE id = $id";
$result = mysqli_query($connection,$query);
    if(!$result){
        echo "Error :".mysqli_error( $connect);
    }else{
        header(header: "location:dashboard.php");
    }

?> 