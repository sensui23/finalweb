<?php
include "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass  = mysqli_real_escape_string($conn, $_POST['password']);
    $type  = mysqli_real_escape_string($conn, $_POST['user_type']);

    $sql = "INSERT INTO users (username, email, password, user_type) VALUES ('$uname', '$email', '$pass', '$type')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Registered Successfully!'); window.location='login.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>