<?php
session_start();

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = mysqli_real_escape_string($conn, $_POST["email"]);
$password = $_POST["password"];

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
        $_SESSION['userid'] = $user['userid'];
        $_SESSION['companyname'] = $user['companyname'];
        $_SESSION['firstname'] = $user['firstname'];
        $_SESSION['lastname'] = $user['lastname'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['phonenumber'] = $user['phonenumber'];
        $_SESSION['country'] = $user['country'];
        $_SESSION['city'] = $user['city'];
        $_SESSION['postalcode'] = $user['postalcode'];
        $_SESSION['street'] = $user['street'];
        $_SESSION['housenumber'] = $user['housenumber'];
        $_SESSION['additive'] = $user['additive'];

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

mysqli_close($conn);
?>
