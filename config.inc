<?php
$server = "localhost";
$db = "phpmyadmin";
$user = "root";
$pw = "Passw0rd!";

//Ã¼hendame andmebaasiga
$conn = mysqli_connect($server,$user,$pw,$db);

//Ã¼henduse kontrollimine
if(!$conn){
    die("Andmebaasiga on mingi jama!");
}

?>
