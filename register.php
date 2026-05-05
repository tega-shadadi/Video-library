<?php
// We need to use sessions, so you should always initialize sessions using the below function
session_start();
// If the user is logged in, redirect to the home page
if (isset($_SESSION['account_loggedin'])) {
	header('Location: home.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Register</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
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
								<a href="index.php" id="home">HOME</a>
								 
                <a href="#movies">MOVIES</a>
                <a href="#pricing">CATEGORY PRICING</a>
                <a href="#contact">CONTACT</a>

           
            </div>
        </nav>

		<section class="login">

			<h2>Admin member registration</h2>

			<form action="register-process.php" method="post" class="form login-form">

				<label class="form-label" for="username">Username <svg class="form-icon-left" width="14" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg></label>
				<div class="form-group">
					
					<input class="form-input" type="text" name="username" placeholder="Username" id="username" required>
				</div>

				<label class="form-label" for="email">Email <svg class="form-icon-left" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/></svg></label>
				<div class="form-group">
					
					<input class="form-input" type="email" name="email" placeholder="Email" id="email" required>
				</div>

				<label class="form-label" for="password">Password <svg class="form-icon-left" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg></label>
				<div class="form-group mar-bot-5">
					
					<input class="form-input" type="password" name="password" placeholder="Password" id="password" autocomplete="new-password" required>
				</div>

				<button class="bttn blue" type="submit">Register</button>

				<p class="register-link">Already have an account? <a href="index.php" class="form-link">Login</a></p>

			</form>
		</section>
		<footer>
	    <p>&copy; 2026 SEMM Video Library</p>
    </footer>
	</body>
</html>