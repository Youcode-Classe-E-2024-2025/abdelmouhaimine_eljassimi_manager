
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="assets/logo.png">
  <title>Login Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
  <div class="bg-[#FFF] p-6 rounded-lg shadow-lg w-96">
    <div class="flex flex-col items-center mb-6">
      <img src="assets/logo.png" alt="BOOKS LOGO" class="h-10 mb-4">
      <div class="flex space-x-4 text-[#7E55E7]">
        <button id="signinFromBtn" class="hover:text-[#5ce1e6]">SIGN IN</button>
        <button id="signupFromBtn" class="hover:text-[#5ce1e6]">SIGN UP</button>
      </div>
    </div>

    <form id="signinFrom" class="" action="logincheck.php" method="POST">
      <div class="mb-4">
        <label for="email" class="block text-sm text-[#7E55E7] mb-1">Email</label>
        <input type="text" name="email" id="email" placeholder="email" class="w-full px-4 py-2 text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-[#7E55E7]">
        <?php if (isset($_GET['error']) && $_GET['error'] == 'true'): ?>
        <p class="text-red-600">Username or password is incorrect.</p>
        <?php endif; ?>
      </div>
      <div class="mb-4">
        <label for="password" class="block text-sm text-[#7E55E7] mb-1">Password</label>
        <input type="password" name="password" id="password" placeholder="Password" class="w-full px-4 py-2 text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-[#7E55E7]">
        <?php if (isset($_GET['error']) && $_GET['error'] == 'true'): ?>
        <p class="text-red-600">Username or password is incorrect.</p>
        <?php endif; ?>
      </div>
      <div class="flex items-center mb-4">
        <input type="checkbox" id="stay_signed_in" class="w-4 h-4 text-[#7E55E7] rounded">
        <label for="stay_signed_in" class="ml-2 text-sm text-[#7E55E7]">Stay signed in</label>
      </div>
      <button type="submit" name="signin" class="w-full bg-[#7E55E7] text-white py-2 rounded-md hover:bg-[#5ce1e6] focus:outline-none focus:ring-2 focus:ring-[#7E55E7]">
        SIGN IN
      </button>
      <div class="mt-4 text-center">
        <a href="#" class="text-sm text-[#7E55E7] hover:[#5ce1e6]">Forgot Password?</a>
      </div>
    </form>

    <form id="signupFrom" class="hidden" action="signup.php" method="POST">
      <div class="mb-4">
        <label for="username" class="block text-sm text-[#7E55E7] mb-1">Sign up like : </label>
     <select class="w-full bg-gray-100 h-10 text-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-[#7E55E7]" name="role" id="role">
        <option value="user">User</option>
        <option value="author">Author</option>
    </select>
       </div>
      <div class="mb-4">
        <label for="username" class="block text-sm text-[#7E55E7] mb-1">Full Name</label>
        <input type="text" name="username" id="username" placeholder="Full Name" class="w-full px-4 py-2 text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-[#7E55E7]">
      </div>
      <div class="mb-4">
        <label for="username" class="block text-sm text-[#7E55E7] mb-1">Email</label>
        <input type="email" name="email" id="email" placeholder="Email" class="w-full px-4 py-2 text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-[#7E55E7]">
      </div>
      <div class="mb-4">
        <label for="password" class="block text-sm text-[#7E55E7] mb-1">Password</label>
        <input type="password" name="password" id="password" placeholder="Password" class="w-full px-4 py-2 text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-[#7E55E7]">
      </div>
      <button type="submit" name="signin" class="w-full bg-[#7E55E7] text-white py-2 rounded-md hover:bg-[#5ce1e6] focus:outline-none focus:ring-2 focus:ring-[#7E55E7]">SIGN UP</button>
    </form>
  </div>
  <script src="script/main.js"></script>
</body>
</html>
