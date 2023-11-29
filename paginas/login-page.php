<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style/pages.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<header>
    <?php include("../components/session-start.php") ?>
    <?php include("../includes/navbar.php") ?>
</header>
<body>
    <p class="login-txt">Inloggen</p>
    <form action="../components/procces-login.php" method="POST" class="form">

    <label for="email">Email:</label>
        <input class="input" type="email" name="email" placeholder="Email" required/>
        <br>

    <label for="password">Wachtwoord:</label>
        <input class="input" type="password" name="password" placeholder="Wachtwoord" required/>
        <br>

        <input class="input submit-button" type="submit" value="Inloggen"/>
    </form>
 <a class="register-page-txt" href="register-personal-page.php">Maak een persoonlijk account</a>
 <a class="register-page-txt" href="register-business-page.php">Maak een zakelijk account</a>
</body>
<script>
    setTimeout(function() {
        var errorMessage = document.getElementById('errorMessage');
        if (errorMessage) {
            errorMessage.style.display = 'none';
        }
    }, 3000);
</script>
<?php
if (isset($_SESSION['login_error'])) {
    echo '<p id="errorMessage">' . $_SESSION['login_error'] . '</p>';
    unset($_SESSION['login_error']);
}
?>
</html>