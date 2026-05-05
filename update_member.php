<?php
$mysqli = new mysqli("localhost", "root", "", "video-library-db");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$id = $_POST['id'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$membership = $_POST['membership'];

$stmt = $mysqli->prepare("UPDATE members SET fullname=?, email=?, phone=?, membership=? WHERE id=?");
$stmt->bind_param("ssssi", $fullname, $email, $phone, $membership, $id);

if ($stmt->execute()) {
    header("Location: members.php?updated=1");
    exit;
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$mysqli->close();
?>