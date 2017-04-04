<?php
$link = mysqli_connect("localhost","root","","db_akademik_dwiajeng") 
	or die ("koneksi gagal");
?>
<html>
<head><title>VIEW DATA DOSEN</title></head>
<body>
<table width="100%" border="1" align="center">
  <tr  bgcolor="gray"> 
    <td colspan="3"> 
	<font size="4" face="Verdana"><b>LIST DATA DOSEN D3 TEKNIK INFORMATIKA
	<br>TAHUN AKADEMIK 2016-2017</font><br></th>
  </tr>
  <tr align="right"> 
  </tr>
	<tr align="center"> 
    <th>NO</th>
	<th>KODE DOSEN</th>
    <th>NAMA DOSEN</th>
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
			<td>".$data['namadosen']."</td>";
  $nomor++;
}
echo "</table>";
?>
</body>
</html>