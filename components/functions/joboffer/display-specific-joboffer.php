<?php
if (isset($_GET['id'])) {
    $offerid = $_GET['id'];

    $offerDetails = $conn->query("SELECT * FROM joboffer WHERE offerid = '$offerid'");

    if ($offerDetails->num_rows > 0) {
        while ($offerRow = $offerDetails->fetch_assoc()) {
            echo '
            <div class="moreinformation-container my-3">
            <h2 class="mb-3">Bedrijfsnaam: ' . $offerRow['companyname'] . '</h2>
            <p class="lead my-3">Upload datum: ' . $offerRow['uploadtime'] . '</p>

            <div class="mb-3">
                <label class="fw-bold">Baan Functie:</label>
                <p>' . $offerRow['function'] . '</p>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Tijd bestedingen:</label>
                <p>' . $offerRow['time'] . '</p>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Loon:</label>
                <p>' . $offerRow['pay'] . '€ p/m</p>
            </div>
            <div class="mb-3">
                <label class="fw-bold">Meer informatie:</label>
                <p>' . $offerRow['description'] . '</p>
            </div>';
        }
    } else {
        header('Location: ../paginas/prikbord-page.php');
    }
} else {
    header('Location: ../paginas/prikbord-page.php');
}
