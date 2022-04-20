<?php
    $mysqli = new mysqli("localhost","root","","web_dongho");

    // Check connection
    if ($mysqli->connect_errno) {
        echo "KẾT NỐI MySQLi LỖI: " . $mysqli->connect_error;
    exit();
    }
?>
