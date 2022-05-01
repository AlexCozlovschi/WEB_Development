<?php
$categorie = $_GET["categ"];


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Users</title>
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


		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Contatcs</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Users</li>
								</ol>

							</nav>
						</div>
                        <div class="ml-auto">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary" id="car" ><?php echo htmlspecialchars($categorie)?></button>
                                <button type="button" class="btn btn-primary bg-split-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-expanded="false">	<span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-left" style="">
                                    <a class="dropdown-item" href="employers.php?categ=studii" >Studii</a>
                                    <a class="dropdown-item" href="employers.php?categ=categoria">Categorie</a>
                                    <a class="dropdown-item" href="employers.php?categ=Executie">Executie</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="employers.php?categ=conducere">Conducere</a>
                                </div>
                            </div>
                        </div>


					</div>
					<!--end breadcrumb-->

					<!--end row-->
					<div class="row" id="test">

					</div>
					<!--end row-->
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
    <script src="../js/show_users.js"></script>
    <script src="../js/change_empl.js"></script>
</body>

</html>