<?php

$result = $conn->query("SELECT * FROM joboffer");

if ($result && $result->num_rows > 0) {
    echo '
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Bedrijfsnaam</th>
                        <th scope="col">Functie</th>
                        <th scope="col">Tijd besteding</th>
                        <th scope="col">Loon</th>
                        <th scope="col">Tijd van plaatsen</th>
                        <th scope="col">Meer informatie</th>
                    </tr>
                </thead>
                <tbody>';

    while ($row = $result->fetch_assoc()) {
        echo '
                <tr>
                    <th scope="row">' . $row['companyname'] . '</th>
                    <td>' . $row['function'] . '</td>
                    <td>' . $row['time'] . '</td>
                    <td>' . $row['pay'] . '€ p/m</td>
                    <td>' . $row['uploadtime'] . '</td>
                    <td><a href="joboffer-detail-page.php?id=' . $row['offerid'] . '" class="card-link">Details</a></td>';
        echo '
                </tr>';
    }
    echo '
                </tbody>
            </table>
        </div>';
} else {
    echo '<h1 class="text-center m-3">Er zijn geen vacatures.</h1>';
}
