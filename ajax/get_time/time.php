<?php
date_default_timezone_set('Asia/Tokyo');
    $timestamp = $_GET['val'];
//jsのタイムスタンプがミリ秒なので、無理くり合わせる
    $timestamp = floor($timestamp/1000);
//echo $_GET['val'];
    echo "<br>".date("Y/m/d H:i:s(D)",$timestamp);
    /*
    echo "<br>JQuery timestamp:".$timestamp."<br>";
    echo "PHP timestamp:".time();
    */
?>