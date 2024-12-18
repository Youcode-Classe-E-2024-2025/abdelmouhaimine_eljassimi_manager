<?php 
include('database.php');

if (isset($_POST["signin"])) {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $role = $_POST['role'];

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);


    $query = "INSERT INTO `actors` (`name`, `email`, `password`, `status`) 
              VALUES (?, ?, ?, 'active')";

    $stmt = mysqli_prepare($connection, $query);
    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashed_password);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {

        $actor_id = mysqli_insert_id($connection);


        if ($role == 'user') {
            $role_id = 3;
        } elseif ($role == 'author') {
            $role_id = 2;
        } else {
            die("Invalid role provided: " . htmlspecialchars($role));
        }


        if (!isset($role_id)) {
            die("Role ID is not set. Debug: Role value is " . htmlspecialchars($role));
        }


        $role_query = "INSERT INTO `actor_roles` (`actor_id`, `role_id`) VALUES (?, ?)";
        $role_stmt = mysqli_prepare($connection, $role_query);
        mysqli_stmt_bind_param($role_stmt, "ii", $actor_id, $role_id);
        $role_result = mysqli_stmt_execute($role_stmt);

        if ($role_result) {

            header('Location: index.php');
            exit();
        } else {
            die("Failed to insert into actor_roles: " . mysqli_error($connection));
        }
    } else {
        die("Failed to insert into actors: " . mysqli_error($connection));
    }


    mysqli_stmt_close($stmt);
    mysqli_stmt_close($role_stmt);
    mysqli_close($connection);
}
?>
