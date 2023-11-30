<?php 
$conn = mysqli_connect("localhost", "root", "", "uitzendbureau-xxl");
    
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$userid = $_SESSION['userid'];

$query = "SELECT convoid FROM conversations WHERE useridapplicant = ? OR useridcompany = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 'ii', $userid, $userid);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$resultset = array();
while ($row = mysqli_fetch_array($result)){
    $resultset[] = $row;
}
?>