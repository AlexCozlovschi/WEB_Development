<?php
$id  = $_POST['id_'];
$servername = "localhost:3306";
$username = "root";
$password = "";
$db="companie_exemplu";

$conn = mysqli_connect($servername, $username, $password, $db);


$sql = "Delete FROM `angajat` where id_ang = '$id'";
$conn->query($sql);

?>"