<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DatuBakery | Login</title>
</head>
<body class="bg-[#FDF5E6] flex items-center justify-center h-screen font-sans">
    <div class="bg-white p-10 rounded-3xl shadow-2xl w-96 border-t-8 border-orange-500">
        <h2 class="text-3xl font-black text-[#5D4037] text-center mb-6 uppercase italic tracking-tighter">Login Here</h2>
        
        <form action="login_logic.php" method="POST" class="space-y-5">
            <div>
                <label class="block text-xs font-black text-orange-900 uppercase tracking-widest mb-1">Username</label>
                <input type="text" name="username" required placeholder="Enter your username" 
                    class="w-full px-4 py-3 rounded-xl border-2 border-orange-100 focus:border-orange-500 focus:outline-none transition">
            </div>
            <div>
                <label class="block text-xs font-black text-orange-900 uppercase tracking-widest mb-1">Password</label>
                <input type="password" name="password" required placeholder="••••••••" 
                    class="w-full px-4 py-3 rounded-xl border-2 border-orange-100 focus:border-orange-500 focus:outline-none transition">
            </div>
            <button type="submit" class="w-full bg-[#D2691E] text-white py-4 rounded-xl font-black uppercase tracking-widest hover:bg-orange-800 transition shadow-lg transform hover:-translate-y-1">Login</button>
        </form>
        
        <p class="mt-8 text-center text-sm text-gray-500 font-medium">
            Don't have an account? <br>
            <a href="signup.php" class="text-orange-600 font-black hover:underline uppercase tracking-tighter">Register Here</a>
        </p>
    </div>
</body>
</html>