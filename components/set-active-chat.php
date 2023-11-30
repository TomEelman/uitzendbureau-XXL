<?php
if(isset($_POST['convoid'])){
    echo "it is set";
} else {
    echo 'it is not set';
}
$_SESSION['convoid'] = $_POST['convoid'];
?>