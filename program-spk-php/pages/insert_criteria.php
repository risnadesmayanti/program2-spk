<html>
<head>
<title>Tambah DATA ke DATABASE - Nyekrip</title>
</head>
<body>
<?php
if(isset($_POST['tambah']))
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}
 
if(! get_magic_quotes_gpc() )
{
   $nama_karyawan = addslashes ($_POST['nama_karyawan']);
   $alm_karyawan = addslashes ($_POST['alm_karyawan']);
}
else
{
   $nama_karyawan = $_POST['nama_karyawan'];
   $alm_karyawan = $_POST['alm_karyawan'];
}
$gaji_karyawan = $_POST['gaji_karyawan'];
 
$sql = "INSERT INTO karyawan (nama_karyawan,alm_karyawan, gaji_karyawan, tgl_gabung) VALUES ('$nama_karyawan','$alm_karyawan',$gaji_karyawan, NOW())";
mysql_select_db('test_db');
$tambahdata = mysql_query( $sql, $koneksi );
if(! $tambahdata )
{
  die('Gagal Tambah Data: ' . mysql_error());
}
echo "Berhasil tambah data\n";
header("location:index.php");
mysql_close($koneksi);
}
else
{
?>
<form method="post" action="#">
<table width="500" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">Nama Karyawan</td>
<td><input name="nama_karyawan" type="text" id="nama_karyawan"></td>
</tr>
<tr>
<td width="110">Alamat Karyawan</td>
<td><input name="alm_karyawan" type="text" id="alm_karyawan"></td>
</tr>
<tr>
<td width="110">Gaji Karyawan</td>
<td><input name="gaji_karyawan" type="text" id="gaji_karyawan"></td>
</tr>
<tr>
<td width="110"> </td>
<td> </td>
</tr>
<tr>
<td width="110"> </td>
<td>
<input name="tambah" type="submit" id="tambah" value="Tambah Karyawan">
</td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</html> 