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
	<?php $aktif="langkah"; ?>
	<nav class="navbar navbar-semitransparan navbar-fixed-top">
		<?php include 'navbar.php'; ?>
	</nav>

	<div class="mt-150">
		<div class="container">
			<h2 class="fs-40">Langkah-langkah Perhitungan Bayes</h2>
			<hr>
			<p class="fs-20">
				Langkah-langkah perhitungan menggunakan metode Bayes, sebagai berikut:
			</p>
			<ol class="fs-20">
				<li class="mb-10">
					Menghitung jumlah kelas/label
				</li>
				<li class="mb-10">
					Menghitung jumlah kasus perkelas
				</li>
				<li class="mb-10">
					Mengalikan semua hasil variable kelas
				</li>
				<li class="mb-10">
					Membandingkan hasil perkelas
				</li>
			</ol>
			<br>
			<p class="fs-20">
				<h3>Untuk Mencari probabilitas gunakan rumus:</h3>
				<b class="fs-20">
					p(x)= jumlah kejadian berhasil/jumlah semua kejadian.
				</b>
				<br>
				Contoh: ada 10 jenis ikan tawar, hanya ada 3 jenis ikan yang bisa hidup didaerah gorontalo. <br> Berapa peluang ikan yang bisa hidup di gorontalo?
				<br> p(gorontalo)=3/10=0.3
				<br>
				<h3>Teorema Bayes</h3>
				<br>
				<b>
					<img src="../assets/img/bayes.png">
				</b>
				<br>
				Dengan: <br>
				p(Hi | E) = probabilitas hipotesis Hi benar jika diberikan evidence (fakta) E
				<br>
				p( E | Hi) = probabilitas munculnya evidence (fakta) E jika diketahui hipotesis Hi benar
				<br>
				p(Hi) = probabilitas hipotesis Hi (menurut hasil sebelumnya) tanpa memandang evidence (fakta) apapun
				n = jumlah hipotesis yang mungkin
				<br>
				<br>
				Setelah selesai melakukan perhitungan/uji coba hipotesis, maka akan mendapatkan 1 atau lebih evidence(fakta) baru, maka:
				<br>
				<b>
					<img src="../assets/img/bayes2.png">
				</b>
				<br>
				dengan :
				<br>
				e= evidence lama
				<br>
				E = evidence atau observasi baru
				<br>
				p(H|E,e) = probabilitas hipotesis H benar jika muncul evidence baru E dari evidence lama e
				<br>
				p(H|E) = probabilitas hipotesis H benar jika diberikan evidence E.
				<br>
				p(e|E,H)= kaitan antara e dan E jika hipotesis benar
				<br>
				P(e|E) = kaitan antara e dan E tanpa memandang hipotesis apapun.
			</p>

		</div>
	</div>


	<?php include 'footer.php' ?>
</body>
</html>