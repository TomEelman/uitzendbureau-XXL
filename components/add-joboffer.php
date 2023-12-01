<?php

include("session-start.php");

$result = $conn->query("SELECT companyname FROM users");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userid = $_SESSION["id"];
    $companyname = $_SESSION["companyname"];
    $function = mysqli_real_escape_string($conn, $_POST['function']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $pay = mysqli_real_escape_string($conn, $_POST['pay']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $query = "INSERT INTO joboffer (companyname, function, time, pay, description) VALUES ('$companyname', '$function', '$time', '$pay', '$description')";

    if (mysqli_query($conn, $query)) {
        echo '<script>alert("Vacature toegevoegd")</script>';
        header('Location: ../paginas/prikbord-page.php');
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);