<?php

$user = $_POST['user'];
$message = $_POST['message'];
$now = date("H:i");

echo "<br><br><div class=\"arrow_name\">".$user."</div>";
    echo "<div class=\"arrow_box\">".$message."</div>";
echo "<div class=\"send_time\">".$now."</div>";

?>