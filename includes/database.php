<?php

$db = new mysqli(
    $_ENV['DB_HOST'], 
    $_ENV['DB_USER'], 
    $_ENV['DB_PASS'], 
    $_ENV['DB_BD']);



if (!$db) {
    echo "Error, canot connected to the database";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
