<?php
$connection = new mysqli('localhost', 'root', '', 'intern_2025');

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
