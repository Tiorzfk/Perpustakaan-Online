
                <div class="warper container-fluid">
        	
            <div class="page-header"><h1>Buku <small>list</small></h1></div>
            
            
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
                                    <th>Pengarang</th>
                                    <th>Penerbit</th>
                                    <th>Stok</th>
                                    <th>Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                                                              									<?php
include "config/koneksi.php";
$sql_news = "SELECT yo_buku.Isbn,yo_buku.jumlah,yo_buku.id_buku,yo_buku.judul,yo_buku.status,yo_buku.gambar,yo_buku.tahun_terbit,yo_buku.deskripsi,
yo_pengarang.pengarang, yo_penerbit.penerbit
FROM (yo_buku INNER JOIN yo_pengarang on yo_buku.kd_pengarang=yo_pengarang.kd_pengarang)
INNER JOIN yo_penerbit on yo_buku.kd_penerbit=yo_penerbit.kd_penerbit where yo_buku.status='0'";
$qry_news = mysql_query($sql_news)
or die ("Gagal query tampil");
while($data_news=mysql_fetch_array($qry_news)){
$id=$data_news['id_buku'];
$judul=$data_news['judul'];
$pengarang=$data_news['pengarang'];
$penerbit=$data_news['penerbit'];
$status=$data_news['status'];
$foto=$data_news['gambar'];
$stok=$data_news['jumlah'];
$tahun=$data_news['tahun_terbit'];
$deskripsi=$data_news['deskripsi'];
$isbn=$data_news['Isbn'];
?>
                                  <tr>
                                    <td>1</td>
                                    <td><img src="assets/buku/<?php echo $foto ?>" width="100px"></td>
                                    <td><?php echo $judul ?></td>
                                    <td><?php echo $pengarang ?></td>
                                    <td><?php echo $penerbit ?></td>
                                    <td><?php echo $stok ?></td>
                                    <?php if ($_SESSION['level']=="admin"){ ?>	
                                    <td><a href="javascript:edit(<?php echo $id ?>);" class="btn btn-danger btn-xs">Ubah</a><a href="hapusbuku.php?idhapus=<?php echo $id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a><a href="javascript:detail(<?php echo $id ?>);" class="btn btn-danger btn-xs">Detail</a></td>
                                    <?php }else{?>
                                    <td><a href="+pinjam.php?id=<?php echo $id ?>
                                    &id_anggota=<?php echo $_SESSION['id_anggota'];?>
                                    &judul=<?php echo $judul ?>
                                    &user=<?php echo $_SESSION['username'];?>
                                    &nama=<?php echo $_SESSION['nama'];?>
                                    &stok=<?php echo $stok ?>
                                    &tahun=<?php echo $tahun ?>
                                    &deskripsi=<?php echo $deskripsi ?>
                                    &pengarang=<?php echo $pengarang ?>
                                    &penerbit=<?php echo $penerbit ?>
                                    &foto=<?php echo $foto ?>
                                    &isbn=<?php echo $isbn ?>);" class="btn btn-danger btn-xs">Pinjam</a><a href="javascript:detail(<?php echo $id ?>);" class="btn btn-danger btn-xs">Detail</a></td>
                                    <?php }?>
                                     </tr>
                   <?php } ?>
                              </tbody>
                            </table>
                         </div>

                    </div>
                </div>
                
                <div id="tio">
                </div>
            
            </div>
<?php if($_SESSION['level']=="admin"){?>
<a href="javascript:peminjaman();" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-eye-close"></i> Lihat Data Peminjaman </a>
<a href="javascript:pengembalian();" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-eye-close"></i> Lihat Data Pengembalian </a>
<?php } ?>
<div id="peminjaman">
</div>