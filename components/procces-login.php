<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "uitzendbureau-xxl");

$email = mysqli_real_escape_string($conn, $_POST["email"]);
$password = mysqli_real_escape_string($conn, $_POST["password"]);

$query = "SELECT * FROM users WHERE email = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 's', $email);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if ($result && mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
    $hashed_password_from_db = $user['password'];

    if (password_verify($password, $hashed_password_from_db)) {
        $_SESSION['email'] = $email;
        header("Location: ../index.php");
        exit();
    } else {
        $_SESSION['login_error'] = "Incorrect password";
        header("Location: ../paginas/login-page.php");
        exit();
    }
} else {
    $_SESSION['login_error'] = "Email not found";
    header("Location: ../paginas/login-page.php");
    exit();
}

?>
