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
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <?php session_start(); if ($_SESSION['level']=="admin"){ ?>
                                    <th>Password</th>
                                    <?php } ?>
                                    <th>Alamat</th>
                                    <th>No_Telp</th>
                                </tr>
                              </thead>
                              <tbody>
                                                                              									<?php
include "config/koneksi.php";
$sql_news = "SELECT*from yo_anggota";
$qry_news = mysql_query($sql_news)
or die ("Gagal query tampil");
while($data_news=mysql_fetch_array($qry_news)){
$id=$data_news['id_anggota'];
$nama=$data_news['nama'];
$username=$data_news['username'];
$password=$data_news['password'];
$alamat=$data_news['email'];
$no=$data_news['no_telp'];
?>
                                  <tr>
                                    <td><?php echo $id ?></td>
                                    <td><?php echo $nama ?></td>
                                    <td><?php echo $username ?></td>
                                    <?php if ($_SESSION['level']=="admin"){ ?> 
                                    <td><?php echo $password ?></td>
                                    <?php } ?>
                                    <td><?php echo $alamat ?></td>
                                    <td><?php echo $no ?></td>
                                    <?php if ($_SESSION['level']=="admin"){ ?>	
                                    <td><a href="hapusanggota.php?idhapus=<?php echo $id ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a></td>
                                    
                                    <?php }?>
                                     </tr>
                   <?php } ?>
                              </tbody>
                            </table>
                         </div>

                    </div>
                </div>
                
      