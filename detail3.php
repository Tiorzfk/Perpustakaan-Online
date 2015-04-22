 <?php
include "config/koneksi.php";
$kode = $_GET['id'];
$sql_news = "SELECT *from yo_peminjaman where id_buku='$kode'";
$qry_news = mysql_query($sql_news)
or die ("Gagal query tampil");
$data_news=mysql_fetch_array($qry_news);
$id=$data_news['id_buku'];
$judul=$data_news['judul_buku'];
$pengarang=$data_news['pengarang'];
$penerbit=$data_news['penerbit'];
$status=$data_news['status'];
$foto=$data_news['gambar'];
$tahun=$data_news['tahun_terbit'];
$deskripsi=$data_news['deskripsi'];
$isbn=$data_news['isbn'];
$nama=$data_news['nama'];
$pinjam=$data_news['tgl_pinjam'];
$status=$data_news['status'];
?>
             
 <div class="col-md-3">
                  <div class="panel panel-danger">
                      <div class="panel-heading">Detail Buku-<?php echo $judul ?></div>
                      <div class="panel-body">
                      <div class="form-group">
                       <img src="assets/buku/<?php echo $foto?>" width="200px">
                       </div>
                       <div class="form-group">
                      <label>Isbn</label>
                      <input type="text" class="form-control" value="<?php echo $isbn ?>" disabled>
                      </div>
                      <div class="form-group">
                      <label>Judul</label>
                       <input type="text" class="form-control" value="<?php echo $judul ?>" disabled>
                      </div>
                      <div class="form-group">
                      <label>Tahun Terbit</label>
                       <input type="text" class="form-control" value="<?php echo $tahun ?>" disabled>
                      </div>
                      <div class="form-group">
                      <div class="form-group">
                      <label>Pengarang</label>
                       <input type="text" class="form-control" value="<?php echo $pengarang ?>" disabled>
                      </div>
                      <div class="form-group">
                      <label>Penerbit</label>
                       <input type="text" class="form-control" value="<?php echo $penerbit ?>" disabled>
                      </div>
                       <div class="tl-content">
                              <div class="panel panel-danger">
                                    <div class="panel-body">
                                      <?php echo $deskripsi ?>
                                    </div>
                                </div>
                            </div>
                      </div>
                    </div>
                </div>