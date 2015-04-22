
<?php
include_once "config/koneksi.php";
$idhapus=$_GET['idhapus'];
$sql_hapus="DELETE FROM yo_buku  WHERE id_buku='$idhapus'";
mysql_query($sql_hapus, $konek)
or die ("Gagal perintah hapus".mysql_error());
?>
<script language="JavaScript">
document.location=('./')</script>a