<?php 
session_start();

$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];
$_SESSION["rol"] ="admin";

header("Location: index.php");