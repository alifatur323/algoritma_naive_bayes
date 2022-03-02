<?php include 'class.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trainit-Algoritma</title>
	<link rel="stylesheet" href="../assets/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/custom_pengunjung.css">
	<link rel="stylesheet" href="../assets/font-awesome-4.7.0/css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="../assets/css/css_asri.css">
</head>
<body>
	<?php $aktif="perhitungan"; ?>
	<nav class="navbar navbar-semitransparan navbar-fixed-top">
		<?php include 'navbar.php'; ?>
	</nav>

	<div class="mt-150">
		<div class="container">
			<!-- <h2 class="fs-40">Studi Kasus Fuzzy</h2> -->
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-3">
					<ul class="nav " role="tablist">
						<li role="presentation" class="active"><a href="#tablist-1" aria-controls="tablist-1" role="tab" data-toggle="tab" class="list-group-item"><i class="fa fa-chevron-circle-down"></i> Menu Utama</a></li>
						<br>
						<li role="presentation"><a href="#tablist-2" aria-controls="tablist-2" role="tab" data-toggle="tab" class="list-group-item"><i class="fa fa-chevron-circle-down"></i> Gejala</a></li>
						<br>
						<li role="presentation"><a href="#tablist-3" aria-controls="tablist-3" role="tab" data-toggle="tab" class="list-group-item"><i class="fa fa-chevron-circle-down"></i> Penyakit</a></li>
						<br>
						<li role="presentation"><a href="#tablist-4" aria-controls="tablist-4" role="tab" data-toggle="tab" class="list-group-item"><i class="fa fa-chevron-circle-down"></i> Gejala Penyakit</a></li>
						<br>
						<li role="presentation"><a href="#tablist-5" aria-controls="tablist-5" role="tab" data-toggle="tab" class="list-group-item"><i class="fa fa-chevron-circle-down"></i> Perhitungan Probabilitas</a></li>
						<br>
						<li role="presentation"><a href="#tablist-6" aria-controls="tablist-6" role="tab" data-toggle="tab" class="list-group-item"><i class="fa fa-chevron-circle-down"></i> Perangkingan</a></li>
					</ul>
				</div>

				<div class="col-xs-12 col-sm-8 col-md-9">
					<!-- <h3 class="fs-30">Perhitungan Manual Fuzzy</h3> -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="tablist-1">
							<h3 class="fs-30">Perhitungan Teorema Bayes</h3>
							
							<hr>
							<p class="text-justify">
								Berikut adalah penerapan dari langkah-langkah perhitungan metode bayes. Untuk melihatnya, silahkan klik menu-menu di leftbar disamping.
							</p>
							<div class="mt-50"></div>
							<div class="alert alert-info fs-18">
								<b>Studi Kasus :</b> <br>
								Si Ani mengalami gejala ada bintik-bintik di wajahnya. Diagnosa sakit Ani?
							</div>

						</div>
						<div role="tabpanel" class="tab-pane" id="tablist-2">
							<?php include 'gejala.php'; ?>
						</div>
						<div role="tabpanel" class="tab-pane" id="tablist-3">
							<?php include 'penyakit.php'; ?>
						</div>
						<div role="tabpanel" class="tab-pane" id="tablist-4">
							<?php include 'gejala_penyakit.php'; ?>

						</div>
						<div role="tabpanel" class="tab-pane" id="tablist-5">
							<?php include 'probabilitas.php'; ?>
						</div>
						<div role="tabpanel" class="tab-pane" id="tablist-6">
							<?php include 'perangkingan.php'; ?>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>