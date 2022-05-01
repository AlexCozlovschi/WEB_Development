<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Add Employer</title>
	<!--favicon-->
	<link rel="icon" href="../images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="../plugins/input-tags/css/tagsinput.css" rel="stylesheet" />
	<link href="../plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="../plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="../plugins/metismenu/css/metisMenu.min.css " rel="stylesheet" />
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
						<div class="breadcrumb-title pr-3">Forms</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Elements</li>
								</ol>
							</nav>
						</div>

					</div>
					<!--end breadcrumb-->
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Date personale</h4>
							</div>
							<hr/>

							<div class="form-group">
								<input class="form-control" type="text" placeholder="Name" id="name">
							</div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Surname" id="surname">
                            </div>

						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Studii și post </h4>
							</div>
							<hr/>

							<div class="form-group">
								<select class="form-control" id="studii" >
									<option value="" >Studii</option>
                                    <option value="1">Liceu</option>
                                    <option value="2">Superioare</option>
                                    <option value="3">Maistri</option>
								</select>
							</div>
                            <div class="form-group">
                                <select class="form-control", id="tip_ang">
                                    <option value="">Tip angajat</option>
                                    <option value="1">Specialistii</option>
                                    <option value="2">Salariati</option>
                                    <option value="3">Part Time</option>
                                    <option value="4">Temporari</option>
                                    <option value="5">Contractieri</option>
                                </select>
                            </div>
						</div>
					</div>


					<div class="card radius-15">
						<div class="card-body">
							<div class="card-title">
								<h4 class="mb-0">Funcții de conducere</h4>
							</div>
							<hr/>
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="func_cond_?">
								<label class="custom-control-label" for="func_cond_?">Deține funcție de conducere</label>
							</div>
							<hr>
                            <div class="form-group">
                                <select class="form-control" id="func_cond">
                                    <option value="null">Funcția</option>
                                    <option value="1">Director General</option>
                                    <option value="2">Director Adjunct</option>
                                    <option value="3">Director Economic</option>
                                    <option value="4">Inginer Sef</option>
                                </select>
                            </div>

						</div>
					</div>
                    <div class="card radius-15">
                        <div class="card-body">
                            <div class="card-title">
                                <h4 class="mb-0">Funcții de execuție</h4>
                            </div>
                            <hr/>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="func_ex_?">
                                <label class="custom-control-label" for="func_ex_?">Funcția de executie</label>
                            </div>
                            <hr>
                            <div class="form-group">
                                <select class="form-control" id="func_ex">
                                    <option value="null">Funcția</option>
                                    <option value="1">Muncitori</option>
                                    <option value="2">Pesronal operativ</option>
                                    <option value="3">Paza</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <button type="button" class="btn btn-light-success m-1 px-5 radius-30" onclick="add_e()">Success</button>
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
	<script src="../plugins/input-tags/js/tagsinput.js"></script>
	<script src="../plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="../plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!-- App JS -->
	<script src="../js/app.js"></script>
    <script src="../js/add_employer.js" ></script>


</body>

</html>