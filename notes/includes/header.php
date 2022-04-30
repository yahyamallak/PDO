<?php
session_start();
require_once './database/constants.php';
require_once './database/Database.php';
$database = new Database();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Notes</title>
</head>
<body>
    
