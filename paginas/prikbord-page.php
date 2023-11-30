<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prikbord</title>
</head>

<body>
    <header>
        <?php include("../components/session-start.php") ?>
        <?php include("../includes/navbar.php") ?>
    </header>
    <main>
        <?php if (isset($_SESSION['companyname'])) { ?>
            <a class="button-addJobOffer bg-primary" href="../paginas/upload-joboffer-page.php">Vacaturen uploaden</a>
        <?php
            include("../components/display-joboffers.php");
        } else {
            include("../components/display-joboffers.php");
        }
        ?>
    </main>
    <footer>
        <?php include("../includes/footer.php") ?>
    </footer>
</body>

</html>