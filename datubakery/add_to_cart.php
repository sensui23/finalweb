<?php
session_start();

if (isset($_POST['product_name']) && isset($_POST['price'])) {
    $name = $_POST['product_name'];
    $price = $_POST['price'];

    if (!isset($_SESSION['cart'])) { $_SESSION['cart'] = []; }

    if (isset($_SESSION['cart'][$name])) {
        $_SESSION['cart'][$name]['quantity']++;
    } else {
        $_SESSION['cart'][$name] = ['name' => $name, 'price' => $price, 'quantity' => 1];
    }

    $total_items = 0;
    foreach ($_SESSION['cart'] as $item) { $total_items += $item['quantity']; }
    echo $total_items;
}
?>