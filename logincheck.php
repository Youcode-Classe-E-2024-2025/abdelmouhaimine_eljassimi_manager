<?php include('database.php');
session_start();
if (isset($_POST["signin"])) {
   $username = $_POST["username"];
   $password = $_POST["password"];

         
        $query = "SELECT * FROM `admins`";
        $result = mysqli_query(mysql: $connection, query : $query);

              if(!$result){
                die("query failed".mysqli_error());
              }else{
                $row = mysqli_fetch_assoc(result: $result);
                if($row["username"]==$username && $row["password"]==$password){
                    $_SESSION['loggedin'] = true;
                    header('location:home.php');
                    exit();
              }else{
                header('Location: index.php?error=true');
                exit();
              }
      }

}
?>