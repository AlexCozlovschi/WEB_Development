<?php

$servername = "localhost:3306";
$username = "root";
$password = "";
$db="companie_exemplu";


$id = $_POST['id_'];
$ns = $_POST['ns'];
$st = $_POST['st'];
$tip = $_POST['tip_'];
$functiac = $_POST['functia_c_'];
$functiae = $_POST['functia_e_'];

$conn = mysqli_connect($servername, $username, $password, $db);

echo $ns ;
echo $st ;
echo $tip ;
echo $functiac ;
echo $functiae ;

$sql = "Update `angajat`
        set nume_prenume = '$ns',
         id_categorie_angajat = '$tip',
        studii_id = '$st',
        id_funct_cond = '$functiac',
        id_funct_exec = '$functiae'
        where id_ang = $id;";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "UPDATE analiza_angajat
set mucitori =(SELECT COUNT(*) from angajat where id_funct_exec = 1),
personal_operativ = (SELECT COUNT(*) from angajat where id_funct_exec = 2),
paza = (SELECT COUNT(*) from angajat where id_funct_exec = 3),
functie_conducere= (SELECT COUNT(id_funct_cond) from angajat where id_funct_cond != 5 ),
studii_liceu_postl =(SELECT COUNT(*) from angajat where studii_id = 1),
superioare = (SELECT COUNT(*) from angajat where studii_id = 3),
maistri=(SELECT COUNT(*) from angajat where studii_id = 2),
specialisti= (SELECT COUNT(*) from angajat where id_categorie_angajat = 1),
salariati =(SELECT COUNT(*) from angajat where id_categorie_angajat = 2),
partt =(SELECT COUNT(*) from angajat where id_categorie_angajat = 3),
temorari=(SELECT COUNT(*) from angajat where id_categorie_angajat = 4),
contract =(SELECT COUNT(*) from angajat where id_categorie_angajat = 5 )
WHERE id_aa = 2021;";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
