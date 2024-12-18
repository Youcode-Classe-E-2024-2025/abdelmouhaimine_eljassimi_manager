<?php 
include("database.php");

if (isset($_POST["editRoleBtn"])) {
    $id = $_POST["id"];
    $actorRole = $_POST["actorRole"];
    $idpage = $_GET["id"];

    $query = "UPDATE actor_roles SET role_id = $actorRole WHERE actor_id = $id";
    $result = mysqli_query($connection, $query);
    header("location: dashboard.php?id=".$idpage);


}

?>