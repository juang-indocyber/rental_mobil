<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?= APP_NAME ?> - <?= $judul ?></title>
	<link href="<?= base_url('sb-admin-2/') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="<?= base_url('sb-admin-2/') ?>/css/sb-admin-2.min.css" rel="stylesheet">
	<link rel="shortcut icon" href="uploads/caricon.png">
</head>
<body id="page-top">
	<div id="wrapper">
		<?php partial('navbar', $aktif) ?>
		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
			<?php partial('topbar') ?>
			<div class="container-fluid">
				<h1 class="h3 mb-4 text-gray-800">Team Developer</h1>
				<hr>
				<div class="row">
					<div class="col-xl-3 col-md-6 mb-4">
						<div class="card" style="width: 15rem;">
							<img class="card-img-top" src="uploads/aldo-alfiyan-1659447262.png" alt="Card image cap">
							<div class="card-body">
								<h3>Aldo Alfiyan V</h3>
                                <p>202143579015</p>
								<p class="card-text">Backend Developer & Deployment</p>
							</div>
						</div>
					</div>
	
					<div class="col-xl-3 col-md-6 mb-4">
						<div class="card" style="width: 15rem;">
							<img class="card-img-top" src="uploads/banggaherlambang.png" alt="Card image cap">
							<div class="card-body">
								<h3>Bangga Herlambang</h3>
                                <p>202143570026</p>
								<p class="card-text">Backend Developer</p>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-md-6 mb-4">
						<div class="card" style="width: 15rem;">
							<img class="card-img-top" src="uploads/sanggaripanda.png" alt="Card image cap">
							<div class="card-body">
								<h3>Sangga Ripanda</h3>
                                <p>201943579039</p>
								<p class="card-text">Frontend Developer</p>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-md-6 mb-4">
						<div class="card" style="width: 15rem;">
							<img class="card-img-top" src="uploads/maulanadanang.png" alt="Card image cap">
							<div class="card-body">
								<h3>Isa Maulana Danang A</h3>
                                <p>202143579021</p>
								<p class="card-text">Frontend Developer</p>
							</div>
						</div>
					</div>

				</div>
			</div>

		</div>
			<?php partial('footer') ?>
		</div>
	</div>

	<a class="scroll-to-top rounded" href="#page-top">
			<i class="fas fa-angle-up"></i>
	</a>
	<script src="<?= base_url('sb-admin-2/') ?>/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('sb-admin-2/') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('sb-admin-2/') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="<?= base_url('sb-admin-2/') ?>/js/sb-admin-2.min.js"></script>
</body>
</html>