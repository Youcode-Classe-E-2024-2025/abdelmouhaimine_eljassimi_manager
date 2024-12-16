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
    <title>100 BOOKS</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-gray-100 font-roboto">
    <!-- Header -->
    <header class="bg-white shadow-md flex justify-between items-center p-4 px-8">
      <div class="flex items-center  space-x-12 ">
        <a href="home.php"><img class="w-32" src="assets/logo.png" alt="logo"></a>
        <nav class="space-x-6 text-gray-700">
          <a href="#" class="hover:text-indigo-500">Library</a>
          <a href="#" class="hover:text-indigo-500">Orders</a>
          <a href="#" class="hover:text-indigo-500">Admin</a>
        </nav>
      </div>
      <div class="flex items-center">
        <span class="mr-4 text-gray-600">AbdelMouhaimine El Jassimi</span>
        <img src="assets/mee.jpg" alt="admin picture" class="w-10 h-10 rounded-full border"/>
      </div>
    </header>


    <section class=" p-6  m-4 rounded-lg">
      <div class="flex items-center justify-center space-x-4">
        <input type="text" placeholder="Type book name or author" class="w-1/2 p-2 h-16 shadow-md border rounded-md focus:ring-2 focus:ring-indigo-500 focus:outline-none"/>
        <select class="border p-2 w-52 h-16 rounded-md focus:ring-2 focus:ring-indigo-500 focus:outline-none">
         <option>Category</option>
        </select>
      </div>
    </section>


    <section class="m-4 p-6 rounded-lg">
      <div class="flex justify-between">
          <h2 class="text-gray-700 font-semibold text-lg">Recommended</h2>
          <button id="openModal" class = "bg-[#7E55E7] text-white font-bold p-2 w-32 rounded-sm flex justify-center align-center hover:bg-[#5ce1e6] hover: transition">ADD BOOK</button>
      </div>
      <div class="flex justify-around overflow-x-auto space-x-4 mt-4">
        <!-- Book Card -->
        <div class="min-w-[150px] bg-white p-4 border rounded-md text-center shadow hover:shadow-lg transition">
          <img src="assets/covers/1.jpg" class="w-36" alt="Book" class="mx-auto mb-2"/>
          <h3 class="font-semibold text-gray-700">Change by Design</h3>
          <p class="text-sm text-gray-500">Allie Wells</p>
          <p class="text-sm font-bold text-indigo-600">4.5/5</p>
        </div>
        <div class="min-w-[150px] bg-white p-4 border rounded-md text-center shadow hover:shadow-lg transition">
          <img src="assets/covers/2.jpg" class="w-36" alt="Book" class="mx-auto mb-2"/>
          <h3 class="font-semibold text-gray-700">Change by Design</h3>
          <p class="text-sm text-gray-500">Allie Wells</p>
          <p class="text-sm font-bold text-indigo-600">4.5/5</p>
        </div>
        <div class="min-w-[150px] bg-white p-4 border rounded-md text-center shadow hover:shadow-lg transition">
          <img src="assets/covers/3.jpg" class="w-36" alt="Book" class="mx-auto mb-2"/>
          <h3 class="font-semibold text-gray-700">Change by Design</h3>
          <p class="text-sm text-gray-500">Allie Wells</p>
          <p class="text-sm font-bold text-indigo-600">4.5/5</p>
        </div>
        <div class="min-w-[150px] bg-white p-4 border rounded-md text-center shadow hover:shadow-lg transition">
          <img src="assets/covers/4.jpg" class="w-36" alt="Book" class="mx-auto mb-2"/>
          <h3 class="font-semibold text-gray-700">Change by Design</h3>
          <p class="text-sm text-gray-500">Allie Wells</p>
          <p class="text-sm font-bold text-indigo-600">4.5/5</p>
        </div>
      </div>
    </section>

    <section class="bg-white w-[95%] flex justify-center m-auto align-center shadow-md m-4 p-6 rounded-lg">
      <table class="w-full text-left text-sm">
        <thead>
          <tr class="border-b h-10">
            <th class="py-2 px-4 text-gray-600">Title</th>
            <th class="py-2 px-4 text-gray-600">Rating</th>
            <th class="py-2 px-4 text-gray-600">Category</th>
            <th class="py-2 px-4 text-gray-600">Status</th>
          </tr>
        </thead>
        <tbody>
          <tr class="hover:bg-gray-50 h-20 rounded-lg border-b">
            <td class="py-2 px-4 flex gap-4">
                <img src="assets/covers/1.jpg" class="w-10" alt="">
                <div class="flex flex-col justify-center">
                    <p>The Zero Marginal Cost Society</p>
                    <h3 class="font-bold">Mickel Ozark</h3>
                </div>
            </td>
            <td class="py-2 px-4">4.5/5</td>
            <td class="py-2 px-4">Design & UX</td>
            <td class="py-2 px-4 text-indigo-600 cursor-pointer"><button class="bg-[#e9e3fc] px-10 py-3 font-bold">Take book</button></td>
          </tr>
          <tr class="hover:bg-gray-50 h-20 rounded-lg border-b">
            <td class="py-2 px-4 flex gap-4">
                <img src="assets/covers/1.jpg" class="w-10" alt="">
                <div class="flex flex-col justify-center">
                    <p>The Zero Marginal Cost Society</p>
                    <h3 class="font-bold">Mickel Ozark</h3>
                </div>
            </td>
            <td class="py-2 px-4">4.5/5</td>
            <td class="py-2 px-4">Design & UX</td>
            <td class="py-2 px-4 text-indigo-600 cursor-pointer">
              <div class="flex gap-4 items-center">
                <img src="assets/mee.jpg" alt="admin picture" class="w-10 h-10 rounded-full border"/>
                <div class="flex flex-col justify-center">
                    <p class="text-[#131313]">Taken 20 days ago</p>
                    <h3 class="text-[#131313] font-bold">Mickel Ozark</h3>
                </div>
              </div>
            </td>
          </tr>
          <tr class="hover:bg-gray-50 h-20 rounded-lg border-b">
            <td class="py-2 px-4 flex gap-4">
                <img src="assets/covers/1.jpg" class="w-10" alt="">
                <div class="flex flex-col justify-center">
                    <p>The Zero Marginal Cost Society</p>
                    <h3 class="font-bold">Mickel Ozark</h3>
                </div>
            </td>
            <td class="py-2 px-4">4.5/5</td>
            <td class="py-2 px-4">Design & UX</td>
            <td class="py-2 px-4 text-indigo-600 cursor-pointer"><button class="bg-[#7E55E7] text-white px-8 py-3 font-bold">Return book</button></td>
          </tr>
        </tbody>
      </table>
    </section>
    
    <!-- Form Modal  -->
    <div id="modal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white w-96 rounded-lg shadow-lg p-6">

      <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold">Add Book</h2>
        <button id="closeModal" class="text-gray-500 hover:text-gray-700">&times;</button>
      </div>
      
      <form id="addPackageForm" class="space-y-4" action = "add.php" method ="POST">
        <div>
          <label for="packageName" class="block text-sm font-medium text-gray-700">Book Title</label>
          <input type="text" id="packageName" name="packageName" class="block w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-[#7E55E7]">
        </div>
        <div>
          <label for="AuthorName" class="block text-sm font-medium text-gray-700">Author Name</label>
           <select id="AuthorName" name="AuthorName" class="w-full text-black focus:outline-none focus:ring focus:ring-[#7E55E7]" id="AuthorName">
           </select>
        </div>
        <div>
          <label for="cover" class="block text-sm font-medium text-gray-700">Cover</label>
          <input type="file" id="cover" name="cover" class="block w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-[#7E55E7]">
        </div>
        <div>
          <label for="descritpion" class="block text-sm font-medium text-gray-700">Description</label>
          <textarea id='description' name="description" class="block w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-[#7E55E7]" id="description"></textarea>
        </div>
        <div>
          <label for="rating" class="block text-sm font-medium text-gray-700">Rating</label>
           <input type="text" id="rating" name="rating" class="block w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:ring-[#7E55E7]">
        </div>
        <div class="flex justify-end space-x-2">
          <button type="button" id="closeModalFooter" class="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Close</button>
          <button id="submit" type="submit" name="addPackage" class = "bg-[#7E55E7] text-white px-4 py-2 rounded hover:bg-[#5ce1e6]">Submit</button>
          <button id="edit" type="submit" name="Editpackage"  class = "bg-[#7E55E7] text-white px-4 py-2 rounded hover:bg-[#5ce1e6] hidden">Update<</button>
        </div>
      </form>

    </div>
  </div>

  <script src="script/home.js"></script>
  </body>
</html>