<?php 
include('database.php');
session_start();
if (isset($_POST["signin"])) {
    
  
    $email = $_POST["email"];
    $password = $_POST["password"];


    $query = "SELECT a.id, a.email, a.password,a.status, r.name AS role_name  FROM actors a   JOIN actor_roles ar ON a.id = ar.actor_id 
      JOIN roles r ON ar.role_id = r.id   WHERE a.email = ? AND a.status = 'active' ";
    

    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {

        if (password_verify($password, $row["password"])){

            $_SESSION['user_logged_in'] = true;
            $_SESSION['email'] = $row["email"];
            $_SESSION['role'] = $row["role_name"];
            $_SESSION['id'] = $row["id"];

            if ($row["role_name"] == "author") {
              $_SESSION['user_logged_in_autor'] = true;
                header('Location: authorHome.php?id='.$row["id"]);
                exit();
            } elseif ($row["role_name"] == "user") {
              $_SESSION['user_logged_in_user'] = true;
                header('Location: userHome.php?id='.$row["id"]);
                exit();
            } elseif ($row["role_name"] == "admin") {
              $_SESSION['user_logged_in_admin'] = true;
                header('Location: dashboard.php?id='.$row["id"]);
                exit();
            }
        } else {
            echo "Invalid password!";
        }
    } else {
        header("location:banned.php");
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);
}
?>