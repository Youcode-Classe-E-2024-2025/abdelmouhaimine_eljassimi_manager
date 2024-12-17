<?php include('database.php');
session_start();
if (isset($_POST["signin"])) {
   $username = $_POST["username"];
   $password = $_POST["password"];

         
        $query = "SELECT a.email, a.password, r.name AS role_name FROM actors a JOIN actor_roles ar ON a.id = ar.actor_id JOIN roles r ON ar.role_id = r.id;
;";
        $result = mysqli_query(mysql: $connection, query : $query);

              if(!$result){
                die("query failed".mysqli_error());
              }else{
                while($row = mysqli_fetch_assoc(result: $result)){
                  if($row["email"]==$username && $row["password"]==$password && $row["role_name"] == "author"){
                      $_SESSION['loggedin'] = true;
                      header('location:authorHome.php');
                      exit();
                  }else if($row["email"]==$username && $row["password"]==$password && $row["role_name"] == "user"){
                    $_SESSION['loggedin'] = true;
                    header('location:userHome.php');
                    exit();
                  }else if($row["email"]==$username && $row["password"]==$password && $row["role_name"] == "admin"){
                    $_SESSION['loggedin'] = true;
                    header('location:dashboard.php');
                    exit();
                  }
                }
      }

}
?>