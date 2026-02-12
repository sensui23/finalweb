<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DatuBakery | Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-[#FDF5E6]">

    <nav class="bg-white p-4 shadow-md flex justify-between items-center px-10 border-b-2 border-orange-200 sticky top-0 z-50">
        <h1 class="text-3xl font-black text-[#D2691E] italic tracking-tighter">DatuBakery</h1>
        
        <div class="flex items-center">
            <a href="cart_dashboard.php" class="mr-8 relative scale-125 hover:scale-150 transition">
                <span class="text-2xl">🛒</span>
                <span id="cart-count" class="absolute -top-2 -right-2 bg-red-600 text-white text-[10px] rounded-full px-1.5 font-bold border border-white">
                    <?php 
                        $count = 0;
                        if(isset($_SESSION['cart'])) {
                            foreach($_SESSION['cart'] as $item) { $count += $item['quantity']; }
                        }
                        echo $count; 
                    ?>
                </span>
            </a>

            <?php if(isset($_SESSION['user'])): ?>
                <span class="mr-4 text-gray-700 font-bold italic text-orange-900 underline">Hello, <?php echo $_SESSION['user']; ?>!</span>
                <a href="logout.php" class="bg-red-500 text-white px-4 py-2 rounded-lg text-sm font-bold shadow hover:bg-red-600 transition">Logout</a>
            <?php else: ?>
                <a href="login.php" class="text-[#D2691E] font-bold mr-4 hover:underline">Login</a>
                <a href="signup.php" class="bg-[#D2691E] text-white px-6 py-2 rounded-full font-bold shadow-lg hover:bg-orange-700 transition">Sign Up</a>
            <?php endif; ?>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto mt-12 px-4 pb-20">
        <h2 class="text-4xl font-black text-[#5D4037] text-center mb-10 uppercase italic tracking-widest">Our Fresh Pastries</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="card bg-white rounded-3xl overflow-hidden shadow-2xl border-b-8 border-orange-500 transform hover:scale-105 transition duration-300">
                <div class="relative">
                    <img src="img/croissant.jpg" alt="Croissant" class="w-full h-56 object-cover">
                    <span class="absolute top-4 right-4 bg-orange-600 text-white px-3 py-1 rounded-full font-bold text-sm shadow-lg">₱65.00</span>
                </div>
                <div class="p-6 text-center">
                    <h3 class="font-bold text-2xl text-amber-900 mb-4">Golden Croissant</h3>
                    <button onclick="addToCart('Golden Croissant', 65)" class="w-full bg-[#D2691E] text-white py-3 rounded-xl font-black uppercase tracking-wider hover:bg-orange-800 transition shadow-lg">ADD TO CART</button>
                </div>
            </div>

            <div class="card bg-white rounded-3xl overflow-hidden shadow-2xl border-b-8 border-orange-500 transform hover:scale-105 transition duration-300">
                <div class="relative">
                    <img src="img/spanish.jpg" alt="Spanish Bread" class="w-full h-56 object-cover">
                    <span class="absolute top-4 right-4 bg-orange-600 text-white px-3 py-1 rounded-full font-bold text-sm shadow-lg">₱10.00</span>
                </div>
                <div class="p-6 text-center">
                    <h3 class="font-bold text-2xl text-amber-900 mb-4">Spanish Bread</h3>
                    <button onclick="addToCart('Spanish Bread', 10)" class="w-full bg-[#D2691E] text-white py-3 rounded-xl font-black uppercase tracking-wider hover:bg-orange-800 transition shadow-lg">ADD TO CART</button>
                </div>
            </div>

            <div class="card bg-white rounded-3xl overflow-hidden shadow-2xl border-b-8 border-orange-500 transform hover:scale-105 transition duration-300">
                <div class="relative">
                    <img src="img/ensaymada.jpg" alt="Ensaymada" class="w-full h-56 object-cover">
                    <span class="absolute top-4 right-4 bg-orange-600 text-white px-3 py-1 rounded-full font-bold text-sm shadow-lg">₱25.00</span>
                </div>
                <div class="p-6 text-center">
                    <h3 class="font-bold text-2xl text-amber-900 mb-4">Special Ensaymada</h3>
                    <button onclick="addToCart('Special Ensaymada', 25)" class="w-full bg-[#D2691E] text-white py-3 rounded-xl font-black uppercase tracking-wider hover:bg-orange-800 transition shadow-lg">ADD TO CART</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>