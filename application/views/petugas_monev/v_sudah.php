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
            <form method="post" action="<?php echo base_url()?>Petugas_monev/update">
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
                        <td align="center"><input type="radio" name="a2" value="0" <?php if($value['a2']==1){echo "checked";} ?>></td>
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
                        <td></td>
                        <td>f. Arah penomoran kursi sesuai ketentuan</td>

                        <td align="center"><input type="radio" name="a3f" value="1" <?php if($value['a3f']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="a3f" value="0" <?php if($value['a3f']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="a3ft" class="form-control"  value="<?php echo $value['a3ft'] ?>"></td>
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
                    <tr>
                        <td align="center">5</td>
                        <td>PJL menerima dari PJR amplop LJU terisi dalam kondisi sudah disegel dan ABHP dengan menggunakan Berita Acara (BA.J1)</td>
                        <td align="center"><input type="radio" name="c5" value="1" <?php if($value['c5']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="c5" value="0" <?php if($value['c5']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="c5t" class="form-control" value="<?php echo $value['c5t'] ?>"></td>
                    </tr>
                    <tr>
                        <td align="center">6</td>
                        <td>PJDU menerima dari PJL amplop LJU terisi dan ABHP dengan menggunakan Berita Acara (BA.J2)</td>
                        <td align="center"><input type="radio" name="c6" value="1" <?php if($value['c6']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="c6" value="0" <?php if($value['c6']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="c6t" class="form-control" value="<?php echo $value['c6t'] ?>"></td>
                    </tr>
                </tbody>
            </table>
             <h4 class="box-title"></br><br>&nbsp;&nbsp;&nbsp;&nbsp;<b>D. Pengawasan Ujian Tertulis</b></h4>
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
                        <td>Apakah terdapat penyimpangan atas Tupoksi sebagai Pengawas: (Terlambat hadir, Pengawas main HP/membaca koran/ngobrol/mengerjakan soal/mengisi LJU, dll)</td>
                        <td align="center"><input type="radio" name="d1" value="1" <?php if($value['a1']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="d1" value="0" <?php if($value['a1']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="d1t" class="form-control" value="<?php echo $value['d1t'] ?>"></td>
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
                        <td align="center"><input type="radio" name="ae1" value="1" <?php if($value['ae1']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="ae1" value="0" <?php if($value['ae1']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="ae1t" class="form-control"  value="<?php echo $value['ae1t'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Perjokian</td>
                        <td align="center"><input type="radio" name="be1" value="1" <?php if($value['be1']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="be1" value="0" <?php if($value['be1']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="be1t" class="form-control"  value="<?php echo $value['be1t'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Menggunakan peralatan yang dilarang (a.l. Kalkulator/catatan dll)</td>
                        <td align="center"><input type="radio" name="ce1" value="1" <?php if($value['ce1']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="ce1" value="0" <?php if($value['ce1']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="ce1t" class="form-control" value="<?php echo $value['ce1t'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Kerjasama antar Peserta</td>
                        <td align="center"><input type="radio" name="de1" value="1" <?php if($value['de1']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="de1" value="0" <?php if($value['de1']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="de1t" class="form-control" value="<?php echo $value['de1t'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Lainnya...</td>
                        <td align="center"><input type="radio" name="ee1" value="1" <?php if($value['ee1']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="ee1" value="0" <?php if($value['ee1']==0){echo "checked";} ?>></td>
                        <td align="center"><input type="text" name="ee1t" class="form-control" value="<?php echo $value['eet'] ?>"></td>
                    </tr>
                    
                </tbody>
            </table>
             <h4 class="box-title"></br><br>&nbsp;&nbsp;&nbsp;&nbsp;<b>F. Data / Informasi dari Panlok</b></h4>
             <table class="table table-bordered" >
                <thead>
                    <tr>
                        <td align="center" rowspan="1">No</td>
                        <td align="center" rowspan="1">Uraian Pernyataan</td>
                        <td align="center" colspan="1" rowspan="1">Jumlah</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">1</td>
                        <td>Jumlah Pengawas Ujian :</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Dosen</td>
                        <td align="center"><input type="number" name="af1" required class="form-control" value="<?php echo $value['af1'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Guru</td>
                        <td align="center"><input type="number" name="bf1" required class="form-control" value="<?php echo $value['bf1'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Tenaga Kependidikan golongan III</td>
                        <td align="center"><input type="number" name="cf1" required class="form-control" value="<?php echo $value['cf1'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Mahasiswa</td>
                        <td align="center"><input type="number" name="df1" required class="form-control" value="<?php echo $value['df1'] ?>"></td>
                    </tr>
                    <tr>
                        <td align="center">2</td>
                        <td>Jumlah Pengawas ujian yang mengikuti pengarahan/pembekalan:</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Dosen</td>
                        <td align="center"><input type="number" name="af2" required class="form-control" value="<?php echo $value['af2'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Guru</td>
                        <td align="center"><input type="number" name="bf2" required class="form-control" value="<?php echo $value['bf2'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Tenaga Kependidikan golongan III</td>
                        <td align="center"><input type="number" name="cf2" required class="form-control" value="<?php echo $value['cf2'] ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Mahasiswa</td>
                        <td align="center"><input type="number" name="df2" required class="form-control" value="<?php echo $value['df2'] ?>"></td>
                    </tr>
                </tbody>
            </table>
             <table class="table table-bordered" >
                <thead>
                    <tr>
                        <td align="center" rowspan="2">No</td>
                        <td align="center" rowspan="2">Uraian Pernyataan</td>
                        <td align="center" colspan="2" rowspan="1">Jawaban</td>
                    </tr>
                    <td align="center" >Ya</td><td align="center" >Tidak</td>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">1</td>
                        <td>Jumlah Peserta Berkebutuhan khusus:</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>a. Tidak dapat melihat</td>
                        <td align="center"><input type="radio" name="aff1" value="1" required <?php if($value['aff1']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="aff1" value="0" required <?php if($value['aff1']==0){echo "checked";} ?>></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>b. Tidak dapat mendengar</td>
                        <td align="center"><input type="radio" name="bff1" value="1" required <?php if($value['bff1']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="bff1" value="0" required <?php if($value['bff1']==0){echo "checked";} ?>></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>c. Tidak dapat berjalan</td>
                        <td align="center"><input type="radio" name="cff1" value="1" required <?php if($value['cff1']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="cff1" value="0" required <?php if($value['cff1']==0){echo "checked";} ?>></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>d. Lainnya</td>
                        <td align="center"><input type="radio" name="dff1" value="1" required <?php if($value['dff1']==1){echo "checked";} ?>></td>
                        <td align="center"><input type="radio" name="dff1" value="0" required <?php if($value['dff1']==0){echo "checked";} ?>></td>
                    </tr>
                    <tr>
                        <td align="center">2</td>
                        <td>Jika ada, jelaskan tindakan apa yang dilakukan?</td>
                        <td align="center" colspan="2"><input type="text" class="form-control" name="ff2" required  value="<?php echo $value['ff2'] ?>"></td>
                    </tr>
                    <tr>
                        <td align="center">3</td>
                        <td>Tanggal berapa pengiriman LJU terisi, BA.U2 dan ABHP ke Pusval.</td>
                        <td align="center" colspan="2">Tanggal <input type="text" class="" name="ff3" required  value="<?php echo $value['ff3'] ?>"></td>
                    </tr>
                    
                </tbody>
            </table>
            <h4 class="box-title"></br><br>&nbsp;&nbsp;&nbsp;&nbsp;<b>G. Informasi lain yang dianggap penting</b></h4>
            <textarea class="textarea form-control" name="g"></textarea>
            <hr>
            <center><button type="submit" class="btn btn-success" <?php if($this->session->userdata('logged_admin')) { echo "style='display:none'";}?>>Simpan</button></center>
            </form>
            </div>
            </div>
        </div>
        </section>
<?php endforeach ?>