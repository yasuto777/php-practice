<?php

date_default_timezone_set('Asia/Tokyo');

/*####### MySQL #########*/
$host = "localhost";
$dbuser = "chatadmin";
$dbpass = "talk";
$db = "chat";
// Connect to MySQL
$mysqli = mysqli_connect($host,$dbuser,$dbpass,$db);

// Check connection<
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}

$user = $_POST['user'];
$message = $_POST['message'];
$now = date("Y-m-d H:i:s");

//Send query to MySQL
if(mysqli_query($mysqli,"INSERT INTO table1 (user,message) VALUES('$user','$message')") === TRUE){

echo "<br><br><div class=\"arrow_name\">".$user."</div>";
    echo "<div class=\"arrow_box\">".$message."</div>";
echo "<div class=\"send_time\">".$now."</div>";

//Free $result
//mysql_free_result($result);
}
//Close connecton
mysqli_close($mysqli);

?>
