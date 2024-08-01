<?php
session_start();

$con = mysqli_connect('localhost', 'root', '', '18--db');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
