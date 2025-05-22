<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>ShopEase</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">

  <!-- Navbar -->
  <nav class="bg-white shadow fixed w-full z-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 justify-between items-center">

        <!-- Mobile Menu Button (Left) -->
        <div class="md:hidden me-2">
          <button id="mobile-menu-button" class="text-gray-600 hover:text-indigo-600 focus:outline-none">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>

        <!-- Logo -->
        <div class="flex items-center">
          <a href="#" class="flex items-center gap-2">
            <img class="h-8 w-8" src="https://tailwindcss.com/plus-assets/img/logos/mark.svg" alt="Logo">
            <span class="text-xl font-semibold text-gray-800">ShopEase</span>
          </a>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center gap-6 ms-3">
          <a href="#" class="text-gray-700 hover:text-indigo-600">Home</a>
          <a href="#" class="text-gray-700 hover:text-indigo-600">Shop</a>
          <a href="#" class="text-gray-700 hover:text-indigo-600">Categories</a>
          <a href="#" class="text-gray-700 hover:text-indigo-600">Deals</a>
        </div>

        <!-- Search bar -->
        <div class="hidden md:block flex-1 mx-6">
          <form action="search.php" method="GET" class="flex w-full">
            <input type="text" name="query" placeholder="Search products..."
              class="flex-grow px-4 py-2 border border-r-0 rounded-l-md text-sm focus:outline-none focus:ring focus:border-indigo-400">
            <button type="submit"
              class="px-4 py-2 border border-l-0 rounded-r-md bg-indigo-500 text-white hover:bg-indigo-600">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
                viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 21l-4.35-4.35"></path>
                <circle cx="10" cy="10" r="6"></circle>
              </svg>
            </button>
          </form>
        </div>

        <!-- Icons & User -->
        <div class="flex items-center gap-4">
          <a href="#" class="text-gray-700 hover:text-indigo-600 relative">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M2.25 3h1.5l1.5 13.5h13.5l1.5-13.5H2.25zM7.5 21a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
            </svg>
          </a>
          <a href="#" class="text-gray-700 hover:text-indigo-600 relative">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M3.172 5.172a4 4 0 0 1 5.656 0L12 8.343l3.172-3.171a4 4 0 1 1 5.656 5.656L12 21.657 3.172 10.828a4 4 0 0 1 0-5.656z" />
            </svg>
          </a>

          <!-- Profile dropdown -->
          <div class="relative">
            <button class="flex items-center focus:outline-none" id="user-menu-button">
              <img class="h-8 w-8 rounded-full" src="https://i.pravatar.cc/40" alt="User">
            </button>
            <div class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-md py-2 z-50" id="user-dropdown">
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">My Account</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Orders</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <!-- Slide-in Mobile Menu (from left) -->
  <div id="mobile-menu" class="fixed top-0 left-0 h-full w-64 bg-white shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out z-50 md:hidden">
  mmmmm  
  <div class="p-4 relative h-full flex flex-col pt-4">
      <!-- Close Button -->
      <button id="mobile-menu-close" class="absolute top-3 right-3 text-5xl text-gray-500 hover:text-red-500 transition duration-200 p-2">
  &times;
</button>


      <!-- Menu Links -->
      <nav class=" space-y-2 ">
        <a href="#" class="block px-4 mt-10 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-indigo-100">Home</a>
        <a href="#" class="block px-4 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-indigo-100">Shop</a>
        <a href="#" class="block px-4 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-indigo-100">Categories</a>
        <a href="#" class="block px-4 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-indigo-100">Deals</a>
        <a href="#" class="block px-4 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-indigo-100">Cart</a>
        <a href="#" class="block px-4 py-2 rounded-md text-base font-medium text-gray-700 hover:bg-indigo-100">Wishlist</a>
      </nav>

      <!-- Mobile Search (No space above) -->
      <form action="search.php" method="GET" class="flex">
        <input type="text" name="query" placeholder="Search..."
          class="flex-grow px-3 py-2 border border-r-0 rounded-l-md text-sm focus:outline-none focus:ring focus:border-indigo-400">
        <button type="submit"
          class="px-3 py-2 border border-l-0 rounded-r-md bg-indigo-500 text-white hover:bg-indigo-600">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2"
            viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 21l-4.35-4.35"></path>
            <circle cx="10" cy="10" r="6"></circle>
          </svg>
        </button>
      </form>
    </div>
  </div>

  <!-- JavaScript for Mobile Menu -->
  <script>
    const mobileMenuBtn = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuClose = document.getElementById('mobile-menu-close');

    function openMobileMenu() {
      mobileMenu.classList.remove('-translate-x-full');
      mobileMenu.classList.add('translate-x-0');
    }

    function closeMobileMenu() {
      mobileMenu.classList.remove('translate-x-0');
      mobileMenu.classList.add('-translate-x-full');
    }

    mobileMenuBtn.addEventListener('click', openMobileMenu);
    mobileMenuClose.addEventListener('click', closeMobileMenu);
  </script>
</body>
</html> 