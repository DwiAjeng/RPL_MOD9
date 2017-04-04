<HTML>
<HEAD>
<TITLE> Form Edit Dosen </TITLE>
</HEAD>
<BODY>
<?php
	$conn = mysql_connect("localhost","root", "") or die ("Koneksi gagal");
	mysql_select_db ("db_akademik_dwiajeng", $conn);
	$kodedosen = $_GET ['kodedosen'];
	$select = "select * from dosen where kodedosen = '$kodedosen'";
	$select_query = mysql_query($select);
	while($data = mysql_fetch_array($select_query))
		{
			$kodedosen = $data ['kodedosen'];
			$namadosen = $data ['namadosen'];
		}
?>

<form method='post' action='save_edit_dosen.php'>
<table border='1' width='50%'>
<tr><td colspan='2' align='center'>FORM DOSEN</td>
<tr><td>Kode Dosen</td><td><input type='text' name='txtkddosen' size='4' value="<?php echo $kodedosen;?>"></td></tr>
<tr><td>Nama Dosen</td><td><input type='text' name='txtnamadosen' size='35' value="<?php echo $namadosen;?>"></td></tr>
<tr><td colspan='2' align='center'><input type='submit' name='btnupdate' value='Update'></td></tr>
<table>  
</form>
</BODY>
</HTML>
