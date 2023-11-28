<p>Registreren</p>
<form action="../components/registration-login.php" method="POST">
    <input type="text" name="firstname" placeholder="Voornaam" />
    <br>

    <input type="text" name="lastname" placeholder="Achternaam" />
    <br>

    <input type="text" name="email" placeholder="Email" />
    <br>

    <input type="password" name="password" placeholder="Wachtwoord" />
    <br>

    <input type="number" name="phonenumber" placeholder="Telefoon nummer" />
    <br>

    <select id="country" name="country">
        <option value="nl">Nederland</option>
        <option value="en">Engeland</option>
    </select><br>

    <input type="text" name="city" placeholder="Stad" />
    <br>

    <input type="text" name="postalcode" placeholder="Postcode" />
    <br>

    <input type="text" name="street" placeholder="Straat" />
    <br>

    <input type="text" name="housenumber" placeholder="Huisnummer" />
    <br>

    <input type="text" name="additive" placeholder="Toev" />
    <br>

    <input type="submit" placeholder="Regsitreren"/>
</form>

<a href="login-page.php">Heb je al een account? Klik hier</a>