 <?php  session_start();
if((!$_SESSION['username'])and (!$_SESSION['password'] )){
header("Location: login/");
}
error_reporting(0);
if ($_REQUEST[url]==''){
include "header.php" ;
include "home.php";
include "footer.php";
}
else if ($_REQUEST[url]=='home'){
include "home.php";
}
else if ($_REQUEST[url]=='buku'){
include "buku.php";
}
else if ($_REQUEST[url]=='bukusaya'){
include "bukusaya.php";
}
else if ($_REQUEST[url]=='pinjam'){
include "pinjam.php";
}
else if ($_REQUEST[url]=='detail'){
include "product_details.php";
}
else if ($_REQUEST[url]=='input'){
include "inputbuku.php";
}
else if ($_REQUEST[url]=='produk'){
include "bg_kiri.php";
include "all_product.php";
}
?>
     