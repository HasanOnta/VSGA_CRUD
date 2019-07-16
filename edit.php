<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">CRUD PHP </a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
	
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="tambah.php">Tambah</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		</div>
	<?php 
		$conn = mysqli_connect("localhost", "root", "", "latihan");
		$id = $_GET['nomor_karyawan'];
		$sql = "SELECT * FROM karyawan WHERE nomor_karyawan=$id";
		$query = mysqli_query($conn, $sql);
		while ($data = mysqli_fetch_array($query)) {
		?>
		<div class="container">
		<form method="post" action="a_edit.php" name="edit" style="padding-top: 20px">
						<div class="form-group">
							<label>Nomor Karyawan</label>
							<input type="number" name="nomer" class="form-control" placeholder="Tuliskan Nomor Karyawan" value="<?php echo $data['nomor_karyawan'] ?>">
						</div>
						<div class="form-group">
							<label>Nama Lengkap</label>
							<input type="text" name="namaa" class="form-control" placeholder="Tuliskan Nama Lengkap" value="<?php echo $data['nama'] ?>">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<input type="text" name="alamat" class="form-control" rows="5" placeholder="Tuliskan Alamat Lengkap" value="<?php echo $data['alamat'] ?>"></input>
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label><br>
							<?php if ($data['gender'] == "L") {
							 echo "<input type='radio' name='genderr' value='L' checked='checked'> Laki-Laki<br>";  
							 echo "<input type='radio' name='genderr' value='P'> Perempuan<br>"; 
							} else {
								echo "<input type='radio' name='genderr' value='L'> Laki-Laki<br>";
								echo "<input type='radio' name='genderr' value='P' checked='checked'> Perempuan<br>";
							}?>
							
						</div>
						<input type="submit" name="submit" value="submit" class="btn btn-primary">
				</form>
	</div>
	<?php  	} ?>

	
</body>
</html>