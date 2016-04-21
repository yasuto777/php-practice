<?php
$host = "localhost";
$dbuser = "chatadmin";
$dbpass = "talk";
$db = "chat";

$mysqli = mysqli_connect($host,$dbuser,$dbpass,$db);

//Check connectin
if(mysqli_connect_errno()){
	printf("Connect failed: %s\n",mysqli_connect_errno());
	exit();
}

if($result = mysqli_query($mysqli,"SELECT * FROM table1")){

	//Get associative array
	which($row = mysqli_fetch_assoc($result)){
		printf();
	}
	//Free $result
	mysqli_free_result($result);
}
//Close connection
mysqli_close($mysqli);
?>
