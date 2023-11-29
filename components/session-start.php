<?php
if (session_status()) {
    session_start();
}
$conn = mysqli_connect("localhost", "root", "", "marktplaats");

if ($conn === false) {
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
?>