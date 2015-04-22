 <div class="page-header"><h1>Data Pengembalian Buku<small>list</small></h1></div>
            
            
            <div class="row">
            
                <div class="col-md-9">
                    <div class="panel panel-default">
                        <div class="panel-body table-responsive">
                        
                            <table class="table table-striped no-margn">
                              <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Peminjam</th>
                                    <th>Judul Buku</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Denda</th>
                                </tr>
                              </thead>
                              <tbody>
                                                                                                                <?php
include "config/koneksi.php";
$sql_news = "SELECT id_kembali,username,tgl_pinjam,judul_buku,tgl_kembali,denda from yo_pengembalian
INNER JOIN yo_peminjaman on yo_peminjaman.id_peminjam=yo_pengembalian.id_pinjam ";
$qry_news = mysql_query($sql_news)
or die ("Gagal query tampil");
while($data_news=mysql_fetch_array($qry_news)){
  $id=$data_news['id_kembali'];
$username=$data_news['username'];
$tgl_pinjam=$data_news['tgl_pinjam'];
$judul_buku=$data_news['judul_buku'];
$tgl_kembali=$data_news['tgl_kembali'];
$denda=$data_news['denda'];
?>
                                  <tr>
                                    <td><?php echo $id ?></td>
                                    <td><?php echo $username ?></td>
                                    <td><?php echo $judul_buku ?></td>
                                    <td><?php echo $tgl_pinjam ?></td>
                                    <td><?php echo $tgl_kembali ?></td>
                                     <td><?php echo $denda ?></td>
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