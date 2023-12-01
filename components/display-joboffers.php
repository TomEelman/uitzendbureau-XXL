<?php

$result = $conn->query("SELECT * FROM joboffer");

    echo '<div class="row g-3 mt-1">';
    
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="col">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Functie : ' . $row['function'] . '</h5>
                <h6 class="card-title">Bedrijf : ' . $row['companyname'] . '</h6>
                <h6 class="card-subtitle mb-2 text-muted">' . $row['pay'] . '€ p/m</h6>
                <h6 class="card-subtitle mb-2 text-muted">' . $row['time'] . '</h6>
                <a href="joboffer-detail-page.php?id=' . $row['offerid'] . '" class="card-link">Meer informatie</a>
            </div>
        </div>
    </div> ';
    }
    echo '</div>';

} else {
    echo '<h1 class="text-center m-3">Er zijn geen vacatures.</h1>';
}
