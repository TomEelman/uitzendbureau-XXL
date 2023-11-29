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

    <p class="login-txt">Registreren particulier account</p>
    <form action="../components/registration-login.php" method="POST" class="register-form">

        <div class="input-container">
            <label for="firstname">Contact voornaam:</label>
            <input class="register-input voornaam" type="text" name="firstname" placeholder="Voornaam" required />

            <label for="lastname">Achternaam:</label>
            <input class="register-input achternaam" type="text" name="lastname" placeholder="Achternaam" required />

            <label for="companyname">Bedrijf naam:</label>
            <input class="register-input achternaam" type="text" name="companyname" placeholder="Bedrijf naam" required />

            <label for="email">Email:</label>
            <input class="register-input" type="email" name="email" placeholder="Email" required />

            <label for="wachtwoord">Wachtwoord:</label>
            <input class="register-input" type="password" name="password" placeholder="Wachtwoord" required />
        </div>

        <div class="input-container-two">
            <label for="country">Country:</label>
            <select class="register-input-two" id="country" name="country">
                <option value="Nederland">Nederland</option>
                <option value="Engeland">Engeland</option>
            </select>

            <label for="city">City:</label>
            <input class="register-input-two" type="text" name="city" placeholder="Stad" required />

            <label for="phonenumber">Phonenumber:</label>
            <input class="register-input-two" type="number" name="phonenumber" placeholder="Telefoon nummer" required />

            <label for="postalcode">Postcode:</label>
            <input class="register-input-two" type="text" name="postalcode" placeholder="Postcode" required />

            <label for="street">Straat:</label>
            <input class="register-input-two" type="text" name="street" placeholder="Straat" required />

        </div>

        <div class="input-container-three">
            <label for="housenumber">Huisnummer:</label>
            <input class="register-input-two" type="text" name="housenumber" placeholder="Huisnummer" />


            <label for="additive">Toevoeging:</label>
            <input class="register-input-two" type="text" name="additive" placeholder="Toev" />
        </div>

        <input class="register-input submit-button-register" type="submit" value="Registreren" />
    </form>

    <a class="register-page-txt" href="login-page.php">Heb je al een account? Klik hier</a>
</body>

</html>

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