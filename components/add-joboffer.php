<?php
// Assuming you have a database connection in $conn

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $companyName = mysqli_real_escape_string($conn, $_POST['companyName']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    $query = "INSERT INTO joboffer (companyname, description) VALUES ('$companyName', '$description')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Display updated job offers
        include 'display_joboffers.php';
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
