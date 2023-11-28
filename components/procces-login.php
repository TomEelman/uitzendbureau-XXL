<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "uitzendbureau-xxl");

$email = mysqli_real_escape_string($conn, $_POST["email"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);
$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['email'] = $email;
    header("Location: ../index.php");
    exit();
} else {
    $_SESSION['login_error'] = "Verkeerde Info";
    header("Location: ../paginas/login-page.php");
    exit();
}
?>
