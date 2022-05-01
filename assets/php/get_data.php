<?php

$servername = "localhost:3306";
$username = "root";
$password = "";
$db="companie_exemplu";

$conn = mysqli_connect($servername, $username, $password, $db);

$sql = "SELECT * FROM `analiza_angajat`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
    while ($row = $result->fetch_assoc()) {

         $Mydata = array( "mucitori" => $row["mucitori"],
        "personal_operativ" => $row["personal_operativ"],
        "paza" => $row["paza"],
        "functie_conducere" => $row["functie_conducere"],
        "studii_liceu_postl" => $row["studii_liceu_postl"],
        "maistri" => $row["maistri"],
        "superioare" => $row["superioare"],
        "specialisti" => $row["specialisti"],
        "salariati" => $row["salariati"],
        "partt" => $row["partt"],
        "temorari" => $row["temorari"],
        "contract" => $row["contract"],
    );

    }
    echo json_encode($Mydata);
}