 <div class="page-header"><h1>Data Peminjaman<small>list</small></h1></div>
            
            
            <div class="row">
            
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-body table-responsive">
                        
                            <table class="table table-striped no-margn">
                              <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>Judul</th>
                                    <th>peminjam</th>
                                    <th>Tanggal pinjam</th>
                                    <th>status</th>
                                    <th>Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                                                                                                <?php
include "config/koneksi.php";
$sql_news = "SELECT *from yo_peminjaman";
$qry_news = mysql_query($sql_news)
or die ("Gagal query tampil");
while($data_news=mysql_fetch_array($qry_news)){
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
                                  <tr>
                                    <td>1</td>
                                    <td><img src="assets/buku/<?php echo $foto ?>" width="100px"></td>
                                    <td><?php echo $judul ?></td>
                                    <td><?php echo $nama ?></td>
                                    <td><?php echo $pinjam ?></td>
                                    <td><?php if($status=="1"){echo"belum dikembalikan";}else{echo"sudah dikembalikan";}?></td>
                                    <td><a href="javascript:detail3(<?php echo $id ?>);" class="btn btn-danger btn-xs">Detail</a><a href="javascript:detail_peminjam(<?php echo $id ?>);" class="btn btn-danger btn-xs">Detail Peminjam</a></td>
                                 </tr>
                   <?php } ?>
                              </tbody>
                            </table>
                         </div>
                         
                    </div>
                </div>
                
                <div id="tio2">
                </div>
            
            </div>