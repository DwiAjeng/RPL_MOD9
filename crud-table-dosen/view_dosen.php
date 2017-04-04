<?php
$link = mysqli_connect("localhost","root","","db_akademik_dwiajeng") 
	or die ("koneksi gagal");
?>
<html>
<head><title>VIEW DATA DOSEN</title></head>
<body>
<table width="100%" border="1" align="center">
  <tr  bgcolor="gray"> 
    <td colspan="5"> 
	<font size="4" face="Verdana"><b>LIST DATA DOSEN D3 TEKNIK INFORMATIKA
	<br>TAHUN AKADEMIK 2016-2017</font><br></th>
  </tr>
  <tr align="right"> 
    <td colspan="5"><a href="adddosen.html">Add Dosen</a></th>
  </tr>
	<tr align="center"> 
    <th>NO</th>
	<th>KODE DOSEN</th>
    <th>NAMA DOSEN</th>
    <th>EDIT</th>
    <th>DELETE</th>
  </tr>
<?php
$query ="select * from dosen";
$hasil=mysqli_query($link,$query);
$nomor=1;
while($data=mysqli_fetch_array($hasil))
{
  echo "<tr>
  <td align='center'>".$nomor."</td>
            <td align='center'>".$data['kodedosen']."</td>
			<td>".$data['namadosen']."</td>
			<td align='center'>
			<a href='form_edit_dosen.php?kodedosen=$data[kodedosen]'>EDIT</a></td>
			<td align='center'>
			<a href='delete_dosen.php?kodedosen=$data[kodedosen]'>DELETE</a></th>";
  $nomor++;
}
echo "</table>";
?>
<div align=center><br>
	[ <a href ='cetak_data_dosen.php'>Cetak Data Dosen</a> ]
</div>
</body>
</html>