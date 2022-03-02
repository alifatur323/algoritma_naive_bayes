<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th class="text-center">Nama Penyakit</th>
			<th class="text-center">Nama Gejala</th>
			<th class="text-center">Probabilitas</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($gp->tampil_gp() as $key => $value): ?>
			
			<tr>
				<td><?php echo $key+1 ?></td>
				<td class="text-center"><?php echo $value['nama_penyakit'] ?></td>	
				<td class="text-center"><?php echo $value['nama_gejala'] ?></td>	
				<td class="text-center"><?php echo $value['probabilitas'] ?></td>	
			</tr>

		<?php endforeach ?>
	</tbody>
</table>