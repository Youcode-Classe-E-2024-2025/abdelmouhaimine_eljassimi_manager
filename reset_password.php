<?php include("database.php") ?>
<?php include("header.php") ?>
<body class="flex items-center justify-center h-screen bg-gray-100">

  <div class="bg-[#FFF] p-6 rounded-lg shadow-lg w-96 flex flex-col gap-4">

    <h2 class="text-[#131313] font-bold">RESET PASSWORD</h2>
    <form action="update_password.php" method="POST">
      <div class="mb-4 flex flex-col gap-4">
        <label for="password" class="block text-sm text-[#7E55E7] mb-1">Enter new password : </label>
        <input type="password" name="password" id="password" placeholder="password" class="w-full px-4 py-2  text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-[#7E55E7]">
      </div>
      <input name="id" type="hidden" value="<?php echo htmlspecialchars($_GET['id']); ?>">
      <button type="submit" name="sendemail" class="w-full bg-[#7E55E7] text-white py-2 rounded-md hover:bg-[#5ce1e6] focus:outline-none focus:ring-2 focus:ring-[#7E55E7]">Update password</button>
    </form>
  </div>
</body>
</html>