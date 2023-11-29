<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style/pages.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>
    <?php include("../components/session-start.php") ?>
    <?php include("../includes/navbar.php") ?>
</header>

<body>
    <form action="../components/procces-logout.php" method="post">
        <input style="margin-top: 10%;" class="input submit-button" type="submit" name="logout" onclick="logout()" value="Logout">
    </form>
</body>

</html>