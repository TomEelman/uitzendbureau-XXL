<?php
// Assuming you have a database connection in $conn

$query = "SELECT * FROM joboffer";
$result = mysqli_query($conn, $query);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="jobOffer">';
        echo '<h3>' . $row['companyname'] . '</h3>';
        echo '<p>' . $row['description'] . '</p>';
        echo '</div>';
    }
} else {
    echo 'Error: ' . mysqli_error($conn);
}

mysqli_close($conn);
?>
