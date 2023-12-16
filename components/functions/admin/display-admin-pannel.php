<?php
$resultUser = $conn->query("SELECT * FROM users");
$resultJoboffer = $conn->query("SELECT * FROM joboffer");

// diplay userList
if ($resultUser && $resultJoboffer && $resultUser->num_rows > 0 && $resultJoboffer->num_rows > 0) {
    echo '
        <div class="container mx-4">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Email</th>
                        <th scope="col">Bedrijfnaam</th>
                        <th scope="col">Naam</th>
                        <th scope="col">Telefoonnummer</th>
                        <th scope="col">Adres</th>
                        <th scope="col">Verwijderen</th>
                    </tr>
                </thead>
                <tbody>';

    while ($userRow = $resultUser->fetch_assoc()) {
        echo '
            <tr>
                <td>' . $userRow['email'] . '</td>
                <td>' . $userRow['companyname'] . '</td>
                <td>' . $userRow['firstname'] . ' ' . $userRow['lastname'] . '</td>
                <td>' . $userRow['phonenumber'] . '</td>
                <td>' . $userRow['country'] . ', ' . $userRow['city'] . ', ' . $userRow['street'] . ', ' . $userRow['postalcode'] . '</td>';
        if (isset($_SESSION['email']) && $_SESSION['role'] === 'admin') {
            echo '<td><a class="link-danger" href="../components/functions/admin/delete-user.php?id=' . $userRow['id'] . '">Verwijder</a></td>';
        }

        echo '
            </tr>';
    }

    echo '
        </tbody>
    </table>
</div>';
}

// diplay joboffers
if ($resultJoboffer && $resultJoboffer->num_rows > 0) {
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
                        <th scope="col">Meer informatie</th>';

    if (isset($_SESSION['email']) && $_SESSION['role'] === 'admin') {
        echo '<th scope="col">Verwijderen</th>';
    }
    echo '
                    </tr>
                </thead>
                <tbody>';

    while ($jobRow = $resultJoboffer->fetch_assoc()) {
        echo '
            <tr>
                <td>' . $jobRow['companyname'] . '</td>
                <td>' . $jobRow['function'] . '</td>
                <td>' . $jobRow['time'] . '</td>
                <td>' . $jobRow['pay'] . '€ p/m</td>
                <td>' . $jobRow['uploadtime'] . '</td>
                <td><a href="joboffer-detail-page.php?id=' . $jobRow['offerid'] . '" class="card-link">Details</a></td>';

        if (isset($_SESSION['email']) && $_SESSION['role'] === 'admin') {
            echo '<td><a class="link-danger" href="../components/functions/admin/delete-joboffer.php?id=' . $jobRow['offerid'] . '">Verwijder</a></td>';
        }

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
