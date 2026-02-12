<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>DatuBakery | Register</title>
</head>
<body class="bg-[#FDF5E6] flex items-center justify-center h-screen font-sans">
    <div class="bg-white p-10 rounded-3xl shadow-2xl w-96 border-t-8 border-green-600">
        <h2 class="text-3xl font-black text-[#5D4037] text-center mb-6 uppercase italic tracking-tighter">Register Here</h2>
        
        <form action="signup_logic.php" method="POST" class="space-y-5">
            <div>
                <label class="block text-xs font-black text-orange-900 uppercase tracking-widest mb-1">Username</label>
                <input type="text" name="username" required placeholder="Choose a username" 
                    class="w-full px-4 py-3 rounded-xl border-2 border-orange-100 focus:border-green-500 focus:outline-none transition">
            </div>
            <div>
                <label class="block text-xs font-black text-orange-900 uppercase tracking-widest mb-1">Password</label>
                <input type="password" name="password" required placeholder="Create a password" 
                    class="w-full px-4 py-3 rounded-xl border-2 border-orange-100 focus:border-green-500 focus:outline-none transition">
            </div>
            <button type="submit" class="w-full bg-green-600 text-white py-4 rounded-xl font-black uppercase tracking-widest hover:bg-green-700 transition shadow-lg transform hover:-translate-y-1">Create Account</button>
        </form>
        
        <p class="mt-8 text-center text-sm text-gray-500 font-medium">
            Already a member? <br>
            <a href="login.php" class="text-green-700 font-black hover:underline uppercase tracking-tighter">Login Here</a>
        </p>
    </div>
</body>
</html>