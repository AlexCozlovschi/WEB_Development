<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$db="companie_exemplu";

$conn = mysqli_connect($servername, $username, $password, $db);

$sql = "INSERT INTO analiza_angajat
VALUES(
2021,
(SELECT COUNT(*) from angajat where id_funct_exec = 1),
(SELECT COUNT(*) from angajat where id_funct_exec = 2),
(SELECT COUNT(*) from angajat where id_funct_exec = 3),
(SELECT COUNT(id_funct_cond) from angajat where id_funct_cond != 5 ),
(SELECT COUNT(*) from angajat where studii_id = 1),
(SELECT COUNT(*) from angajat where studii_id = 3),
(SELECT COUNT(*) from angajat where studii_id = 2),
(SELECT COUNT(*) from angajat where id_categorie_angajat = 1),
(SELECT COUNT(*) from angajat where id_categorie_angajat = 2),
(SELECT COUNT(*) from angajat where id_categorie_angajat = 3),
(SELECT COUNT(*) from angajat where id_categorie_angajat = 4),
(SELECT COUNT(*) from angajat where id_categorie_angajat = 5 )
    )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}