<?php
	header("application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=cetak_data_dosen.xls");
	$con= mysql_connect("localhost","roor","") or die ("Koneksi gagal");
	mysql_select_db("db_akademik_dwiajeng",$con);
	include 'data_dosen.php'
?>
