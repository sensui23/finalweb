<?php
session_start();
include "db_conn.php";

if (isset($_SESSION['user']) && isset($_POST['product'])) {
    $user = $_SESSION['user'];
    $product = mysqli_real_escape_string($conn, $_POST['product']);

    $sql = "INSERT INTO tbl_orders (username, product_name) VALUES ('$user', '$product')";

    if (mysqli_query($conn, $sql)) {
        echo "Salamat, $user! Nadawat na namo ang order nimo nga $product.";
    } else {
        echo "Database Error: " . mysqli_error($conn);
    }
} else {
    echo "Palihug login usa una maka-order.";
}
?>