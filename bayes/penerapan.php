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
	<?php $aktif="penerapan" ?>
	<nav class="navbar navbar-semitransparan navbar-fixed-top">
		<?php include 'navbar.php'; ?>
	</nav>

	<div class="mt-150">
		<div class="container">
			<h2 class="fs-40">Penerapan Bayes</h2>
			<hr>
			<ul class="fs-20 mb-50">
				<li>
					Kapan saya harus menggunakan Bayes?
				</li>
				<li>
					Apa saja yang harus disiapkan untuk membuat sistem dengan metode Bayes?
				</li>
				<li>
					Studi kasus apa yang cocok diterapkan dalam metode bayes?
				</li>
			</ul>
			<h3>Bayes cocok untuk studi kasus seperti apa?</h3>
			<p class="fs-20">
				Seringkali pertanyaan diatas muncul ketika akan membuat sistem menggunakan metode Bayes. Karena itu, disini kami akan menjelaskan studi kasus apa yang cocok digunakan kedalam metode Bayes dalam penilaiannya dan langkah apa saja yang harus disiapkan.
				<br>
				<br>
				Metode Bayes merupakan metode yang digunakan untuk menghitung peluang suatu hipotesis. Bayes Optimal Classifier menghitung suatu peluang kelas dari masing-masing atribut yang ada, dan menentukan kelas yang paling optimal.
				<br>
				<br>

				Contoh studi kasus yang penilainnya menggunakan Bayes:
			</p>
			<ol class="fs-20">
				<li>Klasifikasi jenis ikan air tawar</li>
				<li>Klasifikasi buah naga</li>
				<li>Dll</li>
			</ol>
			<p class="fs-20">
				<h3>Langkah-langkah apa saja yang akan dilakukan ketika menggunakan Bayes?</h3>
			</p>
			<ol class="fs-20">
				<li class="mb-10">
					Menentukan obyek yang akan dijadikan sebagai penilaian
				</li>
				<li class="mb-10">
					Menentukan data yang akan dijadikan sebagai atribut (ciri atau karakteristik yang dimiliki oleh obyek).
					<br>
					Misal: berapa lama pertumbuhan ikan, bagaimana cara pemeliharaannya, biaya produksi, dll.
				</li>
				<li class="mb-10">
					Menentukan kelas, Misal: cocok,tidak cocok.
				</li>
				<li class="mb-10">
					Mendapatkan data dari obyek, misal: ikan, buah naga,dll.
				</li>
				<li class="mb-10">
					Kesimpulan, yang dihasilkan dari kelas nya, misal: jika ikan A nilai hasil="Tidak Cocok " lebih tinggi dari "cocok", maka ikan A tidak cocok.
				</li>
			</ol>
		</div>
	</div>


	<?php include 'footer.php' ?>
</body>
</html>