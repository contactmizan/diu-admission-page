<?php
session_start();
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM students WHERE email='$email'");
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user'] = $row['fullname'];
            echo "<script>alert('Login Successful!'); window.location='index.html';</script>";
        } else {
            echo "<script>alert('Invalid Password'); window.location='login.html';</script>";
        }
    } else {
        echo "<script>alert('No account found'); window.location='login.html';</script>";
    }
}
?>
