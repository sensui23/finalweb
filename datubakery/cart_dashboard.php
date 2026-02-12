<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>My Dashboard - Cart</title>
</head>
<body class="bg-[#FDF5E6] p-10">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-3xl shadow-2xl border-t-8 border-orange-500">
        <div class="flex justify-between items-center mb-10">
            <h1 class="text-3xl font-black text-[#5D4037]">🛒 MY ORDERS</h1>
            <a href="index.php" class="bg-gray-200 px-4 py-2 rounded-lg font-bold">← Back</a>
        </div>

        <table class="w-full text-left">
            <thead>
                <tr class="bg-orange-100 text-[#5D4037]">
                    <th class="p-4">Product</th>
                    <th class="p-4 text-center">Qty</th>
                    <th class="p-4 text-right">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $total = 0;
                if (!empty($_SESSION['cart'])): 
                    foreach ($_SESSION['cart'] as $item): 
                        $subtotal = $item['price'] * $item['quantity'];
                        $total += $subtotal;
                ?>
                <tr class="border-b">
                    <td class="p-4 font-bold"><?php echo $item['name']; ?></td>
                    <td class="p-4 text-center"><?php echo $item['quantity']; ?></td>
                    <td class="p-4 text-right">₱<?php echo number_format($subtotal, 2); ?></td>
                </tr>
                <?php endforeach; else: ?>
                <tr><td colspan="3" class="p-10 text-center text-gray-400">Walay sulod imong cart.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>

        <?php if($total > 0): ?>
        <div class="mt-10 text-right">
            <h3 class="text-3xl font-black text-[#D2691E]">Total: ₱<?php echo number_format($total, 2); ?></h3>
            <div class="mt-6 flex justify-end gap-4">
                <a href="clear_cart.php" class="bg-gray-400 text-white px-6 py-3 rounded-xl font-bold">Clear All</a>
                <a href="checkout_order.php" class="bg-green-600 text-white px-10 py-3 rounded-xl font-black shadow-xl">CHECKOUT ORDER</a>
            </div>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>