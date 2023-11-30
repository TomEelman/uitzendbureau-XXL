<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../jscript/jquery-3.7.1.min.js"></script>
    <script src="../jscript/chats.js"></script>
    <title>Document</title>
</head>
<header>
    <?php include("../components/session-start.php") ?>
    <?php include("../includes/navbar.php") ?>
    <?php include("../components/get-chat-list.php") ?>
</header>
<body>
    <div class="chat-list" style="margin:125px 75px 25px;">
        <?php foreach ($resultset as $convo) { ?>
            <a onclick="setChat(<?php echo $convo[0] ?>)" href="#">
                <div class="chat-item" style="padding:5px 30px;border-style:solid;border-radius:16px;">
                    <p><?php echo $convo[0] ?></p>
                </div>
            </a>
        <?php } ?>  
    </div>
</body>
</html>