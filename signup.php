<?php 
include('database.php');

if (isset($_POST["signin"])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Hash the password securely
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Insert into the 'actors' table
    $query = "INSERT INTO `actors` (`name`, `email`, `password`, `status`) 
              VALUES (?, ?, ?, 'active')";

    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashed_password);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        // Get the last inserted actor ID
        $actor_id = mysqli_insert_id($connection);

        // Debug role value
        if ($role == 'user') {
            $role_id = 3; // User role ID
        } elseif ($role == 'author') {
            $role_id = 2; // Author role ID
        } else {
            die("Invalid role provided: " . htmlspecialchars($role));
        }

        // Debug to check role_id before inserting
        if (!isset($role_id)) {
            die("Role ID is not set. Debug: Role value is " . htmlspecialchars($role));
        }

        // Insert into the 'actor_roles' table
        $role_query = "INSERT INTO `actor_roles` (`actor_id`, `role_id`) VALUES (?, ?)";
        $role_stmt = mysqli_prepare($connection, $role_query);
        mysqli_stmt_bind_param($role_stmt, "ii", $actor_id, $role_id);
        $role_result = mysqli_stmt_execute($role_stmt);

        if ($role_result) {
            // Redirect on success
            header('Location: index.php');
            exit();
        } else {
            die("Failed to insert into actor_roles: " . mysqli_error($connection));
        }
    } else {
        die("Failed to insert into actors: " . mysqli_error($connection));
    }

    // Close the statements and the connection
    mysqli_stmt_close($stmt);
    mysqli_stmt_close($role_stmt);
    mysqli_close($connection);
}
?>
