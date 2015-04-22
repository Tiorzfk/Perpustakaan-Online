
<?php session_start();
$id=$_GET['id_anggota'];
include "config/koneksi.php";
$sql_news = "SELECT*from yo_peminjaman where id_anggota='$id'";
$qry_news = mysql_query($sql_news)
or die ("Gagal query tampil");
while($data_news=mysql_fetch_array($qry_news)){
$id=$data_news['id_buku'];
$status=$data_news['status'];
$judul=$data_news['judul_buku'];
$nama=$data_news['nama'];
$isbn=$data_news['isbn'];
$tahun=$data_news['tahun_terbit'];
$foto=$data_news['gambar'];
$deskripsi=$data_news['deskripsi'];
$pengarang=$data_news['pengarang'];
$penerbit=$data_news['penerbit'];
    ?>
	<tbody>
	 <div class="col-md-2">
                	<div class="panel panel-info">
                      <div class="panel-heading"><?php echo $judul ?>
                        <?php if($status==0){?>
                      <button type="button" class="btn btn-info btn-xs disabled ">
                       <span class="glyphicon glyphicon-ok"></span>
                       </button>
                       <?php } ?>

                      </div>
                      <div class="panel-body">
                      <div class="form-group">
                       <img src="assets/buku/<?php echo $foto?>" width="100px">
                       </div>

                       <div classs="form-group">
                      <label>Isbn</label>
                      <input type="text" class="form-control" value="<?php echo $isbn ?>" disabled>
                      </div>
                      <span class="label label-info"><a href="javascript:detail_bukusaya(<?php echo $id ?>);"><font color="ffffff">Detail</font></a></span>
                     
                            </div>
                      </div>
                    </div><?php } ?>
                <div id="detail2">
                     </div>