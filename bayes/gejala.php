<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th class="text-center">Nama Gejala</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($gejala->tampil_gejala() as $key => $value): ?>
			
			<tr>
				<td><?php echo $key+1 ?></td>
				<td class="text-center"><?php echo $value['nama_gejala'] ?></td>	
			</tr>

		<?php endforeach ?>
	</tbody>
</table>