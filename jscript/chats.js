function setChat(chatID){
    $.ajax({
        url:"../components/set-active-chat.php",
        type:'post',
        data: {'convoid' : chatID},
    })
    document.location.href="../paginas/chat.php"
    return false;
}