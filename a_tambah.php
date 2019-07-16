	<?php 
			$conn = mysqli_connect("localhost", "root", "", "latihan");
			$nomer = $_POST['nomer'];
			$namaa = $_POST['namaa'];
			$alamat = $_POST['alamat'];
			$genderr = $_POST['genderr'];
			$query = "INSERT INTO karyawan (nomor_karyawan, nama, alamat, gender) VALUE ('$nomer','$namaa', '$alamat', '$genderr')";
			$result = mysqli_query($conn, $query);
			echo "Sukses.. Akan dialihkan";
			mysqli_close($conn);
			
	 ?>
	 <meta http-equiv="refresh" content="2;url=index.php">