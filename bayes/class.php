<?php
$mysqli = new mysqli("localhost", "root", "", "algoritma_bayes");

class utama
{
	public $koneksi;
	function __construct($mysqli)
	{
		$this->koneksi = $mysqli;
	}

	function perulangan($data)
	{
		while ($isi = $data->fetch_assoc()) 
		{
			$semua[] = $isi;
		}
		return $semua;
	}
}

class gejala extends utama
{
	function tampil_gejala()
	{
		$data = $this->koneksi->query("SELECT * FROM gejala");
		return $this->perulangan($data);
	}
	function detail_gejala($gejala)
	{
		$data = $this->koneksi->query("SELECT * FROM gejala WHERE id_gejala = '$gejala'");
		return $data->fetch_assoc();
	}
}

$gejala = new gejala($mysqli);

class penyakit extends gejala
{
	function tampil_penyakit()
	{
		$data = $this->koneksi->query("SELECT * FROM penyakit");
		return $this->perulangan($data);
	}
	function detail_penyakit($penyakit)
	{
		$data = $this->koneksi->query("SELECT * FROM penyakit WHERE id_penyakit = '$penyakit'");
		return $data->fetch_assoc();
	}
}

$penyakit = new penyakit($mysqli);

class gejala_penyakit extends penyakit
{
	function tampil_gp()
	{
		$semua = array();
		$data = $this->koneksi->query("SELECT * FROM gejala_penyakit");

		while ($isi_data = $data->fetch_assoc()) 
		{
			$id_gejala = $isi_data['id_gejala'];
			$id_penyakit = $isi_data['id_penyakit'];
			$detail_gejala = $this->detail_gejala($id_gejala);
			$detail_penyakit = $this->detail_penyakit($id_penyakit);

			$isi_data['nama_gejala'] = $detail_gejala['nama_gejala'];
			$isi_data['probabilitas_penyakit'] = $detail_penyakit['probabilitas_penyakit'];
			$isi_data['nama_penyakit'] = $detail_penyakit['nama_penyakit'];

			$semua[] = $isi_data;
		}
		return $semua;
		
	}
}

$gp = new gejala_penyakit($mysqli);

class perhitungan extends gejala_penyakit
{
	function hitung_probabilitas()
	{
		$n_probabilitas_x_probabilitas_penyakit = 0;
		foreach ($this->tampil_gp() as $key => $value) 
		{
			$detail_penyakit = $this->detail_penyakit($value['id_penyakit']);
			$probabilitas_penyakit = $detail_penyakit['probabilitas_penyakit'];
			$probabilitas = $value['probabilitas'];

			$n_probabilitas_x_probabilitas_penyakit += $probabilitas_penyakit * $probabilitas;

		}
		$probabilitas_x_probabilitas_penyakit = array();

		foreach ($this->tampil_gp() as $key => $value_1) 
		{
			$detail_penyakit = $this->detail_penyakit($value_1['id_penyakit']);
			$pp = $detail_penyakit['probabilitas_penyakit'];
			$p = $value_1['probabilitas'];

			$probabilitas_x_probabilitas_penyakit[$value_1['id_penyakit']]['atas'] = $pp * $p;
			$probabilitas_x_probabilitas_penyakit[$value_1['id_penyakit']]['bawah'] = $n_probabilitas_x_probabilitas_penyakit;
			$probabilitas_x_probabilitas_penyakit[$value_1['id_penyakit']]['hasil'] = round(($pp * $p) / $n_probabilitas_x_probabilitas_penyakit, 3);

		}
		return $probabilitas_x_probabilitas_penyakit;
	}

	function hitung_perangkingan()
	{
		$perangkingan = array();
		foreach ($this->hitung_probabilitas() as $id_penyakit => $value) 
		{
			$perangkingan[$id_penyakit] = $value['hasil'];
		}
		arsort($perangkingan);
		return $perangkingan;

	}
}

$perhitungan = new perhitungan($mysqli);
