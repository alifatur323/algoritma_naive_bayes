<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th class="text-center">Nama Penyakit</th>
			<th class="text-center">Probabilitas Penyakit</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($penyakit->tampil_penyakit() as $key => $value): ?>
			
			<tr>
				<td><?php echo $key+1 ?></td>
				<td class="text-center"><?php echo $value['nama_penyakit'] ?></td>	
				<td class="text-center"><?php echo $value['probabilitas_penyakit'] ?></td>	
			</tr>

		<?php endforeach ?>
	</tbody>
</table>