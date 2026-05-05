<?php
session_start();

if (!isset($_SESSION['account_loggedin'])) {
    header('Location: index.php');
    exit;
}

$mysqli = new mysqli("localhost", "root", "", "video-library-db");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Get member ID
if (!isset($_GET['id'])) {
    die("No ID provided");
}

$id = $_GET['id'];

// Fetch member data
$stmt = $mysqli->prepare("SELECT * FROM members WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$member = $result->fetch_assoc();

if (!$member) {
    die("Member not found");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Member</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>

    <h1 class="typewriter">🎬 SEMM Video Library</h1>
    <p>Your Home of Movies, Documentaries & Learning Videos</p>
</header>


<nav>
    <div class="menu-toggle" id="menu-toggle">
        ☰
    </div>

    <div class="nav-links" id="nav-links">
        <a href="#movies">MOVIES</a>
        <a href="#pricing">CATEGORY PRICING</a>
        <a href="#contact">CONTACT</a>
        

    </div>
</nav>

<section>
    <h2>Edit Member</h2>

    <form action="update_member.php" method="POST">

        <input type="hidden" name="id" value="<?= $member['id'] ?>">

        <label>Full Name</label><br>
        <input type="text" name="fullname" value="<?= htmlspecialchars($member['fullname']) ?>" required><br><br>

        <label>Email</label><br>
        <input type="email" name="email" value="<?= htmlspecialchars($member['email']) ?>" required><br><br>

        <label>Phone</label><br>
        <input type="text" name="phone" value="<?= htmlspecialchars($member['phone']) ?>" required><br><br>

        <label>Membership</label><br>
        <select name="membership">
            <option value="Standard" <?= $member['membership'] == 'Standard' ? 'selected' : '' ?>>
                Standard - UGX 20,000/month
            </option>
        </select><br><br>

        <button type="submit" class="bttn">Update Member</button>
    </form>
</section>
<footer>
    <p>&copy; 2026 SEMM Video Library</p>
</footer>

</body>
</html>