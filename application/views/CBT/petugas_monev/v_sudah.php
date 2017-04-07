 <?php foreach ($get as $key => $value): ?>
     
 <section class="content-header">
 
            <h1>
                QUISIONER SBMPTN 2017
                <small></small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h4 class="box-title"></h3><br><br></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
              <h3 class="box-title">&nbsp;&nbsp;&nbsp;&nbsp;Penanggung Jawab Ruang Ujian dimohon bantuannya untuk menjawab setiap Uraian Pernyataan dengan cara mengisi pada kolom jawaban yang &nbsp;&nbsp;&nbsp;&nbsp;sesuai&nbsp;disertai uraian/penjelasan atas jawaban tersebut. <h3>
              <h4 class="box-title"></br><br>&nbsp;&nbsp;&nbsp;&nbsp;<b>A. Keadaan Ruangan Ujian Pelaksanaan SBMPTN</b></h4>
            <form method="post" action="<?php echo base_url()?>CBT/Petugas_monev_update">
            <table class="table table-bordered" >
                <thead>
                    <tr>
                        <td align="center" rowspan="2">No</td>
                        <td align="center" rowspan="2">Uraian Pernyataan</td>
                        <td align="center" colspan="2" rowspan="1">Jawaban</td>
                        <td align="center" colspan="2" rowspan="2">Berikan Penjelasan Jika Jawaban ‘Tidak’</td>
                    </tr><tr>
                        <td align="center" rowspan="1">Ya</td>
                        <td align="center" rowspan="1">Tidak</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">1</td>
                        <td>Kapasitas Ruangan Ujian 20 orang</td>
                        <td align="center"><input type="radio" name="a1" value="1" <?php if($value['a1']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="a1" value="0" <?php if($value['a1']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="a1t" class="form-control" value="<?php echo $value['a1t'] ?>"></td>
                    </tr>
                    <tr>
                        <td align="center">2</td>
                        <td>Pada ruangan besar, peserta dikelompokkan dalam kelipatan 20 orang dengan pengawas masing-masing dua orang</td>
                        <td align="center"><input type="radio" name="a2" value="1" <?php if($value['a2']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="a2" value="0" <?php if($value['a2']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="a2t" class="form-control" value="<?php echo $value['a2t'] ?>"></td>
                    </tr>
                    <tr>
                        <td align="center">3</td>
                        <td>Pada Ruangan ujian :</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>a. Penerangan Baik</td>

                        <td align="center"><input type="radio" name="a3a" value="1" <?php if($value['a3a']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="a3a" value="0" <?php if($value['a3a']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="a3at" class="form-control" value="<?php echo $value['a3at'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>b. Sirkulasi Udara Baik</td>

                        <td align="center"><input type="radio" name="a3b" value="1"  <?php if($value['a3b']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="a3b" value="0"  <?php if($value['a3b']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="a3bt" class="form-control"  value="<?php echo $value['a3bt'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>c. Kondisi kursi ujian baik/nyaman</td>

                        <td align="center"><input type="radio" name="a3c" value="1" <?php if($value['a3c']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="a3c" value="0" <?php if($value['a3c']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="a3ct" class="form-control" value="<?php echo $value['a3ct'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>d. Kondisi meja ujian baik/nyaman</td>

                        <td align="center"><input type="radio" name="a3d" value="1" <?php if($value['a3d']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="a3d" value="0" <?php if($value['a3d']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="a3dt" class="form-control"  value="<?php echo $value['a3dt'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>e. Jarak antar kursi memenuhi ketentuan (60x80 cm)</td>

                        <td align="center"><input type="radio" name="a3e" value="1" <?php if($value['a3e']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="a3e" value="0" <?php if($value['a3e']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="a3et" class="form-control" value="<?php echo $value['a3et'] ?>"></td>
                    </tr>
                    <tr>
                        <td align="center">4</td>
                        <td>Terdapat petunjuk menuju lokasi ujian yang jelas</td>
                        <td align="center"><input type="radio" name="a4" value="1" <?php if($value['a4']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="a4" value="0" <?php if($value['a4']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="a4t" class="form-control" value="<?php echo $value['a4t'] ?>"></td>
                    </tr>
                    <tr>
                        <td align="center">5</td>
                        <td>Terdapat petunjuk menuju menuju ruang ujian yang jelas</td>
                        <td align="center"><input type="radio" name="a5" value="1" <?php if($value['a5']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="a5" value="0" <?php if($value['a5']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="a5t" class="form-control" value="<?php echo $value['a5t'] ?>"></td>
                    </tr>
                </tbody>
            </table>
             <h4 class="box-title"></br><br>&nbsp;&nbsp;&nbsp;&nbsp;<b>B. Keadaan Dokumen Kelengkapan Administrasi Ujian</b></h4>
             <table class="table table-bordered" >
                <thead>
                    <tr>
                        <td align="center" rowspan="2">No</td>
                        <td align="center" rowspan="2">Uraian Pernyataan</td>
                        <td align="center" colspan="2" rowspan="1">Jawaban</td>
                        <td align="center" colspan="2" rowspan="2">Berikan Penjelasan Jika Jawaban ‘Tidak’</td>
                    </tr><tr>
                        <td align="center" rowspan="1">Ya</td>
                        <td align="center" rowspan="1">Tidak</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">1</td>
                        <td>Album Bukti Hadir Peserta (ABHP) disusun per dua puluhan</td>
                        <td align="center"><input type="radio" name="b1" value="1" <?php if($value['b1']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="b1" value="0" <?php if($value['b1']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="b1t" class="form-control" value="<?php echo $value['b1t'] ?>"></td>
                    </tr>
                    <tr>
                        <td align="center">2</td>
                        <td>Setiap ruang ujian menerima Album Bukti Hadir Peserta (ABHP)</td>
                        <td align="center"><input type="radio" name="b2" value="1" <?php if($value['b2']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="b2" value="0" <?php if($value['b2']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="b2t" class="form-control" value="<?php echo $value['b2t'] ?>"></td>
                    </tr>
                    <tr>
                        <td align="center">3</td>
                        <td>Setiap Pengawas mengisi Surat Pernyataan SPU02</td>
                        <td align="center"><input type="radio" name="b3" value="1" <?php if($value['b3']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="b3" value="0" <?php if($value['b3']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="b3t" class="form-control" value="<?php echo $value['b3t'] ?>"></td>
                    </tr>
                    <tr>
                        <td align="center">4</td>
                        <td>Panlok membuat surat tugas bagi pelaksana ujian (Penanggung jawab Lokasi, Penaggungjawab Ruang Ujian, Pengawas)</td>
                        <td align="center"><input type="radio" name="b4" value="1" <?php if($value['b4']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="b4" value="0" <?php if($value['b4']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="b4t" class="form-control" value="<?php echo $value['b4t'] ?>"></td>
                    </tr>
                </tbody>
            </table>
             <h4 class="box-title"></br><br>&nbsp;&nbsp;&nbsp;&nbsp;<b>C. Dokumen Ujian</b></h4>
             <table class="table table-bordered" >
                <thead>
                    <tr>
                        <td align="center" rowspan="2">No</td>
                        <td align="center" rowspan="2">Uraian Pernyataan</td>
                        <td align="center" colspan="2" rowspan="1">Jawaban</td>
                        <td align="center" colspan="2" rowspan="2">Berikan Penjelasan Jika Jawaban ‘Tidak’</td>
                    </tr><tr>
                        <td align="center" rowspan="1">Ya</td>
                        <td align="center" rowspan="1">Tidak</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">1</td>
                        <td>Penanggung Jawab Dokumen Ujian (PJDU) mengelompokkan dan labeling pada dokumen ujian berdasarkan Sektor, Lokasi, Ruang Ujian dan Waktu Ujian sesuai</td>
                        <td align="center"><input type="radio" name="c1" value="1" <?php if($value['c1']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="c1" value="0" <?php if($value['c1']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="c1t" class="form-control" value="<?php echo $value['c1t'] ?>"></td>
                    </tr>
                    <tr>
                        <td align="center">2</td>
                        <td>PJDU mendistribusikan NSU, LJU dan ABHP kepada Penanggung Jawab Lokasi atau Sektor menggunakan Berita Acara (BA.N2)</td>
                        <td align="center"><input type="radio" name="c2" value="1" <?php if($value['c2']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="c2" value="0" <?php if($value['c2']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="c2t" class="form-control" value="<?php echo $value['c2t'] ?>"></td>
                    </tr>
                    <tr>
                        <td align="center">3</td>
                        <td>Penanggung Jawab Ruang menerima Dokumen Ujian (NSU, LJU, dan BA.U2) dari Penanggung Jawab Lokasi dalam kondisi baik dan lengkap dengan menggunakan Berita Acara (BA.N3)</td>
                        <td align="center"><input type="radio" name="c3" value="1" <?php if($value['c3']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="c3" value="0" <?php if($value['c3']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="c3t" class="form-control" value="<?php echo $value['c3t'] ?>"></td>
                    </tr>
                    <tr>
                        <td align="center">4</td>
                        <td>Koordinator Bidang Pelaksana Ujian menerima Album Bukti Hadir Peserta (ABHP) dari Koordinator Bidang Pendaftaran dan TIK Berita Acara (BA.D)</td>
                        <td align="center"><input type="radio" name="c4" value="1" <?php if($value['c4']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="c4" value="0" <?php if($value['c4']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="c4t" class="form-control" value="<?php echo $value['c4t'] ?>"></td>
                    </tr>
                    
                </tbody>
            </table>
            <h4 class="box-title"></br><br>&nbsp;&nbsp;&nbsp;&nbsp;<b>D. Pengawasan Ujian</b></h4>
             <table class="table table-bordered" >
                <thead>
                    <tr>
                        <td align="center" rowspan="2">No</td>
                        <td align="center" rowspan="2">Uraian Pernyataan</td>
                        <td align="center" colspan="2" rowspan="1">Jawaban</td>
                        <td align="center" colspan="2" rowspan="2">Penanganan yang dilakukan</td>
                    </tr><tr>
                        <td align="center" rowspan="1">Ya</td>
                        <td align="center" rowspan="1">Tidak</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">1</td>
                        <td>Apakah terdapat penyimpangan atas Tupoksi sebagai Pengawas:</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Terlambat Hadir</td>
                        <td align="center"><input type="radio" name="d1" value="1" <?php if($value['d1']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="d1" value="0" <?php if($value['d1']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="d1t" class="form-control"  value="<?php echo $value['d1t'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Pengawas Main HP</td>
                        <td align="center"><input type="radio" name="d2" value="1" <?php if($value['d2']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="d2" value="0" <?php if($value['d2']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="d2t" class="form-control" value="<?php echo $value['d2t'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Pengawas Membaca Koran</td>
                        <td align="center"><input type="radio" name="d3" value="1" <?php if($value['d3']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="d3" value="0" <?php if($value['d3']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="d3t" class="form-control"  value="<?php echo $value['d3t'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Pengawas Mengobrol</td>
                        <td align="center"><input type="radio" name="d4" value="1" <?php if($value['d4']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="d4" value="0" <?php if($value['d4']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="d4t" class="form-control"  value="<?php echo $value['d4t'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Pengawas Mengerjakan Soal</td>
                        <td align="center"><input type="radio" name="d5" value="1" <?php if($value['d5']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="d5" value="0" <?php if($value['d5']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="d5t" class="form-control"  value="<?php echo $value['d5t'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Pengawas Mengisi LJU</td>
                        <td align="center"><input type="radio" name="d6" value="1" <?php if($value['d6']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="d6" value="0" <?php if($value['d6']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="d6t" class="form-control"  value="<?php echo $value['d6t'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Lainnya...</td>
                        <td align="center"><input type="radio" name="d7" value="1" <?php if($value['d7']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="d7" value="0" <?php if($value['d7']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="d7t" class="form-control"  value="<?php echo $value['d7t'] ?>"></td>
                    </tr>
                </tbody>
            </table>
             <h4 class="box-title"></br><br>&nbsp;&nbsp;&nbsp;&nbsp;<b>E. Kecurangan Peserta</b></h4>
             <table class="table table-bordered" >
                <thead>
                    <tr>
                        <td align="center" rowspan="2">No</td>
                        <td align="center" rowspan="2">Uraian Pernyataan</td>
                        <td align="center" colspan="2" rowspan="1">Jawaban</td>
                        <td align="center" colspan="2" rowspan="2">Penanganan yang dilakukan</td>
                    </tr><tr>
                        <td align="center" rowspan="1">Ya</td>
                        <td align="center" rowspan="1">Tidak</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">1</td>
                        <td>Apakah terdapat kecurangan peserta :</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Menggunakan HP</td>
                        <td align="center"><input type="radio" name="e1" value="1"  <?php if($value['e1']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="e1" value="0"  <?php if($value['e1']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="e1t" class="form-control"  value="<?php echo $value['e1t'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Perjokian</td>
                        <td align="center"><input type="radio" name="e2" value="1"  <?php if($value['e2']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="e2" value="0"  <?php if($value['e2']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="e2t" class="form-control"  value="<?php echo $value['e2t'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Menggunakan peralatan yang dilarang (a.l. Kalkulator/catatan dll)</td>
                        <td align="center"><input type="radio" name="e3" value="1"  <?php if($value['e3']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="e3" value="0"  <?php if($value['e3']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="e3t" class="form-control"  value="<?php echo $value['e3t'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Kerjasama antar Peserta</td>
                        <td align="center"><input type="radio" name="e4" value="1"  <?php if($value['e4']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="e4" value="0"  <?php if($value['e4']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="e4t" class="form-control"  value="<?php echo $value['e4t'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Lainnya...</td>
                        <td align="center"><input type="radio" name="e5" value="1"  <?php if($value['e5']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="e5" value="0"  <?php if($value['e5']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="e5t" class="form-control"  value="<?php echo $value['e5t'] ?>"></td>
                    </tr>
                </tbody>
            </table>
            <h4 class="box-title"></br><br>&nbsp;&nbsp;&nbsp;&nbsp;<b>F. Keterangan/Informasi lain yang dianggap penting</b></h4>
            <textarea class="form-control" name="f"> <?php echo $value['f'] ?></textarea>
            <hr>
            <center><button type="submit" class="btn btn-success" <?php if($this->session->userdata('logged_admin')) { echo "style='display:none'";}?>>Simpan</button></center>
            </form>
            </div>
            </div>
        </div>
        </section>
<?php endforeach ?>