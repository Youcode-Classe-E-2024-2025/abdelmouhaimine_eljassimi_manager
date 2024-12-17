<?php 

include('database.php');

if (isset($_POST["signin"])) {
     $username = $_POST['username'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $role = $_POST['role'];

     $hashed_password = password_hash($password, PASSWORD_BCRYPT);


        $query = "INSERT INTO `actors` (`name`,`email`,`password`,`status`) VALUES ('$username', '$email','$hashed_password', 'active')";
        $result = mysqli_query(mysql: $connection, query: $query);
        if (!$result) {
            die("Query failed: " . mysqli_error(mysql: $connection));
        } else {
            header(header: 'location:index.php');
        }
        
}
?>
