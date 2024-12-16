<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
    .font-roboto {
      font-family: 'Roboto', sans-serif;
    }
    </style>
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      .font-roboto {
        font-family: 'Roboto', sans-serif;
      }
    </style>
  </head>
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
        <span class="mr-4 text-gray-600">ELJASSIMI</span>
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
            <th class="py-2 px-4 text-gray-600">Update</th>
          </tr>
        </thead>
        <tbody>
          <tr class="hover:bg-gray-50 h-20 rounded-lg border-b">
            <td class="py-2 px-4">001</td>
            <td class="py-2 px-4">John Doe</td>
            <td class="py-2 px-4">john.doe@example.com</td>
            <td class="py-2 px-4">User</td>
            <td class="py-2 px-4"><button class="bg-red-600 text-white font-bold px-10 py-3 hover:bg-red-800">Delete</button></td>
            <td class="py-2 px-4"><button class="bg-[#7E55E7] text-white font-bold px-10 py-3 hover:bg-[#5ce1e6]">Update</button></td>
          </tr>
        </tbody>
      </table>
    </section>

    <script src="script/dashboard.js"></script>
  </body>
</html>
