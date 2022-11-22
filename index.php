<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- bootstrap-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="font_awesome/css/font-awesome.min.css">
	<title> Mahasiswa </title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    CRUD - BS5
  </a>
</nav>
<!--judul-->
<div class="container">
	<h1 class="mt-3">Data Mahasiswa</h1>
<figure>
	<blockquote class="blockquote">
  <p>Berisi data yang telah disimpan di database.</p>
</blockquote>
<figcaption class="blockquote-footer">
	CRUD <cite title="Source title">Create Read Update Delete </cite>
</figcaption>
</figure>
<a href="kelola.php" type="button" class="btn btn-primary mb-3">Tambah data</a>
<div class="table-responsive"> 
  <table class="table align-middle table-bordered table-hover">
  	<thread>
  		<tr>
    <th>no.</th>
    <th>Nim</th>
    <th>Nama Mahasiswa</th>
    <th>Jenis Kelamin</th>
    <th>Alamat</th>
    <th>Prodi</th>
    <th>foto</th>
    <th>email</th>
    <th>Aksi</th>
</tr>
</thread>
<tbody>
	<tr>
	<td>1.</td>
	<td>211</td>
	<td>wilda</td>
	<td>perempuan</td>
	<td>gempol pasuruan</td>
	<td>sistem informasi</td>
	<td>
		<img src="img/img.1.jpg" style="width : 100px">
	</td>
	<td>wildacahya12@gmail.com</td>
	<td>
		<a href="kelola.php?ubah=1" type="button" class="btn btn-success btn-sm">
			edit
		</a>
		<a href= "proses.php?hapus=1" type="button" class="btn btn-danger btn-sm">
			hapus
		</a>
	</td>
	</tr>
</tbody>
</table>
</div>
</div>
</body>
</html>
