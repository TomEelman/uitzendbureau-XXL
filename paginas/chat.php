<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../jscript/chats.js"></script>
    <title>Document</title>
</head>
<header>
    <?php include("../components/session-start.php") ?>
    <?php include("../includes/navbar.php") ?>
    <?php include("../components/get-chat.php") ?>
    <?php include("../components/set-active-chat.php") ?>
</header>
<body>
    <div class="chatbox" style="margin:125px 75px 25px;">
        <p><?php echo $_SESSION['convoid']; ?><p>
    </div>
</body>
</html>