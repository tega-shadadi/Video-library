<?php
$mysqli = new mysqli("localhost", "root", "", "video-library-db");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$membership = $_POST['membership'];

$stmt = $mysqli->prepare("INSERT INTO members (fullname, email, phone, membership) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $fullname, $email, $phone, $membership);

if ($stmt->execute()) {
    header("Location: home.php?registered=1");
    exit;

} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$mysqli->close();
?>