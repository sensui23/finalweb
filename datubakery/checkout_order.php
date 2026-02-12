<?php
session_start();

// Unset the cart session to clear all items
if (isset($_SESSION['cart'])) {
    unset($_SESSION['cart']);
}

// Gi-English na ang message sa alert diri
echo "<script>
    alert('Thank you! Your order has been processed and your cart has been cleared.');
    window.location.href = 'index.php';
</script>";
exit();
?>