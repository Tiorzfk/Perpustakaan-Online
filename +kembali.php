<?php    
include "config/koneksi.php";
include "config/library.php";
$id=mysql_real_escape_string($_POST['id_buku']);  
$id_anggota=mysql_real_escape_string($_POST['id_anggota']);	
$id_pinjam=mysql_real_escape_string($_POST['id_pinjam']);		
$tgl_pinjam=mysql_real_escape_string($_POST['tgl_pinjam']);		
$tgl_kembali=mysql_real_escape_string($_POST['tgl_kembali']);		
$denda=mysql_real_escape_string($_POST['denda']);			
				$sql_ubah="UPDATE yo_buku SET
				jumlah=jumlah + 1
				WHERE id_buku='$id'";
      		 	mysql_query($sql_ubah);

      		 	$sql_ubah="UPDATE yo_buku SET
				status='0'
				WHERE id_buku='$id'";
      		 	mysql_query($sql_ubah);

      		 	$sql_ubah="UPDATE yo_peminjaman SET
				status='0'
				WHERE id_buku='$id' AND id_anggota='$id_anggota'";
      		 	mysql_query($sql_ubah);

$sql_simpan3="INSERT INTO yo_pengembalian
(id_kembali,id_pinjam,tgl_kembali,denda)
VALUES ('','$id_pinjam','$tgl_kembali','$denda')"; 

mysql_query($sql_simpan3,$konek)
or die ("Memasukan data produk gagal".mysql_error());

header('Location:./');
?>