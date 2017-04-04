<?php
	$link = mysqli_connect("localhost","root","","db_akademik_dwiajeng") 
		or die ("koneksi gagal");
	?>
	<?php
		$kodedosen=$_POST["txtkddosen"];
		$namadosen=$_POST["txtnamadosen"];
		$query ="insert into dosen values('$kodedosen','$namadosen')";
		$result = mysqli_query($link,$query); 
		include("view_dosen.php");
?>