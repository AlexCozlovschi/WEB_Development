<?php
$id  = $_POST['id_'];

$con = mysqli_connect("localhost","root","root","electronix");

$sql = "Delete FROM products where  prd_id= '$id'";
$con->query($sql);

?>"