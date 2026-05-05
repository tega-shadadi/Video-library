<?php
session_start();

if (!isset($_SESSION['account_loggedin'])) {
    header('Location: index.php');
    exit;
}

// Connect to DB
$mysqli = new mysqli("localhost", "root", "", "video-library-db");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Fetch members
$result = $mysqli->query("SELECT * FROM members ORDER BY id ASC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Members</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body >

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

        <a href="home.php" id="logout">
                        <svg fill="white" width="12" height="12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/></svg>
                        Logout
                    </a>
    </div>
</nav>

<section>
  <h2>Registered Members</h2>



  <table border="1" cellpadding="10">
      <tr>
          <th>ID</th>
          <th>Full Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Membership</th>
          <th>Action</th>
      </tr>

      <?php while($row = $result->fetch_assoc()): ?>
      <tr>
          <td><?= $row['id'] ?></td>
          <td><?= htmlspecialchars($row['fullname']) ?></td>
          <td><?= htmlspecialchars($row['email']) ?></td>
          <td><?= htmlspecialchars($row['phone']) ?></td>
          <td><?= htmlspecialchars($row['membership']) ?></td>
          <td>
            <a href="edit_member.php?id=<?= $row['id'] ?>">Edit</a>
          </td>
      </tr>
      <?php endwhile; ?>

  </table>

  <hr>
  <?php if (isset($_GET['updated'])): ?>
      <p style="color: green;">Member updated successfully!</p>
  <?php endif; ?>
  
</section>
<section>
  <h2>Add New Members</h2>
  <form action="save_member.php" method="POST">

      <label>Full Name</label><br>
      <input type="text" name="fullname" placeholder="John Doe" required><br><br>

      <label>Email</label><br>
      <input type="email" name="email" placeholder="john.doe@example.com" required><br><br>

      <label>Phone Number</label><br>
      <input type="text" name="phone" placeholder="+256 700 123 456" required><br><br>

      <label>Membership Type</label><br>
      <select name="membership" required>
          <option value="Standard">Standard - UGX 20,000/month</option>
      </select><br><br>

      <button class="bttn" type="submit">Register Member</button>

  </form>
</section>
<footer>
    <p>&copy; 2026 SEMM Video Library</p>
</footer>

</body>
</html>