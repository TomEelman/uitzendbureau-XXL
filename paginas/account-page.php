<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account details</title>
</head>

<body>
    <header>
        <?php include("../components/session-start.php") ?>
        <?php include("../includes/navbar.php") ?>
    </header>
    <main class="d-flex justify-content-center align-items-center">

        <?php if (isset($_SESSION['email'])) {
            if (isset($_SESSION['companyname'])) { ?>
                <div class="custom-container my-2">
                    <h3 class="text-center my-3">Bedrijfnaam : <?php echo $_SESSION['companyname']; ?></h3>
            <?php }
        } else {
            header("location:../index.php");
        } ?>

            <div class="row g-3 container">
                <div class="col">
                    <ul class="list-group list-group-flush my-4">
                        <li class="list-group-item">Voornaam : <?php echo $_SESSION['firstname']; ?></li>
                        <li class="list-group-item">Achternaam : <?php echo $_SESSION['lastname']; ?></li>
                        <li class="list-group-item">Email : <?php echo $_SESSION['email']; ?></li>
                        <li class="list-group-item">Telefoonnummer : <?php echo $_SESSION['phonenumber']; ?></li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="list-group list-group-flush my-4">
                        <li class="list-group-item">Land : <?php echo $_SESSION['country']; ?></li>
                        <li class="list-group-item">Stad / Dorp : <?php echo $_SESSION['city']; ?></li>
                        <li class="list-group-item">Postcode : <?php echo $_SESSION['postalcode']; ?></li>
                        <li class="list-group-item">Straat : <?php echo $_SESSION['street'];
                                                                $_SESSION['housenumber'];
                                                                $_SESSION['additive']; ?></li>
                    </ul>
                </div>
            </div>
                </div>
    </main>
    <footer>
        <?php include("../includes/footer.php") ?>
    </footer>
</body>

</html>