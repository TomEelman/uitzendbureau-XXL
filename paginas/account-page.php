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
        <?php include("../components/session-start.php") ?>
        <?php include("../includes/navbar.php") ?>
    </header>
    <main>
        <?php if (isset($_SESSION['email'])) { ?>
            <?php if (isset($_SESSION['companyname'])) { ?>
                <h1 class="text-align">Welkom  <?php echo $_SESSION['companyname']; ?></h1>

                <div class="container">
                    <p>Voornaam : <?php echo $_SESSION['firstname']; ?></p>
                    <p>Achternaam : <?php echo $_SESSION['lastname']; ?></p>
                    <p>Email : <?php echo $_SESSION['email']; ?></p>
                    <p>Telefoonnummer : <?php echo $_SESSION['phonenumber']; ?></p>
                    <p>Land : <?php echo $_SESSION['country']; ?></p>
                    <p>Stad / Dorp : <?php echo $_SESSION['city']; ?></p>
                    <p>Postcode : <?php echo $_SESSION['postalcode']; ?></p>
                    <p>Straat : <?php echo $_SESSION['street'];
                                    $_SESSION['housenumber']; ?></p>
                </div>
            <?php } else { ?>
                <div class="container">

                    <p>Voornaam : <?php echo $_SESSION['firstname']; ?></p>
                    <p>Achternaam : <?php echo $_SESSION['lastname']; ?></p>
                    <p>Email : <?php echo $_SESSION['email']; ?></p>
                    <p>Telefoonnummer : <?php echo $_SESSION['phonenumber']; ?></p>
                    <p>Land : <?php echo $_SESSION['country']; ?></p>
                    <p>Stad / Dorp : <?php echo $_SESSION['city']; ?></p>
                    <p>Postcode : <?php echo $_SESSION['postalcode']; ?></p>
                    <p>Straat : <?php echo $_SESSION['street'];
                                    $_SESSION['housenumber']; ?></p>
                </div>

            <?php } ?>
        <?php } else {
            header("location:../index.php");
        } ?>

    </main>
    <footer>
        <?php include("../includes/footer.php") ?>
    </footer>
</body>

</html>