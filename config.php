<?php
session_start();
$dbHost = 'localhost';
$dbName = 'tutorials';
$dbUsername = 'root';
$dbPassword = '';
$dbc= mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName); 
?>