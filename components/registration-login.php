<?php
include("session-start.php");

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

    $role = "user";

    if (!empty($companyname)) {
        $role = "company";
    }

    $query = "INSERT INTO users (role, firstname, lastname, companyname, email, password, phonenumber, country, city, postalcode, street, housenumber, additive) VALUES ('$role', '$firstname', '$lastname', '$companyname', '$email', '$hashed_password', '$phonenumber', '$country', '$city', '$postalcode', '$street', '$housenumber', '$additive')";

    $_SESSION['login_error'] = "Dit zelfde email is al bij ons geregistreerd,<br> gebruik een ander email. <br> heb geen account gemaakt hebt met jouw email neem contact op met ons!";
    header("Location: ../paginas/login-page.php");
    exit();

    if (mysqli_query($conn, $query)) {
        echo '<script>alert("Je bent geregistreerd")</script>';
        header('Location: ../paginas/login-page.php');
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
