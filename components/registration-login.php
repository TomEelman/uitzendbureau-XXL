<?php

include("session-start.php");

$role = "user";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);
    $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);
    $companyname = mysqli_real_escape_string($conn, $_POST["companyname"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $phonenumber = mysqli_real_escape_string($conn, $_POST["phonenumber"]);
    $country = mysqli_real_escape_string($conn, $_POST["country"]);
    $city = mysqli_real_escape_string($conn, $_POST["city"]);
    $postalcode = mysqli_real_escape_string($conn, $_POST["postalcode"]);
    $street = mysqli_real_escape_string($conn, $_POST["street"]);
    $housenumber = mysqli_real_escape_string($conn, $_POST["housenumber"]);
    $additive = mysqli_real_escape_string($conn, $_POST["additive"]);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Check if email already exists
    $checkEmailQuery = "SELECT email FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $checkEmailQuery);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['login_error'] = "Dit e-mailadres is al bij ons geregistreerd. Gebruik een ander e-mailadres of neem contact met ons op als je geen account hebt aangemaakt.";
        header("Location: ../paginas/login-page.php");
        exit();
    }

// Insert into database
    if (!empty($companyname)) {
        $role = "company";
        $query = "INSERT INTO users (role, firstname, lastname, companyname, email, password, phonenumber, country, city, postalcode, street, housenumber, additive) VALUES ('$role', '$firstname', '$lastname', '$companyname', '$email', '$hashed_password', '$phonenumber', '$country', '$city', '$postalcode', '$street', '$housenumber', '$additive')";
    } else {
        $query = "INSERT INTO users (role, firstname, lastname, email, password, phonenumber, country, city, postalcode, street, housenumber, additive) VALUES ('$role', '$firstname', '$lastname', '$email', '$hashed_password', '$phonenumber', '$country', '$city', '$postalcode', '$street', '$housenumber', '$additive')";
    }

    if (mysqli_query($conn, $query)) {
        $_SESSION['login_succes'] = "Uw account is geregistreerd.";
        header("Location: ../paginas/login-page.php");
    } else {

        $_SESSION['login_error'] = "Er is een probleem opgetreden tijdens de registratie. Probeer het later opnieuw.";
        header("Location: ../paginas/login-page.php");
    }
}

mysqli_close($conn);
