<?php
if(isset($_GET['id'])) {
    $offerid = $_GET['id'];

    $offerDetails = $conn->query("SELECT * FROM joboffer WHERE offerid = '$offerid'");

    if ($offerDetails->num_rows > 0) {
        while ($offerRow = $offerDetails->fetch_assoc()) {
            echo '
            <div class="moreinformation-container my-2">
                <h3>Bedrijfnaam: ' . $offerRow['companyname'] . '</h3>
                <div class="row g-3">
                    <div class="col-md-6">
                        <ul class="list-group list-group-flush my-4">
                            <li class="list-group-item">Functie naam: ' . $offerRow['function'] . '</li>
                            <li class="list-group-item">Tijd besteding: ' . $offerRow['time'] . '</li>
                            <li class="list-group-item">Upload datum: ' . $offerRow['pay'] . ',-</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <label class="col-form-label">Meer informatie:</label>
                        <p class="list-group-item">' . $offerRow['description'] . '</p>
                    </div>
                </div>
            </div>
            ';
        }
    } else {
        header('Location: ../paginas/prikbord-page.php');
    }
} else {
    header('Location: ../paginas/prikbord-page.php');
}
