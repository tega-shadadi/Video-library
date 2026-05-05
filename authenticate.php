<?php
session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'video-library-db';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL!');
}

if (!isset($_POST['username'], $_POST['password'])) {
    exit('Please fill both the username and password fields!');
}

// Prepare SQL
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {

    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    // Check if account exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();

        if (password_verify($_POST['password'], $password)) {

            session_regenerate_id();
            $_SESSION['account_loggedin'] = TRUE;
            $_SESSION['account_name'] = $_POST['username'];
            $_SESSION['account_id'] = $id;

            header('Location: home.php');
        } else {
            echo 'Incorrect username and/or password!';
        }

    } else {
        echo 'Incorrect username and/or password!';
    }

    $stmt->close();
}
?>