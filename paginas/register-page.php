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
        <p class="login-txt">Registreren particulier account</p>
        <form action="../components/registration-login.php" method="POST">

            <div class="inputfields-container">
                <div class="row mb-3">
                    <label for="firstname" class="col-sm-2 col-form-label">Voornaam:</label>
                    <div class="col-sm-10">
                        <input class="form-control inputField" type="text" name="firstname" placeholder="Voornaam" required />
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="lastname" class="col-sm-2 col-form-label">Achternaam:</label>
                    <div class="col-sm-10">
                        <input class="form-control inputField" type="text" name="lastname" placeholder="Achternaam" required />
                    </div>
                </div>

                <div id="companyInputFieldDiv">
                    <div class="row mb-3">
                        <label for="companyname" id="companyInputField" class="col-sm-2 col-form-label" style="display: none;">Company Name:</label>
                        <div class="col-sm-10">
                            <input id="companyInput" class="form-control" type="text" name="companyname" placeholder="Company Name" style="display: none;" />
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-sm-2 col-form-label">Email:</label>
                    <div class="col-sm-10">
                        <input class="form-control inputField" type="email" name="email" placeholder="Email" required />
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Wachtwoord:</label>
                    <div class="col-sm-10">
                        <input class="form-control inputField" type="password" name="password" placeholder="Wachtwoord" required />
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="phonenumber" class="col-sm-2 col-form-label">Telefoon-nummer:</label>
                    <div class="col-sm-10">
                        <input class="form-control inputField" type="phonenumber" name="phonenumber" placeholder="+31 061438290" required />
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="country" class="col-sm-2 col-form-label">Land:</label>
                    <div class="col-sm-10">
                        <select class="form-select inputField" id="country" name="country">
                            <option value="Nederland">Nederland</option>
                            <option value="Engeland">Engeland</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="city" class="col-sm-2 col-form-label">Stad / Dorp:</label>
                    <div class="col-sm-10">
                        <input class="form-control inputField" type="text" name="city" placeholder="city" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="postalcode" class="col-sm-2 col-form-label">Postcode:</label>
                    <div class="col-sm-10">
                        <input class="form-control inputField" type="text" name="postalcode" placeholder="7153DA" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="street" class="col-sm-2 col-form-label">Straat:</label>
                    <div class="col-sm-10">
                        <input class="form-control inputField" type="text" name="street" placeholder="Janballeweg" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="housenumber" class="col-sm-2 col-form-label">Huisnummer:</label>
                    <div class="col-sm-10">
                        <input class="form-control inputField" type="text" name="housenumber" placeholder="Huisnummer" />
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="additive" class="col-sm-2 col-form-label">Toevoeging:</label>
                    <div class="col-sm-10">
                        <input class="form-control inputField" type="text" name="additive" placeholder="Toev" />
                    </div>
                </div>
            </div>

            <button class="btn btn-primary submit-button" type="submit">Registreren</button>
        </form>
        <a class="register-page-txt" href="login-page.php">Heb je al een account? Klik hier</a>
    </main>
    <footer>
        <?php include("../includes/footer.php") ?>
    </footer>
</body>