	<?php 
			$conn = mysqli_connect("localhost", "root", "", "latihan");
			$nomer = $_POST['nomer'];
			$namaa = $_POST['namaa'];
			$alamat = $_POST['alamat'];
			$genderr = $_POST['genderr'];
			$query = "UPDATE karyawan SET nomor_karyawan='$nomer', nama='$namaa', alamat='$alamat', gender='$genderr' WHERE nomor_karyawan='$nomer'";
			$result = mysqli_query($conn, $query);
			echo "Sukses.. Akan dialihkan";
			mysqli_close($conn);
			
	 ?>
	 <meta http-equiv="refresh" content="2;url=index.php">