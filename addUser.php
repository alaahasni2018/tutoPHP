<?php
require_once('config.inc.php');
session_start();

$name = $_POST['name'] ; 
$email =$_POST['email'];
$password =$_POST ['password'];

$requete = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')"; 
$stmt = $conn->prepare($requete) ; 
$stmt -> execute() ;

$_SESSION['user'] = $name; 

header('location: home.php') ;



?>