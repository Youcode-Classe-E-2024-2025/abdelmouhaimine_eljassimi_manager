<?php 
include('database.php');
session_start();

if (isset($_POST["signin"])) {


    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die("CSRF token validation failed.");
    }


    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $password = trim($_POST["password"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($password)) {
        echo "Invalid email or password!";
        exit();
    }


    $query = "SELECT a.id, a.email, a.password, a.status, r.name AS role_name 
              FROM actors a
              JOIN actor_roles ar ON a.id = ar.actor_id
              JOIN roles r ON ar.role_id = r.id
              WHERE a.email = ? AND a.status = 'active'";

    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {

        if (password_verify($password, $row["password"])) {

            $_SESSION['user_logged_in'] = true;
            $_SESSION['email'] = $row["email"];
            $_SESSION['role'] = $row["role_name"];
            $_SESSION['id'] = $row["id"];

            // Redirect based on user role
            switch ($row["role_name"]) {
                case "author":
                    $_SESSION['user_logged_in_author'] = true;
                    header('Location: authorHome.php?id=' . $row["id"]);
                    break;
                case "user":
                    $_SESSION['user_logged_in_user'] = true;
                    header('Location: userHome.php?id=' . $row["id"]);
                    break;
                case "admin":
                    $_SESSION['user_logged_in_admin'] = true;
                    header('Location: dashboard.php?id=' . $row["id"]);
                    break;
                default:
                    echo "Unknown role!";
                    exit();
            }
            exit();
        } else {
            echo "Invalid password!";
            exit();
        }
    } else {
        header("location:banned.php");
        exit();
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);
}
?>
