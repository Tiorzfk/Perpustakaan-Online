<?php
include "config/koneksi.php";

		$kode = $_GET['id'];
		$query = mysql_query("SELECT yo_buku.kd_penerbit,yo_buku.kd_pengarang,yo_buku.id_buku,yo_buku.judul,yo_buku.deskripsi,yo_buku.Isbn,yo_buku.jumlah,yo_buku.tahun_terbit, yo_buku.status,yo_buku.gambar,yo_pengarang.pengarang, yo_penerbit.penerbit
FROM (yo_buku INNER JOIN yo_pengarang on yo_buku.kd_pengarang=yo_pengarang.kd_pengarang)
INNER JOIN yo_penerbit on yo_buku.kd_penerbit=yo_penerbit.kd_penerbit where id_buku='$kode'");
		$tioo=mysql_fetch_array($query);
		$id=$tioo['id_buku'];
		$isbn=$tioo['Isbn'];
		$judul=$tioo['judul'];
		$tahun=$tioo['tahun_terbit'];
		$jumlah=$tioo['jumlah'];
		$deskripsi=$tioo['deskripsi'];
		$foto=$tioo['gambar'];
		$kd1=$tioo['kd_pengarang'];
		$kd2=$tioo['kd_penerbit'];
?>
<div class="col-md-3">
                	<div class="panel panel-default">
                        <div class="panel-heading">Edit form</div>
                        <div class="panel-body">
                        
                        	<form action="+edit.php" method="POST" class="form-horizontal" role="form">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Judul</label>
                                <div class="col-sm-9">
                                  <input type="text" name="judul" class="form-control" value="<?php echo $judul ?>">
                                  <input type="hidden" name="id" class="form-control" value="<?php echo $id ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Isbn</label>
                                <div class="col-sm-9">
                                  <input type="text" name="Isbn" class="form-control" id="inputPassword3" value="<?php echo $isbn ?>">
                                </div>
                              </div>
                               <div class="form-group">
                                    <label class="col-lg-3 control-label">Tahun</label>
                                    <div class="col-lg-9">
                                        <select class="form-control" name="tahun">
                                            <option value="">-- Tahun --</option>
                                             <?php for($x=10;$x<=16;$x++){
                                           echo" <option value='20$x'>20$x.</option>";
                                            }?>
                                        </select>
                                    </div>
                              </div>
                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Jumlah</label>
                                <div class="col-sm-9">
                                  <input type="text" name="jumlah" class="form-control"  value="<?php echo $jumlah ?>">
                                </div>  </div>
                                   <div class="form-group">
                                    <label class="col-lg-3 control-label">Pengarang</label>
                                    <div class="col-lg-9">
 <?php
include "config/koneksi.php";
$minta = "SELECT * FROM yo_pengarang ";
$eksekusi = mysql_query($minta);
$options="";
while($hasil=mysql_fetch_array($eksekusi))
{
	$id=$hasil['kd_pengarang'];
	$pengarang=$hasil['pengarang'];
	$isSel = ($kd1 == $id)?"selected":'';
 $options.= " <OPTION VALUE='$id' $isSel>$pengarang</option>'";
}
?><select name="pengarang" class="form-control">
 <option value="<?php echo $kd1; ?>">
 <?php echo $options;?></option>
                                        </select>
                                    </div>
                              </div>
                               <div class="form-group">
                                    <label class="col-lg-3 control-label">Pengarang</label>
                                    <div class="col-lg-9">
 <?php
include "config/koneksi.php";
$minta = "SELECT * FROM yo_penerbit ";
$eksekusi = mysql_query($minta);
$options="";
while($hasil=mysql_fetch_array($eksekusi))
{
	$id=$hasil['kd_penerbit'];
	$penerbit=$hasil['penerbit'];
	$isSel = ($kd2 == $id)?"selected":'';
 $options.= " <OPTION VALUE='$id' $isSel>$penerbit</option>'";
}
?><select name="penerbit" class="form-control">
 <option value="<?php echo $kd2; ?>">
 <?php echo $options;?></option>
 </select>
                                    </div>
                              </div>
                              <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Deskripsi</label>
                                <div class="col-sm-9">
                                  <textarea type="text" name="deskripsi" class="form-control"><?php echo $deskripsi ?></textarea>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Gambar</label>
                                <div class="col-sm-9">
                                  <img src="assets/buku/<?php echo $foto ?>" width="100px">
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                     			</div>
                              </div>
                              <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                  <button type="submit" class="btn btn-danger btn-xs">Simpan</button>
                                </div>
                              </div>
                            </form>
                        <div id="editio">
                        </div>
                        </div>
                    </div>
                </div>