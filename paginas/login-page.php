<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <header>
        <?php include("../components/session-start.php") ?>
        <?php include("../includes/navbar.php") ?>
    </header>
    <main class="d-flex justify-content-center align-items-center">
        <div class="custom-container my-5">

            <h3 class="text-center">Inloggen</h3>
            <form action="../components/procces-login.php" method="POST" class="form">
                <label for="email">Email:</label>
                <input class="form-control" type="email" name="email" placeholder="Email" required />

                <label for="password">Wachtwoord:</label>
                <input class="form-control" type="password" name="password" placeholder="Wachtwoord" required />

                <div class="d-flex justify-content-end">
                    <input class="btn btn-primary my-3" type="submit" value="Inloggen" />
            </form>
        </div>

        <div class="row g-3 mt-4 mx-2">
            <p class="text-center">Registreren.</p>
            <div class="col">
                <a class="btn btn-primary text-light" href="../paginas/register-page.php">Persoonlijk account</a>
            </div>
            <div class="col">
                <hr style="width: 100%;">
            </div>
            <div class="col">
                <a class="btn btn-primary text-light" onclick="redirect()">Particulier account</a>
            </div>
        </div>

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
if (isset($_SESSION['login_succes'])) {
    echo '<p id="succesfulMessage">' . $_SESSION['login_succes'] . '</p>';
    unset($_SESSION['login_succes']);
}
?>

</html>