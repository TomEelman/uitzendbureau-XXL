<?php

$result = $conn->query("SELECT * FROM joboffer");

$offerid = mysqli_real_escape_string($conn, $_POST["offerid"]);
$companyname = mysqli_real_escape_string($conn, $_POST["companyname"]);
$function = mysqli_real_escape_string($conn, $_POST["function"]);
$pay = mysqli_real_escape_string($conn, $_POST["pay"]);
$description = mysqli_real_escape_string($conn, $_POST["description"]);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        echo '
        <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">' . $user['companyname'] . '</h5>
            <h5 class="card-title">' . $user['function'] . '</h5>
            <h6 class="card-subtitle mb-2 text-muted">' . $user['pay'] . '</h6>
                <p class="card-text">' . $user['description'] . '</p>
                <a href="Componenten/product.php?id=' . $row['offerid'] . '" class="card-link">Meer informatie</a>
        </div>
    </div>
        ';
    }
} else {
    echo '<h1 class="text-center m-3">Er zijn geen vacatures.</h1>';
}
