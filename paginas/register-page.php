<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registreren</title>
</head>

<body>
    <header>
        <?php include("../components/session-start.php") ?>
        <?php include("../includes/navbar.php") ?>
    </header>
    <main class="d-flex justify-content-center align-items-center">
        <form action="../components/registration-login.php" method="POST">

            <div class="custom-container my-2">
                <h3 class="text-center">Registreren particulier account</h3>

                <!-- Bedrijf's naam -->
                <div class="row mb-1">
                    <div class="">
                        <label for="companyname" id="companyInputField" class="col-form-label" style="display: none;">Company Name</label>
                        <input id="companyInput" class="form-control" type="text" name="companyname" placeholder="Company Name" style="display: none;" />
                    </div>
                </div>

                <!-- Voor en achternaam -->
                <div class="row g-3">
                    <div class="col">
                        <label for="firstname">Voornaam</label>
                        <input class="form-control" type="text" name="firstname" placeholder="Voornaam" required />
                    </div>
                    <div class="col">
                        <label for="lastname">Achternaam</label>
                        <input class="form-control" type="text" name="lastname" placeholder="Achternaam" required />
                    </div>
                </div>

                <!-- Email en Wachtwoord -->
                <div class="row g-3 mt-1">
                    <div class="col">
                        <label for="email">Email:</label>
                        <input class="form-control" type="email" name="email" placeholder="Email" required />
                    </div>
                    <div class="col">
                        <label for="password">Wachtwoord:</label>
                        <input class="form-control" type="password" name="password" placeholder="Wachtwoord" required />
                    </div>
                </div>

                <!-- Land en Telefoon nummer -->
                <div class="row g-3">
                    <div class="col">
                        <label for="country" class="col-sm-2 col-form-label">Land</label>
                        <select class="form-select" id="country" name="country">
                            <option value="Nederland">Nederland</option>
                            <option value="Engeland">Engeland</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="phonenumber" class="col-form-label">Telefoon-nummer</label>
                        <input class="form-control" type="number" name="phonenumber" placeholder="+31 061438290" required />
                    </div>
                </div>

                <!-- Woonplaats en Postcode -->
                <div class="row g-3">
                    <div class="col">
                        <label for="city" class="col-form-label">Stad / Dorp</label>
                        <input class="form-control" type="text" name="city" placeholder="city" />
                    </div>
                    <div class="col">
                        <label for="postalcode" class="col-form-label">Postcode</label>
                        <input class="form-control" type="text" name="postalcode" placeholder="7153DA" />
                    </div>
                </div>

                <!-- Straat, huisnummer en toevoeging -->
                <div class="row g-3">
                    <div class="col">
                        <label for="street" class="col-form-label">Straat</label>
                        <input class="form-control" type="text" name="street" placeholder="Janballeweg" />
                    </div>
                    <div class="col">
                        <label for="housenumber" class="col-form-label">Huisnummer</label>
                        <input class="form-control" type="text" name="housenumber" placeholder="Huisnummer" />
                    </div>
                    <div class="col">
                        <label for="additive" class="col-form-label">Toevoeging</label>
                        <input class="form-control" type="text" name="additive" placeholder="Toev" />
                    </div>
                </div>

                <!-- Submit en redirect knop -->
                <div class="row">
                    <div class="col">
                        <a class="btn btn-primary my-3" href="login-page.php">Heb je al een account? Klik hier</a>
                    </div>
                    <div class="col d-flex justify-content-end">
                        <button class="btn btn-primary my-3" type="submit">Registreren</button>
                    </div>
                </div>

            </div>
        </form>
    </main>
</body>
<script>
    <?php include("../includes/script.js") ?>
</script>