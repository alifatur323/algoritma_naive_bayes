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
</head>
<body>
	<?php $aktif="teori" ?>
	<nav class="navbar navbar-semitransparan navbar-fixed-top">
		<?php include 'navbar.php'; ?>
	</nav>

	<div class="mt-150">
		<div class="container">
			<h2 class="fs-40">Definisi Naive Bayes</h2>
			<hr>
			<p class="text-justify">
				Sebelum mempelajari metode Naive Bayes(NB) lebih lanjut, kita harus tahu kalau NB termasuk dalam Sistem Pendukung Keputusan (SPK). 
				<br>
				Dalam mengambil suatu keputusan, metode NB menggunakan data yang sudah ada sebagai acuannya.
				Dan penyelesaiannya metode ini tidak memerlukan/menggunakan bobot tetapi menggunakan probabilitas data. 
				<br>
				<br>
				Metode <b><i>Naive Bayes (NB)</i></b> merupakan suatu klasifikasi yang menggunakan probabilitas dan statistik, yang dikemukakan oleh ilmuwan Inggris yang bernama <i>Thomas Bayes</i>. Metode ini sangat cocok digunakan untuk memprediksi peluang dimasa depan berdasarkan pengalaman dimasa sebelumnya.
				<br>
				<br>
				Dalam menyelesaikan permasalahan menggunakan metode NB ada beberapa tahapan yang harus diketahui, yaitu:
				<ol class="fs-20">
					<li class="mb-10">
						Menghitung jumlah kelas / label.
					</li>
					<li class="mb-10">
						Menghitung jumlah kasus perkelas.
					</li>
					<li class="mb-10">
						Mengalikan semua variable kelas.
					</li>
					<li class="mb-10">
						Membandingkan hasil perkelas.
					</li>
				</ol>
				<br>
			</p>
		</div>
	</div>

	<?php include 'footer.php' ?>
</body>
</html>