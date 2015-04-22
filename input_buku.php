   <div class="col-md-3"></div>
   <div class="col-md-6">
                	<div class="panel panel-default">
                        <div class="panel-heading">Input form</div>
                        <div class="panel-body">
                        
                        	<form action="+buku.php" method="POST" enctype="multipart/form-data" class="form-horizontal" role="form">
                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-3 control-label">Judul</label>
                                <div class="col-sm-9">
                                  <input type="text" name="judul" class="form-control" placeholder="Judul">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Isbn</label>
                                <div class="col-sm-9">
                                  <input type="text" name="Isbn" class="form-control" id="inputPassword3" placeholder="isbn">
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
                                  <input type="text" name="jumlah" class="form-control"  placeholder="Jumlah">
                                </div>  </div>
                                   <div class="form-group">
                                    <label class="col-lg-3 control-label">Pengarang</label>
                                    <div class="col-lg-9">
                                        <select name="pengarang" class="form-control" name="country">
                                            <?php
include "config/koneksi.php";
echo "<option>---- Pilih Pengarang ----</option>";
$minta = "SELECT * FROM yo_pengarang ";
$eksekusi = mysql_query($minta);
while($hasil=mysql_fetch_array($eksekusi))
{
$id=$hasil['id_category'];
echo " <option value=$hasil[kd_pengarang]>$hasil[pengarang] </option>";
}
?>
                                        </select>
                                    </div>
                              </div>
                               <div class="form-group">
                                    <label class="col-lg-3 control-label">Pengarang</label>
                                    <div class="col-lg-9">
                                        <select name="penerbit" class="form-control" name="country">
                                            <?php
include "config/koneksi.php";
echo "<option>---- Pilih Penerbit ----</option>";
$minta = "SELECT * FROM yo_penerbit ";
$eksekusi = mysql_query($minta);
while($hasil=mysql_fetch_array($eksekusi))
{
$id=$hasil['id_category'];
echo " <option value=$hasil[kd_penerbit]>$hasil[penerbit] </option>";
}
?>
                                        </select>
                                    </div>
                              </div>
                              <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Deskripsi</label>
                                <div class="col-sm-9">
                                  <textarea type="text" name="deskripsi" class="form-control" placeholder="Deskripsi"></textarea>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Gambar</label>
                                <div class="col-sm-9">
                                  <input type="file" name="foto" class="form-control" placeholder="isbn">
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                     			</div>
                              </div>
                              <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                  <button type="submit" class="btn btn-info">Simpan</button>
                                </div>
                              </div>
                            </form>
                        
                        </div>
                    </div>
                </div>