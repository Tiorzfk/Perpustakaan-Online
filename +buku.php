<?php
include('config/koneksi.php');
include('config/library.php');

						$judul = mysql_real_escape_string($_POST['judul']);
						$isbn = mysql_real_escape_string($_POST['Isbn']);
						$jumlah = mysql_real_escape_string($_POST['jumlah']);
							$tahun = mysql_real_escape_string($_POST['tahun']);
						 $pengarang = mysql_real_escape_string($_POST['pengarang']);
						$deskripsi = mysql_real_escape_string($_POST['deskripsi']);
						$penerbit = mysql_real_escape_string($_POST['penerbit']);
$bykFile = count($_FILES['foto']['name']);
  //get the file name
$jenis_gambar=$_FILES['foto']['type'];
if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/x-png")
{
$direktori= "assets/buku/";
//check if the file is corrupt or error
for ($i = 0; $i < $bykFile; $i++) {
$fileName = $_FILES['foto']['name'];
$Images=$direktori.basename($_FILES['foto']['name']);
$move = move_uploaded_file($_FILES['foto']['tmp_name'],$Images); //

mysql_query("insert into yo_buku
	(id_buku,judul,Isbn,tahun_terbit,jumlah,date,kd_pengarang,kd_penerbit,deskripsi,gambar,status)
	values
	('','$judul','$isbn','$tahun','$jumlah','$date','$pengarang','$penerbit','$deskripsi','$fileName','0')
");
}
}else{
	echo "harap Masukan gambar !";
}
 ?> <script language="JavaScript">
document.location=('./')</script>
		
		?></div>