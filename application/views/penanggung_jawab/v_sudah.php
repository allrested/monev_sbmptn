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
              <h3 class="box-title">Penanggung Jawab Ruang Ujian dimohon bantuannya untuk menjawab setiap pertanyaan dengan cara mengisi jumlah pada kolom jawaban yang sesuai disertai uraian/penjelasan atas jawaban tersebut. <h3>
            <form method="post" action="<?php echo base_url()?>Penanggung_jawab/update">
            <table class="table table-bordered" >
                <thead>
                    <tr>
                        <td align="center" rowspan="2">No</td>
                        <td align="center" rowspan="2">Pertanyaan</td>
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
                        <td>Apakah Anda menerima surat tugas dari Panitia Lokal?</td>
                        <td align="center"><input type="number" class="form-control" name="1y" value="<?php echo $value['1y'] ?>" ></td>
                        <td align="center"><input type="number" class="form-control" name="1n"  value="<?php echo $value['1n'] ?>"></td>
                        <td align="center"><input type="text" name="1t" class="form-control" value="<?php echo $value['1t'] ?>">
                    <a href="#" id="ttip_id_lokasi" data-toggle="tooltip" title="" lokasi="" ujian""="" data-original-title="?">
          <span class="fa fa-question-circle"></span></a></td></tr>
                    <tr>
                        <td align="center">2</td>
                        <td>Apakah Anda diminta mengisi Surat Pernyataan Pengawas Ujian (SPU02) ?</td>
                        <td align="center"><input type="number" class="form-control" name="2y"  value="<?php echo $value['2y'] ?>"></td>
                        <td align="center"><input type="number" class="form-control" name="2n"  value="<?php echo $value['2n'] ?>"></td>
                        <td align="center"><input type="text" name="2t" class="form-control" value="<?php echo $value['2t'] ?>">
                    <a href="#" id="ttip_id_lokasi" data-toggle="tooltip" title="" lokasi="" ujian""="" data-original-title="?">
          <span class="fa fa-question-circle"></span></a></td></tr>
                    <tr>
                        <td align="center">3</td>
                        <td>Apakah Anda mengikuti pengarahan/pembekalan dari Panlok sebelum pelaksanaan ujian ?</td>
                        <td align="center"><input type="number" class="form-control" name="3y"  value="<?php echo $value['3y'] ?>"></td>
                        <td align="center"><input type="number" class="form-control" name="3n"  value="<?php echo $value['3n'] ?>"></td>
                        <td align="center"><input type="text" name="3t" class="form-control" value="<?php echo $value['3t'] ?>">
                    <a href="#" id="ttip_id_lokasi" data-toggle="tooltip" title="" lokasi="" ujian""="" data-original-title="?">
          <span class="fa fa-question-circle"></span></a></td></tr>
                    <tr>
                        <td align="center">4</td>
                        <td>Apakah dalam pengarahan/pembekalan disampaikan penjelasan teknis cara pengawasan ?</td>
                        <td align="center"><input type="number" class="form-control" name="4y"  value="<?php echo $value['4y'] ?>"></td>
                        <td align="center"><input type="number" class="form-control" name="4n"  value="<?php echo $value['4n'] ?>"></td>
                        <td align="center"><input type="text" name="4t" class="form-control" value="<?php echo $value['4t'] ?>">
                    <a href="#" id="ttip_id_lokasi" data-toggle="tooltip" title="" lokasi="" ujian""="" data-original-title="?">
          <span class="fa fa-question-circle"></span></a></td></tr>
                    <tr>
                        <td align="center">5</td>
                        <td>Apakah Anda menerima NSU dari Penanggungjawab Lokasi disertai Berita Acara BA.N2 ? </td>
                        <td align="center"><input type="number" class="form-control" name="5y"  value="<?php echo $value['5y'] ?>"></td>
                        <td align="center"><input type="number" class="form-control" name="5n"  value="<?php echo $value['5n'] ?>"></td>
                        <td align="center"><input type="text" name="5t" class="form-control" value="<?php echo $value['5t'] ?>">
                    <a href="#" id="ttip_id_lokasi" data-toggle="tooltip" title="" lokasi="" ujian""="" data-original-title="?">
          <span class="fa fa-question-circle"></span></a></td></tr>
                    <tr>
                        <td align="center">6</td>
                        <td>Apakah amplop NSU yang Anda terima dalam kondisi utuh dan tersegel ?</td>
                        <td align="center"><input type="number" class="form-control" name="6y"  value="<?php echo $value['6y'] ?>"></td>
                        <td align="center"><input type="number" class="form-control" name="6n"  value="<?php echo $value['6n'] ?>"></td>
                        <td align="center"><input type="text" name="6t" class="form-control" value="<?php echo $value['6t'] ?>">
                    <a href="#" id="ttip_id_lokasi" data-toggle="tooltip" title="" lokasi="" ujian""="" data-original-title="?">
          <span class="fa fa-question-circle"></span></a></td></tr>
                    <tr>
                        <td align="center">7</td>
                        <td>Apakah LJU dan BA.U2 yang Anda terima dalam kondisi baik dan lengkap ?</td>
                        <td align="center"><input type="number" class="form-control" name="7y"  value="<?php echo $value['7y'] ?>"></td>
                        <td align="center"><input type="number" class="form-control" name="7n"  value="<?php echo $value['7n'] ?>"></td>
                        <td align="center"><input type="text" name="7t" class="form-control" value="<?php echo $value['7t'] ?>">
                    <a href="#" id="ttip_id_lokasi" data-toggle="tooltip" title="" lokasi="" ujian""="" data-original-title="?">
          <span class="fa fa-question-circle"></span></a></td></tr>
                    <tr>
                        <td align="center">8</td>
                        <td>Apakah Anda menerima kelengkapan alat tulis ?</td>
                        <td align="center"><input type="number" class="form-control" name="8y" value="<?php echo $value['8y'] ?>" ></td>
                        <td align="center"><input type="number" class="form-control" name="8n" value="<?php echo $value['8n'] ?>" ></td>
                        <td align="center"><input type="text" name="8t" class="form-control" value="<?php echo $value['8t'] ?>">
                    <a href="#" id="ttip_id_lokasi" data-toggle="tooltip" title="" lokasi="" ujian""="" data-original-title="?">
          <span class="fa fa-question-circle"></span></a></td></tr>
                    <tr>
                        <td align="center">9</td>
                        <td>Apakah Anda mengisi BA.U2. baik ada pelanggaran maupun tidak ada pelanggaran?</td>
                        <td align="center"><input type="number" class="form-control" name="9y"  value="<?php echo $value['9y'] ?>"></td>
                        <td align="center"><input type="number" class="form-control" name="9n"  value="<?php echo $value['9n'] ?>"></td>
                        <td align="center"><input type="text" name="9t" class="form-control" value="<?php echo $value['9t'] ?>">
                    <a href="#" id="ttip_id_lokasi" data-toggle="tooltip" title="" lokasi="" ujian""="" data-original-title="?">
          <span class="fa fa-question-circle"></span></a></td></tr>
                    <tr>
                        <td align="center">10</td>
                        <td>Jika ada peserta yang tidak hadir pada saat ujian, kursi dengan nomor ujian peserta yang tidak hadir tersebut tetap Anda kosongkan ? </td>
                        <td align="center"><input type="number" class="form-control" name="10y"  value="<?php echo $value['10y'] ?>"></td>
                        <td align="center"><input type="number" class="form-control" name="10n"  value="<?php echo $value['10n'] ?>"></td>
                        <td align="center"><input type="text" name="10t" class="form-control" value="<?php echo $value['10t'] ?>">
                    <a href="#" id="ttip_id_lokasi" data-toggle="tooltip" title="" lokasi="" ujian""="" data-original-title="?">
          <span class="fa fa-question-circle"></span></a></td></tr>
                    <tr>
                        <td align="center">11</td>
                        <td>Apakah Anda menerima amplop NSU berisi empat kode soal untuk setiap materi ujian ?</td>
                        <td align="center"><input type="number" class="form-control" name="11y"  value="<?php echo $value['11y'] ?>"></td>
                        <td align="center"><input type="number" class="form-control" name="11n" value="<?php echo $value['11n'] ?>"></td>
                        <td align="center"><input type="text" name="11t" class="form-control" value="<?php echo $value['11t'] ?>">
                    <a href="#" id="ttip_id_lokasi" data-toggle="tooltip" title="" lokasi="" ujian""="" data-original-title="?">
          <span class="fa fa-question-circle"></span></a></td></tr>
                    <tr>
                        <td align="center">12</td>
                        <td>Apakah Anda menerima NSU setiap kode sebanyak 5 eksemplar ? </td>
                        <td align="center"><input type="number" class="form-control" name="12y"  value="<?php echo $value['12y'] ?>"></td>
                        <td align="center"><input type="number" class="form-control" name="12n"  value="<?php echo $value['12n'] ?>"></td>
                        <td align="center"><input type="text" name="12t" class="form-control" value="<?php echo $value['12t'] ?>">
                    <a href="#" id="ttip_id_lokasi" data-toggle="tooltip" title="" lokasi="" ujian""="" data-original-title="?">
          <span class="fa fa-question-circle"></span></a></td></tr>
                    <tr>
                        <td align="center">13</td>
                        <td>Apakah peserta yang tidak hadir kursinya diberi NSU ?</td>
                        <td align="center"><input type="number" class="form-control" name="13y"  value="<?php echo $value['13y'] ?>"></td>
                        <td align="center"><input type="number" class="form-control" name="13n"  value="<?php echo $value['13n'] ?>"></td>
                        <td align="center"><input type="text" name="13t" class="form-control" value="<?php echo $value['13t'] ?>">
                    <a href="#" id="ttip_id_lokasi" data-toggle="tooltip" title="" lokasi="" ujian""="" data-original-title="?">
          <span class="fa fa-question-circle"></span></a></td></tr>
                    <tr>
                        <td align="center">14</td>
                        <td>Apakah Anda mencocokkan tandatangan peserta dalam Album Bukti Hadir Peserta (ABHP) dengan tandatangan peserta pada Kartu Tanda Peserta atau Kartu Identitas Diri ?</td>
                        <td align="center"><input type="number" class="form-control" name="14y"  value="<?php echo $value['14y'] ?>"></td>
                        <td align="center"><input type="number" class="form-control" name="14n"  value="<?php echo $value['14n'] ?>"></td>
                        <td align="center"><input type="text" name="14t" class="form-control" value="<?php echo $value['14t'] ?>">
                    <a href="#" id="ttip_id_lokasi" data-toggle="tooltip" title="" lokasi="" ujian""="" data-original-title="?">
          <span class="fa fa-question-circle"></span></a></td></tr>
                    <tr>
                        <td align="center">15</td>
                        <td>Apakah Anda menyerahkan seluruh NSU, LJU, dan BA.U2 yang tidak terpakai kepada Penanggung Jawab Lokasi ?</td>
                        <td align="center"><input type="number" class="form-control" name="15y"  value="<?php echo $value['15y'] ?>"></td>
                        <td align="center"><input type="number" class="form-control" name="15n"  value="<?php echo $value['15n'] ?>"></td>
                        <td align="center"><input type="text" name="15t" class="form-control" value="<?php echo $value['15t'] ?>">
                    <a href="#" id="ttip_id_lokasi" data-toggle="tooltip" title="" lokasi="" ujian""="" data-original-title="?">
          <span class="fa fa-question-circle"></span></a></td></tr>
                    <tr>
                        <td align="center">16</td>
                        <td>Jika ada peserta yang terlambat masuk lebih dari tiga puluh menit, apakah Anda melarang untuk mengikuti ujian?</td>
                        <td align="center"><input type="number" class="form-control" name="16y" value="<?php echo $value['16y'] ?>" ></td>
                        <td align="center"><input type="number" class="form-control" name="16n" value="<?php echo $value['16n'] ?>" ></td>
                        <td align="center"><input type="text" name="16t" class="form-control" value="<?php echo $value['16t'] ?>">
                    <a href="#" id="ttip_id_lokasi" data-toggle="tooltip" title="" lokasi="" ujian""="" data-original-title="?">
          <span class="fa fa-question-circle"></span></a></td></tr>
                    <tr>
                        <td align="center">17</td>
                        <td>Apakah Anda mengumpulkan, menghitung, dan  menyusun LJU terisi dengan urutan nomor peserta terkecil paling atas ?</td>
                        <td align="center"><input type="number" class="form-control" name="17y" value="<?php echo $value['17y'] ?>" ></td>
                        <td align="center"><input type="number" class="form-control" name="17n" value="<?php echo $value['17n'] ?>" ></td>
                        <td align="center"><input type="text" name="17t" class="form-control" value="<?php echo $value['17t'] ?>">
                    <a href="#" id="ttip_id_lokasi" data-toggle="tooltip" title="" lokasi="" ujian""="" data-original-title="?">
          <span class="fa fa-question-circle"></span></a></td></tr>
                    <tr>
                        <td align="center">18</td>
                        <td>Apakah Anda menyerahkan LJU terisi kepada Penanggung Jawab Lokasi dengan menggunakan Berita Acara BA.J1 ?</td>
                        <td align="center"><input type="number" class="form-control" name="18y"  value="<?php echo $value['18y'] ?>"></td>
                        <td align="center"><input type="number" class="form-control" name="18n"  value="<?php echo $value['18n'] ?>"></td>
                        <td align="center"><input type="text" name="18t" class="form-control" value="<?php echo $value['18t'] ?>">
                    <a href="#" id="ttip_id_lokasi" data-toggle="tooltip" title="" lokasi="" ujian""="" data-original-title="?">
          <span class="fa fa-question-circle"></span></a></td></tr>
                </tbody>
            </table>
            <center><button type="submit" class="btn btn-success">Update</button></center>
            </form>
            </div>
            </div>
        </div>
        </section>
<?php endforeach ?>