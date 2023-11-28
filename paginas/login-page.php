<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<header>
    <?php include("../includes/navbar.php") ?>
</header>

<body>
    <p>Inloggen</p>
    <form action="../components/registration-login.php" method="POST">

        <input type="text" name="email" placeholder="Email" />
        <br>

        <input type="password" name="password" placeholder="Wachtwoord" />
        <br>

        <input type="submit" placeholder="Regsitreren" />
    </form>

    <a href="register-page.php">Heb je nog geen account? Maak er hier een</a>
</body>

</html>