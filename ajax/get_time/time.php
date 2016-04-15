<?php
date_default_timezone_set('Asia/Tokyo');
    $timestamp = $_GET['val'];
//echo $_GET['val'];
    echo date("Y/m/d H:i:s(D)",$timestamp);
    echo "<br>".$timestamp;
?>