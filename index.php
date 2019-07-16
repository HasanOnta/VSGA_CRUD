<!DOCTYPE html>
 <html>
 <head>
 	<title>CRUD</title>
 	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/font-awesome.js"></script>

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
						<a class="nav-link" data-toggle="modal" data-target="#exampleModal">Tambah</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
 	</div>

 	<div class="container">
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Karyawan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
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
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
				<button type="submit" class="btn btn-primary" value="submit" name="submit">Simpan</button>
			</div>
			</div>
		</div>
		</div>

		
 	<table class="table table-striped table-hover">
 		<thead class="thead thead-dark">
 			<tr>
 				<th>Nomor</th>
 				<th>Nama</th>
 				<th>Alamat</th>
 				<th>Jenis Kelamin</th>
 				<th>Edit</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php  
 			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "latihan";
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
 			$query = "SELECT * FROM karyawan";
 			$result = mysqli_query($conn, $query);
		    while($row = mysqli_fetch_array($result)) {
		        echo "<td>".$row['nomor_karyawan']."</td>";
		        echo "<td>".$row['nama']."</td>";
				echo "<td>".$row['alamat']."</td>";
				if ($row['gender'] == "L") {
					echo "<td>Laki-Laki</td>";
				} else {
					echo "<td>Perempuan</td>";
				}
				 
		           
		        echo "<td><a href='edit.php?nomor_karyawan=$row[nomor_karyawan]' class='btn btn-warning'><span class='fa fa-edit fa-sm'></span>Edit</a> | <a href='hapus.php?nomor_karyawan=$row[nomor_karyawan]' class='btn btn-danger' ><span class='fa fa-trash fa-sm'></span>Delete</a></td></tr>";        
			}
		    ?>
 		</tbody>
 	</table>
 	</div>
			<script>$('#myModal').on('shown.bs.modal', function () { $('#myInput').trigger('focus')
})</script>
 </body>
 </html>