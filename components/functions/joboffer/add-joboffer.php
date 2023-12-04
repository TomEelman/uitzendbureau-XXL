<?php

include("../../session-start.php");

$result = $conn->query("SELECT companyname FROM users");

$currentTimestamp = time(); 
$currentDateTime = date('Y-m-d H:i:s', $currentTimestamp);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $timeofupload = $currentDateTime;
    $userid = $_SESSION["id"];
    $companyname = $_SESSION["companyname"];
    $function = mysqli_real_escape_string($conn, $_POST['function']);
    $time = mysqli_real_escape_string($conn, $_POST['time']);
    $pay = mysqli_real_escape_string($conn, $_POST['pay']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $query = "INSERT INTO joboffer (uploadtime, companyname, function, time, pay, description) VALUES ('$timeofupload', '$companyname', '$function', '$time', '$pay', '$description')";

    if (mysqli_query($conn, $query)) {
        echo '<script>alert("Vacature toegevoegd")</script>';
        header('Location: ../../../paginas/joboffer-page.php');
        exit();
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);