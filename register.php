<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $department = $_POST['department'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Image upload
    $imageName = $_FILES['image']['name'];
    $targetDir = "uploads/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    $targetFile = $targetDir . basename($imageName);
    move_uploaded_file($_FILES['image']['tmp_name'], $targetFile);

    $sql = "INSERT INTO students (fullname, department, phone, email, address, image, password)
            VALUES ('$fullname', '$department', '$phone', '$email', '$address', '$imageName', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration Successful!'); window.location='login.html';</script>";
    } else {
        echo "<script>alert('Error: " . $conn->error . "'); window.location='registration.html';</script>";
    }
}
?>
