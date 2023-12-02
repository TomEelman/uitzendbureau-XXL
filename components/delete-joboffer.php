<?php
include("session-start.php");

if (isset($_GET['id'])) {
    $offerid = $_GET['id'];

    $deleteQuery = "DELETE FROM joboffer WHERE offerid = '$offerid'";
    
    if ($conn->query($deleteQuery) === TRUE) {
        header('Location: ../paginas/prikbord-page.php');
    } 
}
