<?php
$servername="localhost";
$username="root";
$password="";
$dbname="zaatour";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    if ($conn){
    	;
    } else {
    	echo 'erreur base de données' ;
    }
?>