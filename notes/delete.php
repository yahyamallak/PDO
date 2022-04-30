<?php
session_start();
require_once './database/constants.php';
require_once './database/Database.php';
$database = new Database();



$data['id'] = $_GET['id'];

$database->delete($data);