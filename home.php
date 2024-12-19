<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="assets/logo.png">
    <title>Book Library UI</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gray-100">
    <!-- Header -->
    <header
      class="bg-white shadow-md flex justify-between items-center p-4 px-8">
      <div class="flex items-center space-x-2">
        <div class="text-indigo-500 text-lg font-bold">BOOKS</div>
        <nav class="space-x-6 text-gray-700">
          <a href="#" class="hover:text-indigo-500">Library</a>
          <a href="#" class="hover:text-indigo-500">Orders</a>
          <a href="#" class="hover:text-indigo-500">Admin</a>
        </nav>
      </div>
      <div class="flex items-center">
        <span class="mr-4 text-gray-600">Carrie Gardner</span>
        <img
          src="https://via.placeholder.com/40"
          alt="User Avatar"
          class="w-10 h-10 rounded-full border"
        />
      </div>
    </header>

    <!-- Search & Category Section -->
    <section class="bg-white p-6 shadow-md m-4 rounded-lg">
      <div class="flex space-x-4">
        <input
          type="text"
          placeholder="Type book name or author"
          class="w-full p-2 border rounded-md focus:ring-2 focus:ring-indigo-500 focus:outline-none"
        />
        <select
          class="border p-2 rounded-md focus:ring-2 focus:ring-indigo-500 focus:outline-none"
        >
          <option>Category</option>
        </select>
      </div>
    </section>

    <!-- Recommended Section -->
    <section class="bg-white shadow-md m-4 p-6 rounded-lg">
      <h2 class="text-gray-700 font-semibold text-lg">Recommended</h2>
      <div class="flex overflow-x-auto space-x-4 mt-4">
        <!-- Book Card -->
        <div
          class="min-w-[150px] p-4 border rounded-md text-center shadow hover:shadow-lg transition"
        >
          <img
            src="https://via.placeholder.com/120x160"
            alt="Book"
            class="mx-auto mb-2"
          />
          <h3 class="font-semibold text-gray-700">Change by Design</h3>
          <p class="text-sm text-gray-500">Allie Wells</p>
          <p class="text-sm font-bold text-indigo-600">4.5/5</p>
        </div>
        <!-- Repeat for multiple books -->
        <div
          class="min-w-[150px] p-4 border rounded-md text-center shadow hover:shadow-lg transition"
        >
          <img
            src="https://via.placeholder.com/120x160"
            alt="Book"
            class="mx-auto mb-2"
          />
          <h3 class="font-semibold text-gray-700">Ethereum</h3>
          <p class="text-sm text-gray-500">Chase Thornton</p>
          <p class="text-sm font-bold text-indigo-600">4.5/5</p>
        </div>
      </div>
    </section>

    <!-- Table Section -->
    <section class="bg-white shadow-md m-4 p-6 rounded-lg">
      <table class="w-full text-left text-sm">
        <thead>
          <tr class="border-b">
            <th class="py-2 px-4 text-gray-600">Title</th>
            <th class="py-2 px-4 text-gray-600">Rating</th>
            <th class="py-2 px-4 text-gray-600">Category</th>
            <th class="py-2 px-4 text-gray-600">Status</th>
          </tr>
        </thead>
        <tbody>
          <tr class="hover:bg-gray-50 border-b">
            <td class="py-2 px-4">Super-Modified: The Behance Book</td>
            <td class="py-2 px-4">4.5/5</td>
            <td class="py-2 px-4">Design & UX</td>
            <td class="py-2 px-4">Taken 20 days ago</td>
          </tr>
          <tr class="hover:bg-gray-50 border-b">
            <td class="py-2 px-4">Scaling Lean</td>
            <td class="py-2 px-4">4.5/5</td>
            <td class="py-2 px-4">Design & UX</td>
            <td class="py-2 px-4 text-indigo-600 cursor-pointer">Take book</td>
          </tr>
          <tr class="hover:bg-gray-50 border-b">
            <td class="py-2 px-4">The Zero Marginal Cost Society</td>
            <td class="py-2 px-4">3.5/5</td>
            <td class="py-2 px-4">Programming</td>
            <td class="py-2 px-4 text-purple-600 cursor-pointer">Return book</td>
          </tr>
          <tr class="hover:bg-gray-50 border-b">
            <td class="py-2 px-4">Working Effectively with Legacy Code</td>
            <td class="py-2 px-4">4.5/5</td>
            <td class="py-2 px-4">Business & Management</td>
            <td class="py-2 px-4">Taken 3 days ago</td>
          </tr>
        </tbody>
      </table>
    </section>
  </body>
</html>
