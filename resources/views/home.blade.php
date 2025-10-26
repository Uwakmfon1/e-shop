<html>
<head>
<title>Shop – E-Commerce Store</title>
<script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>

<!-- <body>
    <h2>Hello world, welcome to our class </h2> -->

<body class="bg-gray-100 text-gray-800">

  <!-- Navbar -->
  <header class="bg-white shadow-md">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-2xl font-bold text-indigo-600">MyShop</h1>
      <nav>
        <ul class="flex space-x-6">
          <li><a href="#" class="hover:text-indigo-600">Home</a></li>
          <li><a href="#" class="hover:text-indigo-600">Shop</a></li>
          <li><a href="#" class="hover:text-indigo-600">Contact</a></li>
          <li><a href="#" class="hover:text-indigo-600">Cart 🛒</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Product Section -->
  <main class="container mx-auto px-6 py-12">
    <h2 class="text-3xl font-semibold text-center mb-8">Featured Products</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- Product 1 -->
      <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-4">
        <img src="https://via.placeholder.com/300x200" alt="Product 1" class="rounded-xl w-full mb-4">
        <h3 class="text-lg font-semibold mb-2">Wireless Headphones</h3>
        <p class="text-gray-500 mb-2">Experience crystal-clear sound and noise cancellation.</p>
        <div class="flex justify-between items-center">
          <span class="text-xl font-bold text-indigo-600">$120</span>
          <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">Add to Cart</button>
        </div>
      </div>

      <!-- Product 2 -->
      <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-4">
        <img src="https://via.placeholder.com/300x200" alt="Product 2" class="rounded-xl w-full mb-4">
        <h3 class="text-lg font-semibold mb-2">Smart Watch</h3>
        <p class="text-gray-500 mb-2">Track your fitness, notifications, and health in style.</p>
        <div class="flex justify-between items-center">
          <span class="text-xl font-bold text-indigo-600">$90</span>
          <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">Add to Cart</button>
        </div>
      </div>

      <!-- Product 3 -->
      <div class="bg-white rounded-2xl shadow hover:shadow-lg transition p-4">
        <img src="https://via.placeholder.com/300x200" alt="Product 3" class="rounded-xl w-full mb-4">
        <h3 class="text-lg font-semibold mb-2">Bluetooth Speaker</h3>
        <p class="text-gray-500 mb-2">Portable, powerful, and built for music lovers on the go.</p>
        <div class="flex justify-between items-center">
          <span class="text-xl font-bold text-indigo-600">$65</span>
          <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">Add to Cart</button>
        </div>
      </div>

    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white text-center py-6 mt-12">
    <p>&copy; 2025 MyShop. All rights reserved.</p>
  </footer>
    @livewireScripts
</body>
</html>
