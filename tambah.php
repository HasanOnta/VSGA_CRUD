<!DOCTYPE html>
<html>
<head>
	<title>Tambah</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<form method="post" action="a_tambah.php" name="tambah" style="padding-top: 20px">
						<div class="form-group">
							<label>Nomor Karyawan</label>
							<input type="number" name="nomer" class="form-control" placeholder="Tuliskan Nomor Karyawan">
						</div>
						<div class="form-group">
							<label>Nama Lengkap</label>
							<input type="text" name="namaa" class="form-control" placeholder="Tuliskan Nama Lengkap">
						</div>
						<div class="form-group">
							<label>Alamat</label>
							<textarea type="text" name="alamat" class="form-control" rows="5" placeholder="Tuliskan Alamat Lengkap"></textarea>
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label><br>
							<input type="radio" name="genderr" value="L"> Laki-Laki   
							<input type="radio" name="genderr" value="P"> Perempuan<br>
						</div>
						<input type="submit" name="submit" value="submit" class="btn btn-primary">
				</form>
	</div>
</body>
</html>