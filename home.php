<?php
// We need to use sessions, so you should always initialize sessions using the below function
session_start();
// If the user is not logged in, redirect to the login page
if (!isset($_SESSION['account_loggedin'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SEMM Video Library</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>


<header>

    <h1 id="typewriter"></h1>
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
        <a href="#membership">MEMBERSHIP</a>
        <a href="logout.php" id="logout">
                        <svg fill="white" width="12" height="12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"/></svg>
                        Logout
                    </a>
    </div>
</nav>

    <div id="loader">
      <div class="spinner"></div>
      <p>Loading Movies...</p>
    </div>
<section id="movies">
    <p>Welcome back, <?=htmlspecialchars($_SESSION['account_name'], ENT_QUOTES)?>!</p>
    <h2>🔥 Latest Movies</h2>

    <div class="movie-grid">

        <!-- 12 MOVIES -->
        <!-- Movie 1 -->
        <div class="movie-card">
            <div class="poster-wrapper">
                <img src="https://images.justwatch.com/poster/335664023/s166/last-samurai-standing.avif">
                <span class="rating">⭐ 8.5</span>
                <span class="quality">HD</span>
                <div class="overlay"><button class="play-btn">▶</button></div>
            </div>
            <div class="movie-info">
                <h3>Last Samurai Standing</h3>
                <p>Action • 2h 10m</p>
            </div>
        </div>

       

        <div class="movie-card">
            <div class="poster-wrapper">
                <img src="	https://images.justwatch.com/poster/341619847/s332/the-pitt.avif">
                <span class="rating">⭐ 7.9</span>
                <span class="quality">HD</span>
                <div class="overlay"><button class="play-btn">▶</button></div>
            </div>
            <div class="movie-info">
                <h3>The Pitt</h3>
                <p>Thriller • 1h 50m</p>
            </div>
        </div>

        <div class="movie-card">
            <div class="poster-wrapper">
                <img src="https://images.justwatch.com/poster/320265698/s332/high-potential.avif">
                <span class="rating">⭐ 8.1</span>
                <span class="quality">HD</span>
                <div class="overlay"><button class="play-btn">▶</button></div>
            </div>
            <div class="movie-info">
                <h3>High Potential</h3>
                <p>Intelligence • 2h 5m</p>
            </div>
        </div>

        <div class="movie-card">
            <div class="poster-wrapper">
                <img src="https://images.justwatch.com/poster/340652355/s332/steal.avif">
                <span class="rating">⭐ 8.3</span>
                <span class="quality">HD</span>
                <div class="overlay"><button class="play-btn">▶</button></div>
            </div>
            <div class="movie-info">
                <h3>Steal</h3>
                <p>Theft • 2h 30m</p>
            </div>
        </div>


        <div class="movie-card"><div class="poster-wrapper">
        <img src="https://images.justwatch.com/poster/332419317/s332/28-years-later.avif">
        <span class="rating">⭐ 7.8</span><span class="quality">HD</span>
        <div class="overlay"><button class="play-btn">▶</button></div></div>
        <div class="movie-info"><h3>28 Years Later</h3><p>Drama • 2h</p></div></div>

        <div class="movie-card"><div class="poster-wrapper">
        <img src="	https://images.justwatch.com/poster/336298604/s332/f1.avif">
        <span class="rating">⭐ 8.0</span><span class="quality">HD</span>
        <div class="overlay"><button class="play-btn">▶</button></div></div>
        <div class="movie-info"><h3>F1</h3><p>Love • 1h 45m</p></div></div>

        <div class="movie-card"><div class="poster-wrapper">
        <img src="https://images.justwatch.com/poster/337882384/s332/welcome-to-derry.avif">
        <span class="rating">⭐ 7.5</span><span class="quality">HD</span>
        <div class="overlay"><button class="play-btn">▶</button></div></div>
        <div class="movie-info"><h3>IT: Welcome to Derry</h3><p>Horror • 2h</p></div></div>

        <div class="movie-card"><div class="poster-wrapper">
        <img src="https://images.justwatch.com/poster/338569874/s332/unfamiliar.avif">
        <span class="rating">⭐ 8.2</span><span class="quality">HD</span>
        <div class="overlay"><button class="play-btn">▶</button></div></div>
        <div class="movie-info"><h3>Bone Palace</h3><p>Documentary • 1h 30m</p></div></div>

        <div class="movie-card"><div class="poster-wrapper">
        <img src="https://images.justwatch.com/poster/302371019/s166/poker-face.avif">
        <span class="rating">⭐ 8.6</span><span class="quality">HD</span>
        <div class="overlay"><button class="play-btn">▶</button></div></div>
        <div class="movie-info"><h3>Poker Face</h3><p>Comedy • 2h 15m</p></div></div>

        <div class="movie-card"><div class="poster-wrapper">
        <img src="	https://images.justwatch.com/poster/110511366/s166/breaking-bad.avif">
        <span class="rating">⭐ 7.6</span><span class="quality">HD</span>
        <div class="overlay"><button class="play-btn">▶</button></div></div>
        <div class="movie-info"><h3>Breaking Bad</h3><p>Theft • 2h</p></div></div>

        <div class="movie-card"><div class="poster-wrapper">
        <img src="	https://images.justwatch.com/poster/317954523/s166/bridgerton.avif">
        <span class="rating">⭐ 8.4</span><span class="quality">HD</span>
        <div class="overlay"><button class="play-btn">▶</button></div></div>
        <div class="movie-info"><h3>Bridgerton</h3><p>Drama • 2h</p></div></div>

        <div class="movie-card"><div class="poster-wrapper">
        <img src="https://images.justwatch.com/poster/301078631/s166/wednesday.avif">
        <span class="rating">⭐ 7.9</span><span class="quality">HD</span>
        <div class="overlay"><button class="play-btn">▶</button></div></div>
        <div class="movie-info"><h3>Wednesday</h3><p>Witchcraft • 1h 55m</p></div></div>

    </div>


</section>

<section id="pricing">
    <h2>🎟 Category Rental Pricing (UGX)</h2>

 <!-- Table -->
    <table>
        <tr>
            <th>Category</th>
            <th>Rental Price</th>
        </tr>
        <tr>
            <td>Love</td>
            <td>2,000</td>
        </tr>
        <tr>
            <td>Thriller</td>
            <td>3,000</td>
        </tr>
        <tr>
            <td>Action</td>
            <td>3,500</td>
        </tr>
        <tr>
            <td>Drama</td>
            <td>2,500</td>
        </tr>
        <tr>
            <td>Documentary</td>
            <td>2,000</td>
        </tr>
        <tr>
            <td>Sci-Fi</td>
            <td>3,000</td>
        </tr>
    </table>
</section>

<section id="membership">
    <h2>Register for Membership</h2>

    <form id="membershipForm">

        <label>Full Name</label>
        <input type="text" id="fullname" placeholder="example: John Doe" required>

        <label>Email</label>
        <input type="email" id="email" placeholder="example: john.doe@example.com" required>

        <label>Phone Number</label>
        <input type="tel" id="phone" placeholder="example: +256 700 123 456">

        <label>Membership Type</label>
        <select id="membershipType" title="Packages">
            <option>Standard - UGX 20,000/month</option>
            <option>Premium - UGX 35,000/month</option>
        </select>

        <input type="submit" value="Register">

    </form>
</section>

<section id="contact">
    <h2>Contact Us</h2>
    <p>Email: semmvideolibrary@gmail.com</p>
    <p>Location: Kampala, Uganda</p>
</section>

<footer>
    <p>&copy; 2026 SEMM Video Library</p>
</footer>
<script src="script.js"></script>
</body>
</html>