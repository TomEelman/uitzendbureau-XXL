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

    $query = "INSERT INTO users (firstname, lastname, companyname, email, password, phonenumber, country, city, postalcode, street, housenumber, additive) VALUES ('$firstname',id'$firstname', '$lastname', '$companyname', '$email', '$hashed_password', '$phonenumber', '$country', '$city', '$postalcode', '$street', '$housenumber', '$additive')";

    if (mysqli_query($conn, $query)) {
        echo '<script>alert("Je bent geregistreerd")</script>';
        header('Location: ../paginas/login-page.php');
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
