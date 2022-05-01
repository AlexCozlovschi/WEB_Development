<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$db="companie_exemplu";

$conn = mysqli_connect($servername, $username, $password,$db);

$sql = "SELECT COUNT(*)  FROM angajat";

$result = $conn->query($sql);
$row = $result->fetch_assoc();

$test = $_GET['car'];
$count = $row["COUNT(*)"];
$descriere = "";

if ($test == "Studii") {
    $sql = "SELECT angajat.id_ang, angajat.nume_prenume, prd_brand.prd_brand FROM `angajat` INNER JOIN prd_brand on angajat.studii_id = prd_brand.id_st";
    $descriere = "prd_brand";
}
elseif ($test =="Categoria"){
    $sql = "SELECT angajat.id_ang, categorie_angajat.prd_cat, angajat.nume_prenume FROM `categorie_angajat` INNER JOIN angajat on angajat.id_categorie_angajat = categorie_angajat.id_ca";
    $descriere = "prd_cat";
}
elseif ($test =="Conducere"){
    $sql = "SELECT angajat.id_ang, angajat.nume_prenume, personal_funct_cond.functia FROM `angajat` INNER JOIN personal_funct_cond on angajat.id_funct_cond = personal_funct_cond.id_pfc  and angajat.id_funct_cond != 5";
    $descriere = "functia";
}
elseif ($test =="Executie"){
    $sql = "SELECT angajat.id_ang, angajat.nume_prenume, funct_execut.functia FROM `angajat` INNER JOIN funct_execut on angajat.id_funct_exec = funct_execut.id_fe and angajat.id_funct_exec !=4";
    $descriere = "functia";
}
else{
    $sql = "SELECT angajat.id_ang, angajat.nume_prenume, prd_brand.prd_brand FROM `angajat` INNER JOIN prd_brand on angajat.studii_id = prd_brand.id_st";
    $descriere = "prd_brand";
}
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $nume = $row["nume_prenume"];
        $criteriu = $row[$descriere];
        $id = $row["id_ang"];


            echo
            <<<EOT
                         <div class="col-lg-4">
							<div class="card radius-15 bg-warning">
								<a href="user-profile.php?id=$id ">
								    <div class="card-body", id="$id">
									    <div class="media align-items-center">
										    <img src="https://www.pngall.com/wp-content/uploads/5/User-Profile-PNG.png" width="80" height="80" class="rounded-circle p-1 border bg-white" alt="" />
                                            <div class="media-body ml-3">
											    <h5 class="mb-0">$nume</h5>
                                                <p class="mb-0">$criteriu</p>
										</div>
									</div>
								</div>
								</a>
							</div>
						</div>
EOT;

    }
}
