<?php
include("database.php");

if (isset($_POST["sendemail"])) {

    $tocken = $_POST["tocken"];
    $password = $_POST["password"];

 
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $query = "UPDATE actors SET `password` = ? WHERE `tocken` = ?";
    $stmt = $connection->prepare($query);

    if ($stmt) {
        $stmt->bind_param("si", $hashedPassword, $tocken);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {

            header("Location: index.php");
            exit();
        } else {
            echo "Failed to update password.";
        }
    } else {
        echo "Failed to prepare the query: " . $connection->error;
    }
}
?>
