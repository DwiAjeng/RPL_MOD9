<?php
	$conn = mysql_connect("localhost","root", "") or die ("Koneksi gagal");
	mysql_select_db ("db_akademik_dwiajeng", $conn);
	$kodedosen=$_POST["txtkddosen"];
	$namadosen=$_POST["txtnamadosen"];
	
	if (empty($kodedosen)||empty($namadosen)) {
	?>
	<script language= "javascript">
		alert("Maaf field tidak boleh kosong");
		history.back();
		</script>
	<?php
	}
	
	else{
	$query_update = "update dosen set namadosen='$namadosen' where kodedosen='$kodedosen'";
	$update = mysql_query ($query_update);
	if($update)
	{
		include("redirectview_update_dosen.php");
	}
	else{
		echo "Gagal update ... ";
		echo "<META HTTP-EQUIV=Refresh CONTEN='2; URL=view_dosen.php>";
	}
	}
	
?>