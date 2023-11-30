<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style/pages.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <?php include("components/session-start.php") ?>
        <?php include("includes/navbar.php") ?>
    </header>
    <main>
        <?php if (isset($_SESSION['email'])) { ?>
            <?php if (isset($_SESSION['companyname'])) { ?>
                <h1 class="welcome-details">Welkom : <?php echo $_SESSION['companyname']; ?></h1>

                <div class="user-detail-container">
                    <h2>Voornaam : <?php echo $_SESSION['firstname']; ?></h2>
                    <h2>Achternaam : <?php echo $_SESSION['lastname']; ?></h2>
                    <h2>Email : <?php echo $_SESSION['email']; ?></h2>
                    <h2>Telefoonnummer : <?php echo $_SESSION['phonenumber']; ?></h2>
                    <h2>Land : <?php echo $_SESSION['country']; ?></h2>
                    <h2>Stad / Dorp : <?php echo $_SESSION['city']; ?></h2>
                    <h2>Postcode : <?php echo $_SESSION['postalcode']; ?></h2>
                    <h2>Straat : <?php echo $_SESSION['street'];
                                    $_SESSION['housenumber']; ?></h2>

                </div>

            <?php } else { ?>

                <div class="user-detail-container">

                    <h2>Voornaam : <?php echo $_SESSION['firstname']; ?></h2>
                    <h2>Achternaam : <?php echo $_SESSION['lastname']; ?></h2>
                    <h2>Email : <?php echo $_SESSION['email']; ?></h2>
                    <h2>Telefoonnummer : <?php echo $_SESSION['phonenumber']; ?></h2>
                    <h2>Land : <?php echo $_SESSION['country']; ?></h2>
                    <h2>Stad / Dorp : <?php echo $_SESSION['city']; ?></h2>
                    <h2>Postcode : <?php echo $_SESSION['postalcode']; ?></h2>
                    <h2>Straat : <?php echo $_SESSION['street'];
                                    $_SESSION['housenumber']; ?></h2>
                </div>


            <?php } ?>
        <?php } else {
            header("location:../index.php");
        } ?>

    </main>
    <footer>
        <?php include("includes/footer.php") ?>
    </footer>
</body>

</html>