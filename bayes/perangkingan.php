<?php $cut = array_slice($perhitungan->hitung_perangkingan(), 0, 1, true) ?>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Penyakit</th>
			<th>Hasil</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1; ?>
		<?php foreach ($perhitungan->hitung_perangkingan() as $key => $value): ?>
			<?php $detail_penyakit = $penyakit->detail_penyakit($key) ?>
			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $detail_penyakit['nama_penyakit'] ?></td>
				<td><?php echo $value ?></td>
			</tr>
			<?php $no++ ?>
		<?php endforeach ?>
	</tbody>
</table>

<div class="alert alert-info">
	Kesimpulan : <br>
	<?php foreach ($cut as $id => $value): ?>
		<?php $detail_penyakit = $penyakit->detail_penyakit($id) ?>
		Diagnosa untuk Ani adalah <b><em><?php echo $detail_penyakit['nama_penyakit'] ?></em></b> karena memiliki nilai probabilitas tertinggi
	<?php endforeach ?>
</div>