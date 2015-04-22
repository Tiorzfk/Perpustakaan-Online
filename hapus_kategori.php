
<?php
include_once "config/koneksi.php";
$idhapus=$_GET['id'];
$sql_hapus="DELETE FROM tb_kategori  WHERE id_kategori='$idhapus'";
mysql_query($sql_hapus, $konek)
or die ("Gagal perintah hapus".mysql_error());
?>
<script language="JavaScript">
document.location=('../admin/?url=view_kategori')</script>a