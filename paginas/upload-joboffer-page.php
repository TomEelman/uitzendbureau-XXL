<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacature</title>
</head>

<body>
    <header>
        <?php include("../components/session-start.php") ?>
        <?php include("../includes/navbar.php") ?>
    </header>
    <main>
        <div class="container">
            <h1>Vacature toevoegen</h1>

            <form id="jobForm">
                <label for="companyName">Bedrijfnaam :</label>
                <input type="text" id="companyName" name="companyName" required>

                <label for="companyName">Functie naam :</label>
                <input type="text" id="companyName" name="companyName" required>

                <label for="companyName">Loon :</label>
                <input type="text" id="companyName" name="companyName" required>

                <label for="description">Description:</label>
                <textarea id="description" name="description" required></textarea>

                <button type="button">Post Job</button>
            </form>
            
    </main>
    <footer>
        <?php include("../includes/footer.php") ?>
    </footer>
</body>

</html>