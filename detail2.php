<div class="col-md-12">
                    
                    <div class="panel panel-info">
                        <div class="panel-heading">Detail Bukuu </div>
                        <div class="panel-body table-responsive">
                        <form action="+kembali.php" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">
                          <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <th>No</th>
                                    <th>foto</th>
                                    <th>Judul</th>
                                    <th>Isbn</th>
                                    <th>Tahun Terbit</th>
                                    <th>Pengarang</th>
                                    <th>Penerbit</th>
                                    <th>Deskripsi</th>
                                    <th></th>
                                  </tr>
                                </thead>
                                <tbody>
                                 <?php session_start();
$id=$_GET['id'];
include "config/koneksi.php";
include "config/library.php";
$sql_news = "SELECT*from yo_peminjaman where id_buku='$id'";
$qry_news = mysql_query($sql_news)
or die ("Gagal query tampil");
while($data_news=mysql_fetch_array($qry_news)){
  $id_pinjam=$data_news['id_peminjam'];
$id=$data_news['id_buku'];
$tgl_pinjam=$data_news['tgl_pinjam'];
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
<?php 

$a = '07';
$tgl_pinjam1=substr($tgl_pinjam,8,10);
$tgl_pinjam2=$tgl_pinjam1+$a;
$tgl_pinjam3=substr($tgl_pinjam,0,8);

$tgl_sekarang=substr($date,8,10); //$tgl_sekarang = tanggal kembali
$selisih_telat=$tgl_sekarang-$tgl_pinjam2;
$denda=$selisih_telat*'1000';
  ?>
                                  <tr>
                                  <td><input type="text" name="id_pinjam" class="form-control" value="<?php echo $id_pinjam ?>">
                                  <input type="text" name="id_buku" class="form-control" value="<?php echo $id ?>">
                                  <input type="text" name="id_anggota" class="form-control" value="<?php echo $_SESSION['id_anggota']; ?>">
                                  <input type="text" name="tgl_pinjam" class="form-control" value="<?php echo $tgl_pinjam ?>">
<input type="text" name="tgl_kembali" class="form-control" value="<?php echo $date ?>">
<input type="text" name="denda" class="form-control" value="<?php if($tgl_pinjam2<$tgl_sekarang){ 
                                   echo $rp.number_format($denda);}else{echo"-";} ?>"></td>
                                    <td>1</td>
                                    <td><img src="assets/buku/<?php echo $foto ?>" width="100px"></td>
                                    <td><?php echo $judul ?></td>
                                    <td><?php echo $isbn ?></td>
                                    <td><?php echo $tahun ?></td>
                                    <td><?php echo $pengarang ?></td>
                                    <td><?php echo $penerbit ?></td>
                                    <td><?php echo $deskripsi ?></td>
                                    <?php if($status==1){?><td><button type="submit"class="btn btn-info btn-circle btn-flat">Kembalikan</button></td>
                                  <?php }else{?><td><a class="btn btn-info btn-circle btn-flat disabled">Kembalikan</a></td><?php } ?>
                                  </tr>
                                  <?php }?>
                                </tbody>
                              </table>
                        
                        </div>
                    </div>
                </div>

                  <div class="panel panel-default">
                        <div class="panel-heading">*Denda telat Rp.1.000/hari<br>
                        *Durasi Pengembalian 7 hari</div>
                        <div class="panel-body">
                        
                              <div class="form-group">
                              <?php if($tgl_pinjam2<$tgl_sekarang){ //$id_pinjam2 itu tanggal harus kembali(hari)
                              ?>
                              <font color="red">*Anda terkena denda karena Telat <?php echo $selisih_telat ?> hari.</font><br>
                               <font color="red">*Denda = <?php echo $rp.number_format($denda) ?></font>
                              <?php } ?>
                                <label for="inputEmail3" class="col-sm-3 control-label">id_pinjam</label>
                                <div class="col-sm-9">
                                  <input type="text" name="id_pinjam" class="form-control" value="<?php echo $id_pinjam ?>" readonly>
                                  <input type="hidden" name="id_buku" class="form-control" value="<?php echo $id ?>">
                                  <input type="hidden" name="id_anggota" class="form-control" value="<?php echo $_SESSION['id_anggota']; ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Pinjam</label>
                                <div class="col-sm-9">
                                  <input type="text" name="tgl_pinjam" class="form-control" value="<?php echo $tgl_pinjam ?>" readonly>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Tanggal harus Kembali</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control" value="<?php echo $tgl_pinjam3.$tgl_pinjam2 ?>" readonly>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Tanggal Kembali</label>
                                <div class="col-sm-9">
                                  <input type="text" name="tgl_kembali" class="form-control" value="<?php echo $date ?>" readonly>
                                </div>
                              </div>
                               <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Denda</label>
                                <div class="col-sm-9">
                                  <input type="text" name="denda" class="form-control" value="<?php if($tgl_pinjam2<$tgl_sekarang){ 
                                   echo $rp.number_format($denda);}else{echo"-";} ?>" readonly>
                                </div>
                              </div>
                              </form>
            
            </div>
            
                           