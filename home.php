<?php
$bukusaya=$_SESSION['id_anggota'];
include "config/koneksi.php";
$sql_news = "SELECT *from yo_anggota";
$qry_news = mysql_query($sql_news)
or die ("Gagal query tampil");
$yoah=mysql_num_rows($qry_news);

$sql_news = "SELECT *from yo_buku";
$qry_news = mysql_query($sql_news)
or die ("Gagal query tampil");
$yoah1=mysql_num_rows($qry_news);

$sql_news = "SELECT yo_anggota.nama,yo_anggota.username,yo_anggota.password,yo_anggota.alamat,yo_anggota.email,yo_anggota.no_telp,yo_anggota.photo
FROM yo_anggota INNER JOIN yo_peminjaman on yo_anggota.id_anggota=yo_peminjaman.id_anggota where yo_peminjaman.id_anggota='$bukusaya'";
$qry_news = mysql_query($sql_news)
or die ("Gagal query tampil");
$yoah2=mysql_num_rows($qry_news);
	?>
        
        <div class="warper container-fluid">
        	
            <div class="page-header"><h1>Perpustakaan Online <small>Let's get a book...</small></h1></div>
            
            
            <div class="row">
            
            	<div class="col-md-3 col-sm-6">
                	<div class="panel panel-default clearfix dashboard-stats rounded">
                    	
                    	<a href="javascript:see();"><i class="fa fa-book bg-danger transit stats-icon"></i></a>
                        <h3 class="transit"><?php echo $yoah1 ?> Buku</h3>
                        <p class="text-muted transit">Lihat Buku</p>
                    </div>
                </div><?php if ($_SESSION['level']=="admin"){?>
                <div class="col-md-3 col-sm-6">
                	<div class="panel panel-default clearfix dashboard-stats rounded">
                    	<a href="javascript:input();"><i class="fa fa-plus-square-o bg-info transit stats-icon"></i></a>
                         <h3 class="transit">Input</h3>
                        <p class="text-muted transit">Buku</p>
                    </div>
                </div><?php }else{ ?>
                <div class="col-md-3 col-sm-6">
                	<div class="panel panel-default clearfix dashboard-stats rounded">
                    	<a href="javascript:saya(<?php echo $_SESSION['id_anggota']; ?>);"><i class="fa fa-glyphicon glyphicon-bookmark bg-info transit stats-icon"></i></a>
                         <h3 class="transit"><?php echo $yoah2 ?> Buku</h3>
                        <p class="text-muted transit">Buku Saya</p>
                    </div>
                </div><?php } ?>
                <div class="col-md-3 col-sm-6">
                	<div class="panel panel-default clearfix dashboard-stats rounded">
                    <a href="javascript:anggota();">
                    	<i class="fa fa-user bg-success transit stats-icon"></i></a>
                        <h3 class="transit"><?php echo $yoah ?> Anggota</h3>
                        <p class="text-muted transit">Lihat Anggota</p>
                    </div>
                </div>
            
            </div>
            
            
            <div class="row">
            	<div class="col-lg-16">
                <div id="see">
                	
        
        <div class="warper container-fluid">
            
            <div class="page-header"><h1>Timeline <small>View your events</small></h1></div>
            
            
            <div class="row">
            <div class="col-sm-3"></div>
            
            
                <div class="col-sm-6">
                    
                    <ul class="timeline list-unstyled">
                    <?php session_start();
include "config/koneksi.php";
$sql_news = "SELECT*from yo_buku where status='0' order by date limit 3";
$qry_news = mysql_query($sql_news)
or die ("Gagal query tampil");
while($data_news=mysql_fetch_array($qry_news)){
$id=$data_news['id_buku'];
$status=$data_news['status'];
$judul=$data_news['judul'];
$stok=$data_news['jumlah'];
$foto=$data_news['gambar'];
$date=$data_news['date'];
    ?>
                        <li class="clearfix">
                            <time class="tl-time">
                                <h3 class="text-purple">Stok:<?php echo $stok ?></h3>
                                <p><?php echo $date ?></p>
                            </time>
                            <i class="fa fa-comments-o bg-purple tl-icon text-white"></i>
                            <div class="tl-content">
                                <div class="panel panel-primary">
                                    <div class="panel-heading"><?php echo $judul ?></div>
                                    <div class="panel-body">
                                        <img src="assets/buku/<?php echo $foto?>" width="100px">
                                    </div>
                                </div>
                            </div>
                        </li>
                        </li><?php } ?>
                    </ul>
                    
                </div>

            </div>
            
            
            
            
        </div>
        <!-- Warper Ends Here (working area) -->
                    
                </div>
            </div>
            
        </div>
        <!-- Warper Ends Here (working area) -->
        
 