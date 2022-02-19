<?php defined('BASEPATH') OR exit('no direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link
	rel="shortcut icon"
	href="assets/images/favicon.svg"
	type="image/x-icon"
	/>

	<?php if (isset($title)): ?>
		<title><?php echo $title.' - '.$webconfig['title']; ?></title>
	<?php else: ?>
		<title><?php echo $webconfig['title']; ?></title>
	<?php endif ?>

	<!-- ========== All CSS files linkup ========= -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/LineIcons.css" />
	<link rel="stylesheet" href="assets/css/materialdesignicons.min.css" />
	<link rel="stylesheet" href="assets/css/fullcalendar.css" />
	<link rel="stylesheet" href="assets/css/fullcalendar.css" />
	<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>

	<?php include "nav.php"; ?>

	<!-- ======== main-wrapper start =========== -->
	<main class="main-wrapper">

		<!-- ========== header start ========== -->
		<header class="header">
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-md-8 col-12">
						<div class="header-left d-flex align-items-center">
							<div class="menu-toggle-btn mr-20">
								<button id="menu-toggle" class="main-btn primary-btn btn-hover">
									<i class="lni lni-chevron-left me-2"></i> Menu
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
      <!-- ========== header end ========== -->