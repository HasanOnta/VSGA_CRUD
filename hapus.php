<?php 
			$conn = mysqli_connect("localhost", "root", "", "latihan");
			$id = $_GET['nomor_karyawan'];
			$query = "DELETE FROM karyawan WHERE nomor_karyawan=$id";
			$result = mysqli_query($conn, $query);
			echo "Berhasil Menghapus...";

			mysqli_close($conn);
	 ?>
	 <meta http-equiv="refresh" content="1;url=index.php">