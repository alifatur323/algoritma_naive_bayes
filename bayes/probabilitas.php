
<?php foreach ($gp->tampil_gp() as $key => $value): ?>
	<h4><span class="fa fa-check"></span> Probabilitas Ani <b><em><?php echo $value['nama_gejala'] ?></em></b> karena ada <b><em><?php echo $value['nama_penyakit'] ?></em></b> di wajahnya adalah : </h4>


	<div class="row">
		<div class="col-md-3">
			p(<?php echo $value['nama_gejala']." | ".$value['nama_penyakit'] ?>) = 
		</div>
		<div class="col-md-9">
			<div class="col-sm-12 text-center">
				<?php echo $value['probabilitas']." x ".$value['probabilitas_penyakit'] ?>
			</div>
			<hr class="hr">
			<div class="col-sm-12 text-center">
				<?php 
				$no = 1;
				foreach ($gp->tampil_gp() as $key => $value_1) 
				{

					$rule = $gp->tampil_gp();
					$jumlah = count($rule);

					if ( $no < $jumlah) 
					{
						$tanda = "+ ";
					}
					else
					{
						$tanda = "";
					}

					echo " ( ".$value_1['probabilitas']." x ".$value_1['probabilitas_penyakit']." ) ".$tanda;
					$no++;
				}

				?>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-3 col-md-3">Hasil</div>
		<div class="col-sm-9 col-md-9">
			<?php 
			$pro = $perhitungan->hitung_probabilitas();
			echo " = ".$pro[$value['id_penyakit']]['atas']." / ".$pro[$value['id_penyakit']]['bawah'];
			?>
		</div>
	</div>
	<div class="mt-075"></div>
	<div class="row">
		<div class="col-sm-9 col-md-9 col-md-offset-3">
			<?php 
			$pro = $perhitungan->hitung_probabilitas();
			echo " = ".$pro[$value['id_penyakit']]['hasil'];
			?>
		</div>
	</div>
	<div class="mt-3"></div>
<?php endforeach ?>

