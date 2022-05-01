<?php
$id_pr  = $_POST['id_'];

$con = mysqli_connect("localhost","root","root","electronix");

$sql = "Delete FROM products where  prd_id= '$id_pr'";
$con->query($sql);


?>"