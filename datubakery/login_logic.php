<?php
session_start();
include "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = mysqli_real_escape_string($conn, $_POST['username']);
    $pass  = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $row['username'];
        $_SESSION['type'] = $row['user_type'];
        header("Location: index.php");
    } else {
        echo "<script>alert('Sayop ang Username o Password!'); window.location='login.php';</script>";
    }
}
?>