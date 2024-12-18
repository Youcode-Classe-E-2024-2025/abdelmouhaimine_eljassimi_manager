<?php include('database.php')?>
<?php include('header.php');?>
<?php
    session_start();
    if (!isset($_SESSION['user_logged_in_admin']) || $_SESSION['user_logged_in_admin'] !== true) {
        header("Location: index.php");
        exit();
    }
?>

  <body class="bg-gray-100 font-roboto">
    <!-- Header -->
    <header class="bg-white shadow-md flex justify-between items-center p-4 px-8">
      <div class="flex items-center space-x-12">
        <a href="home.php"><img class="w-32" src="assets/logo.png" alt="logo"></a>
        <nav class="space-x-6 text-gray-700">
          <a href="#" class="hover:text-indigo-500">Dashboard</a>
          <a href="#" class="hover:text-indigo-500">Users</a>
          <a href="#" class="hover:text-indigo-500">Settings</a>
        </nav>
      </div>
      <div class="flex items-center">
      <?php
        $id = $_GET["id"];
        $query = "SELECT * FROM actors WHERE id = $id ";
          $result = mysqli_query(mysql: $connection, query: $query) or die(mysqli_error(mysql: $connection));
          $row = mysqli_fetch_assoc(result: $result);
          ?>

        <a class="bg-[#8C52FD] px-10 py-3 mx-4 rounded-sm font-bold text-white" href="logout.php">Log Out</a>
        <span class="mr-4 text-gray-600"><?php echo $row["name"]?></span>
        <img src="assets/mee.jpg" alt="admin picture" class="w-10 h-10 rounded-full border"/>
      </div>
    </header>

    <!-- Stats Cards -->
    <section class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition text-center">
        <h3 class="text-xl font-semibold text-gray-700">Total Users</h3>
        <p class="text-4xl font-bold text-indigo-600 mt-2">1,245</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition text-center">
        <h3 class="text-xl font-semibold text-gray-700">Active Orders</h3>
        <p class="text-4xl font-bold text-indigo-600 mt-2">578</p>
      </div>
      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition text-center">
        <h3 class="text-xl font-semibold text-gray-700">Revenue</h3>
        <p class="text-4xl font-bold text-indigo-600 mt-2">$12,340</p>
      </div>
    </section>

    <!-- Users Table -->
    <section class="bg-white w-[95%] flex justify-center m-auto shadow-md m-4 p-6 rounded-lg">
      <table class="w-full text-left text-sm">
        <thead>
          <tr class="border-b h-10">
            <th class="py-2 px-4 text-gray-600">User ID</th>
            <th class="py-2 px-4 text-gray-600">Name</th>
            <th class="py-2 px-4 text-gray-600">Email</th>
            <th class="py-2 px-4 text-gray-600">Role</th>
            <th class="py-2 px-4 text-gray-600">Delete</th>
            <th class="py-2 px-4 text-gray-600">Update role</th>
          </tr>
        </thead>
        <tbody>
            <?php
          $query = "SELECT a.id, a.name, a.email, r.name AS role_name FROM actors a JOIN actor_roles ar ON a.id = ar.actor_id  JOIN roles r ON ar.role_id = r.id AND a.status='active';";
          $result = mysqli_query(mysql: $connection, query: $query) or die(mysqli_error(mysql: $connection));
          while ($row = mysqli_fetch_assoc(result: $result)) {
            ?>
          <tr class="hover:bg-gray-50 h-20 rounded-lg border-b">
            <td class="py-2 px-4"><?php echo $row["id"] ?></td>
            <td class="py-2 px-4"><?php echo $row["name"] ?></td>
            <td class="py-2 px-4"><?php echo $row["email"] ?></td>
            <td class="py-2 px-4"><?php echo $row["role_name"] ?></td>
            <td class="py-2 px-4"><button class="bg-red-600 text-white font-bold px-10 py-3 hover:bg-red-800"><a href="delete.php?id=<?php echo $row["id"]?> ">Delete</a></button></td>
            <td class="py-2 px-4"><button id="update" data-id="<?php echo $row["id"]?>" class="bg-[#7E55E7] text-white font-bold px-10 py-3 hover:bg-[#5ce1e6]">Update</button></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </section>

    <div id="modal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden">
      <div class="bg-white w-96 rounded-lg shadow-lg p-6">

        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold">Edit Actor role</h2>
            <button id="closeModal" class="text-gray-500 hover:text-gray-700">&times;</button>
        </div>
        
        <form id="addPackageForm" class="space-y-4" action = "editrole.php?id=<?php $id = $_GET["id"]; echo $id?>" method ="POST">
            
            <select id="actorRole" name="actorRole" class="w-full text-black focus:outline-none focus:ring focus:ring-[#7E55E7]" id="actorRole">
               <option value="1">Admin</option>
               <option value="2">Author</option>
               <option value="3">user</option>
            </select>
            <input id="hiddenId" name="id" type="hidden" value="">
            <div class="flex justify-end space-x-2">
            <button type="button" id="closeModalFooter" class="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Close</button>
            <button type="submit" name="editRoleBtn" class="bg-[#7E55E7] text-white px-4 py-2 rounded hover:bg-[#5ce1e6]">Submit</button>
            </div>
        </form>

        </div>
  </div>

    <script src="script/dashboard.js"></script>
  </body>
</html>
