<?php
$id  = $_GET['id'];

$servername = "localhost:3306";
$username = "root";
$password = "";
$db="companie_exemplu";

$conn = mysqli_connect($servername, $username, $password, $db);

$sql = "SELECT * FROM `angajat` where id_ang = '$id'";

$result = $conn->query($sql);

$new_fun = "";


if ($result->num_rows > 0) {
// output data of each row
    while ($row = $result->fetch_assoc()) {
        $nume = $row["nume_prenume"];
        $studii = $row["studii_id"];
        $tip = $row["id_categorie_angajat"];
        $cond = $row["id_funct_cond"];
        $ex = $row["id_funct_exec"];
    }
}
?>



<!DOCTYPE html>
<html lang="en">



<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Syndash - Bootstrap4 Admin Template</title>
	<!--favicon-->
	<link rel="icon" href="../images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="../plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="../plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="../plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="../css/pace.min.css" rel="stylesheet" />
	<script src="../js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="../css/icons.css" />
	<!-- App CSS -->
	<link rel="stylesheet" href="../css/app.css" />
	<link rel="stylesheet" href="../css/dark-header.css" />
	<link rel="stylesheet" href="../css/dark-theme.css" />
</head>

<body>
	<!-- wrapper -->
	<div class="wrapper">
		<!--header-->
		<!--header-->
		<header>
			<?php
            include "header.php"
        ?>

		</header>
		<!--end header-->
		<!--navigation-->
		<div class="nav-container">

			<?php

            include "nav.php"
    ?>
		</div>
		<!--end navigation-->
		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">User Profile</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">User Profile</li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">
							<div class="btn-group">
								<button type="button" class="btn btn-primary">Settings</button>
								<button type="button" class="btn btn-primary bg-split-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">	<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left">	<a class="dropdown-item" href="javascript:;">Action</a>
									<a class="dropdown-item" href="javascript:;">Another action</a>
									<a class="dropdown-item" href="javascript:;">Something else here</a>
									<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
								</div>
							</div>
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="user-profile-page">
						<div class="card radius-15">
							<div class="card-body">
										<div class="card shadow-none border mb-0 radius-15">
											<div class="card-body">
												<div class="form-body">
													<div class="row">
														<div class="col-12 col-lg-5 border-right">
															<div class="form-group">
                                                                <label>Full Name</label>
                                                                <input class="form-control" type="text" value="<?php echo htmlspecialchars
                                                                ($nume)?>" id="name">
															</div>
															<div class="form-group  ">
																<label>Studii</label>
                                                                <select class="form-control" id="studii" >
                                                                    <option value="null" >Studii</option>
                                                                    <option value="1" <?php if($studii == 1) echo "selected"; ?>>Liceu</option>
                                                                    <option value="2" <?php if($studii == 2) echo "selected"; ?>> Superioare</option>
                                                                    <option value="3" <?php if($studii == 3) echo "selected"; ?>>Maistri</option>
                                                                </select>
															</div>

															<div class="form-group">
																<label>Tip angajat</label>
                                                                <select class="form-control", id="tip_ang">
                                                                    <option value="null">Tip angajat</option>
                                                                    <option value="1" <?php if($tip == 1) echo "selected"; ?>>Specialistii</option>
                                                                    <option value="2" <?php if($tip == 2) echo "selected"; ?>>Salariati</option>
                                                                    <option value="3" <?php if($tip == 3) echo "selected"; ?>>Part Time</option>
                                                                    <option value="4" <?php if($tip == 4) echo "selected"; ?>>Temporari</option>
                                                                    <option value="5" <?php if($tip == 5) echo "selected"; ?>>Contractieri</option>
                                                                </select>
															</div>

														    </div>
														    <div class="col-12 col-lg-7">


																<div class="form-group ">
																	<label>Funcția de conducere</label>
                                                                    <select class="form-control" id="func_cond">
                                                                        <option value="5">Nu deține</option>
                                                                        <option value="1" <?php if($cond == 1) echo "selected"; ?> >Director General</option>
                                                                        <option value="2" <?php if($cond == 2) echo "selected"; ?>>Director Adjunct</option>
                                                                        <option value="3" <?php if($cond == 3) echo "selected"; ?>>Director Economic</option>
                                                                        <option value="4" <?php if($cond == 4) echo "selected"; ?>>Inginer Sef</option>
                                                                    </select>
																</div>
																<div class="form-group ">
																	<label>Funcția de execuție</label>
                                                                    <select class="form-control" id="func_ex">
                                                                        <option value="4">Nu deține</option>
                                                                        <option value="1" <?php if($ex == 1) echo "selected"; ?> >Muncitori</option>
                                                                        <option value="2" <?php if($ex == 2) echo "selected"; ?>>Pesronal operativ</option>
                                                                        <option value="3" <?php if($ex == 3) echo "selected"; ?>>Paza</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <a href="employers.php?categ=studii" ><button type="button" class="btn btn-light-success m-1 px-5 radius-30 " id="b1" onclick="update_user(<?php echo htmlspecialchars
                                                                    ($id)?>)">Change</button></a>


                                                                   <a href="employers.php?categ=studii"> <button id="b2"  class="btn btn-danger m-1 px-5 radius-30" onclick="delete_user(<?php echo htmlspecialchars
                                                                       ($id)?>)"

                                                                       >Delete</button></a>
                                                                </div>
                                                                </div>
                                                            </div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--end page-content-wrapper-->
		</div>
		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javascript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<!--footer -->
		<div class="footer">

			</p>
		</div>
		<!-- end footer -->
	</div>
	<!-- end wrapper -->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
			<hr/>
			<h6 class="mb-0">Theme Styles</h6>
			<hr/>
			<div class="d-flex align-items-center justify-content-between">
				<div class="custom-control custom-radio">
					<input type="radio" id="darkmode" name="customRadio" class="custom-control-input">
					<label class="custom-control-label" for="darkmode">Dark Mode</label>
				</div>
				<div class="custom-control custom-radio">
					<input type="radio" id="lightmode" name="customRadio" checked class="custom-control-input">
					<label class="custom-control-label" for="lightmode">Light Mode</label>
				</div>
			</div>
			<hr/>
			<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="DarkHeader">
				<label class="custom-control-label" for="DarkHeader">Dark Header</label>
			</div>
			<hr/>
			<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="DarkMenu">
				<label class="custom-control-label" for="DarkMenu">Dark Menu</label>
			</div>
			<hr/>
			<div class="custom-control custom-switch">
				<input type="checkbox" class="custom-control-input" id="ColorLessIcons">
				<label class="custom-control-label" for="ColorLessIcons">Color Less Icons</label>
			</div>
		</div>
	</div>
	<!--end switcher-->
	<!-- JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="../js/jquery.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<!--plugins-->
	<script src="../plugins/simplebar/js/simplebar.min.js"></script>
	<script src="../plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="../plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!-- App JS -->
	<script src="../js/app.js"></script>
    <script src="../js/update_user.js"></script>
</body>

</html>