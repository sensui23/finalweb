<?php
// 1. Sugdan ang session para mailhan ang user nga naka-login
session_start();

// 2. I-include ang database connection
// Siguroha nga ang 'db_conn.php' naa sa gawas, tapad ani nga index.php
include 'db_conn.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DatuBakery | Home</title>
    <style>
        html { scroll-behavior: smooth; }
        .product-card:hover { transform: translateY(-10px); }
    </style>
</head>
<body class="bg-[#FDF5E6] font-sans flex flex-col min-h-screen">

    <nav class="bg-white p-5 shadow-md flex justify-between items-center px-10 border-b-4 border-orange-500 sticky top-0 z-50">
        <h1 class="text-3xl font-black text-[#D2691E] italic tracking-tighter uppercase">DatuBakery</h1>
        
        <div class="flex items-center gap-8 font-bold text-[#5D4037]">
            <a href="#" class="hover:text-orange-600 transition uppercase text-xs">Home</a>
            <a href="#about" class="hover:text-orange-600 transition uppercase text-xs">About</a>
            <a href="#contact" class="hover:text-orange-600 transition uppercase text-xs">Contact</a>
            
            <a href="cart_dashboard.php" class="relative scale-110 ml-4">
                <span class="text-2xl">🛒</span>
                <span id="cart-count" class="absolute -top-2 -right-2 bg-red-600 text-white text-[10px] rounded-full px-1.5 font-bold border border-white">
                    <?php 
                        $cart_total = 0;
                        if(isset($_SESSION['cart'])) {
                            foreach($_SESSION['cart'] as $item) { $cart_total += $item['quantity']; }
                        }
                        echo $cart_total; 
                    ?>
                </span>
            </a>

            <div class="flex items-center gap-4 border-l-2 border-orange-100 pl-6">
                <?php if(isset($_SESSION['user'])): ?>
                    <div class="flex flex-col items-end">
                        <span class="text-[10px] uppercase text-gray-400 leading-none font-normal">Welcome,</span>
                        <span class="text-xs font-black text-orange-900 uppercase italic"><?php echo $_SESSION['user']; ?>!</span>
                    </div>
                    <a href="logout.php" class="bg-red-500 text-white px-4 py-2 rounded-lg text-[10px] font-black uppercase hover:bg-red-700 transition shadow-md">
                        Logout
                    </a>
                <?php else: ?>
                    <a href="login.php" class="text-orange-600 text-xs hover:underline uppercase font-black">Login</a>
                    <a href="signup.php" class="bg-[#D2691E] text-white px-5 py-2 rounded-full text-xs font-black shadow-lg hover:bg-orange-700 transition uppercase">
                        Register
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <div class="max-w-6xl mx-auto mt-12 px-4 pb-20 text-center flex-grow">
        <h2 class="text-5xl font-black text-[#5D4037] mb-12 uppercase italic tracking-tighter">Our Fresh Pastries</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <div class="bg-white rounded-[2.5rem] overflow-hidden shadow-2xl border-b-8 border-orange-500 p-8 transform transition duration-300 product-card">
                <img src="img/croissant.jpg" class="w-full h-64 object-cover rounded-3xl mb-6 shadow-inner bg-gray-50" alt="Croissant">
                <h3 class="font-bold text-2xl text-amber-900 mb-2">Golden Croissant</h3>
                <p class="text-orange-600 font-black mb-6 text-xl tracking-widest">₱65.00</p>
                <button onclick="addToCart('Golden Croissant', 65)" class="w-full bg-[#D2691E] text-white py-4 rounded-2xl font-black uppercase tracking-widest hover:bg-orange-800 transition shadow-lg">ADD TO CART</button>
            </div>

            <div class="bg-white rounded-[2.5rem] overflow-hidden shadow-2xl border-b-8 border-orange-500 p-8 transform transition duration-300 product-card">
                <img src="img/spanish.jpg" class="w-full h-64 object-cover rounded-3xl mb-6 shadow-inner bg-gray-50" alt="Spanish Bread">
                <h3 class="font-bold text-2xl text-amber-900 mb-2">Spanish Bread</h3>
                <p class="text-orange-600 font-black mb-6 text-xl tracking-widest">₱10.00</p>
                <button onclick="addToCart('Spanish Bread', 10)" class="w-full bg-[#D2691E] text-white py-4 rounded-2xl font-black uppercase tracking-widest hover:bg-orange-800 transition shadow-lg">ADD TO CART</button>
            </div>

            <div class="bg-white rounded-[2.5rem] overflow-hidden shadow-2xl border-b-8 border-orange-500 p-8 transform transition duration-300 product-card">
                <img src="img/ensaymada.jpg" class="w-full h-64 object-cover rounded-3xl mb-6 shadow-inner bg-gray-50" alt="Ensaymada">
                <h3 class="font-bold text-2xl text-amber-900 mb-2">Special Ensaymada</h3>
                <p class="text-orange-600 font-black mb-6 text-xl tracking-widest">₱25.00</p>
                <button onclick="addToCart('Special Ensaymada', 25)" class="w-full bg-[#D2691E] text-white py-4 rounded-2xl font-black uppercase tracking-widest hover:bg-orange-800 transition shadow-lg">ADD TO CART</button>
            </div>
        </div>
    </div>

    <section id="about" class="bg-white py-20 border-t-4 border-orange-100 mt-10">
        <div class="max-w-4xl mx-auto px-10 text-center">
            <h2 class="text-4xl font-black text-[#5D4037] mb-6 uppercase italic">About DatuBakery</h2>
            <p class="text-lg text-gray-600 leading-relaxed">
                Welcome to <span class="font-bold text-orange-600">DatuBakery</span>! We started with a simple goal: to bake the most 
                delicious, golden-brown pastries in Davao City. Every ingredient is carefully selected, and every bread 
                is baked fresh every single morning.
            </p>
        </div>
    </section>

    <footer id="contact" class="bg-[#5D4037] text-orange-100 py-16">
        <div class="max-w-6xl mx-auto px-10 grid grid-cols-1 md:grid-cols-2 gap-12">
            <div>
                <h3 class="text-3xl font-black italic mb-4 text-white uppercase tracking-tighter">DatuBakery</h3>
                <p class="text-sm opacity-70 max-w-sm mb-8">Handcrafted with passion in Davao City. Your local source for premium, fresh-baked happiness.</p>
                <div class="text-[10px] opacity-40 uppercase tracking-[0.3em]">
                    &copy; 2026 DatuBakery. All Rights Reserved.
                </div>
            </div>
            
            <div class="space-y-4">
                <h4 class="font-bold uppercase text-white tracking-widest border-b border-orange-800 pb-2 text-xs">Connect With Us</h4>
                <p class="text-sm opacity-80">📍 123 Baker St., Davao City, Philippines</p>
                <p class="text-sm opacity-80">📞 +63 912 345 6789</p>
                <p class="text-sm opacity-80">✉️ hello@datubakery.com</p>
            </div>
        </div>
    </footer>

    <script>
    function addToCart(name, price) {
        let formData = new FormData();
        formData.append('product_name', name);
        formData.append('price', price);

        fetch('add_to_cart.php', { method: 'POST', body: formData })
        .then(response => response.text())
        .then(newCount => {
            const badge = document.getElementById('cart-count');
            if(badge) badge.innerText = newCount;
            alert(name + " has been added to your cart!");
        })
        .catch(err => alert("Error adding to cart. Make sure add_to_cart.php exists."));
    }
    </script>

</body>
</html>