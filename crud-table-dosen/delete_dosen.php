<?php
	$con = mysql_connect("localhost","root","") or die ("koneksi gagal");
	mysql_select_db("db_akademik_dwiajeng",$con);
	$kodedosen = $_GET['kodedosen'];
	$delete = "delete from dosen where kodedosen = '$kodedosen'";
	$delete_query = mysql_query($delete);
	if($delete_query){
		include("redirectview_del_dosen.php");
	}else {
		echo "Gagal delete..";
		echo "<META HTTP-EQUIV=Refresh CONENT='2; URL= view_dosen.php";
	}
?>