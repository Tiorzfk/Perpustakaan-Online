<?php session_start();
include "../config/koneksi.php";

#jika ditekan tombol login

if(isset($_POST['Login'])) {
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['password']);
$sql =mysql_query("SELECT * FROM yo_anggota WHERE username='$username' &&
password='$password'");
$num = mysql_num_rows($sql);
if($num==1) {
$c = mysql_fetch_array($sql);
$_SESSION['username'] = $c['username'];
$_SESSION['password'] = $c['password'];
$_SESSION['nama'] = $c['nama'];
$_SESSION['id_anggota'] = $c['id_anggota'];
$_SESSION['level'] = $c['level'];
$_SESSION['photo'] = 'assets/pp/' . $c['photo'];
?>
<script language="JavaScript">
document.location=('../')</script>
<?php
} 
else {
// jika login salah //
echo "<script>
eval(\"parent.location='./'\");
alert (' Maaf Login Gagal, Silahkan Isi Username dan Password Anda Dengan Benar');
</script>";
}
}
?>