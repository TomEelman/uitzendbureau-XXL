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
    <main class="d-flex justify-content-center align-items-center">
        <div class="custom-container my-5">
            <h3 class="text-center my-3">Vacature toevoegen</h3>

            <form action="../components/add-joboffer.php" method="POST">
                <div class="row g-3 mt-2">
                    <div class="col">
                        <label for="companyname">Functie naam :</label>
                        <input type="text" class="form-control" name="function" required>
                    </div>
                    <div class="col">
                        <label for="pay">Loon per maand :</label>
                        <input type="text" class="form-control" name="pay" required>
                    </div>
                </div>

                <label for="time" class="col-form-label">Tijd besteding:</label>
                <select class="form-select mb-2" id="time" name="time">
                    <option value="Fulltime">Full-time</option>
                    <option value="Parttime">Part-time</option>
                </select>

                <label for="description">Meer informatie:</label>
                <textarea id="description" class="form-control my-2" name="description" required></textarea>


                <div class="col d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary my-3">Vacature toevoegen</button>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <?php include("../includes/footer.php") ?>
    </footer>
</body>

</html>