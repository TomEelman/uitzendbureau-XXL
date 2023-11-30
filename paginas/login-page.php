<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style/pages.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <header>
        <?php include("../components/session-start.php") ?>
        <?php include("../includes/navbar.php") ?>
    </header>
    <main>
        <p class="login-txt">Inloggen</p>
        <form action="../components/procces-login.php" method="POST" class="form">

            <label for="email">Email:</label>
            <input class="form-control inputField" type="email" name="email" placeholder="Email" required />
            <br>

            <label for="password">Wachtwoord:</label>
            <input class="form-control inputField" type="password" name="password" placeholder="Wachtwoord" required />
            <br>

            <input class="form-control inputField submit-button btn-primary" type="submit" value="Inloggen" />
        </form>
        <a class="register-page-txt" href="../paginas/register-page.php">Maak een persoonlijk account</a>
        <a class="register-page-txt" onclick="redirect()">Maak een zakelijk account</a>
    </main>
    <footer>
        <?php include("../includes/footer.php") ?>
    </footer>
</body>

<?php
if (isset($_SESSION['login_error'])) {
    echo '<p id="errorMessage">' . $_SESSION['login_error'] . '</p>';
    unset($_SESSION['login_error']);
}
?>

</html>