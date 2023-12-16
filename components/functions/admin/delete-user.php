<?php
include("../../session-start.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $deleteQuery = "DELETE FROM users WHERE id = '$id'";
    
    if ($conn->query($deleteQuery) === TRUE) {
        header('Location: ../../../paginas/admin-page.php');
    } 
}
