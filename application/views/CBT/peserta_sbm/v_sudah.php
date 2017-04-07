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
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
              <h3 class="box-title">Peserta ujian dimohon bantuannya untuk menjawab setiap pertanyaan dengan cara memilih radio button dibawah<h3>
            <form method="post" action="<?php echo base_url()?>CBT/peserta_sbm_update">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td align="center">No</td>
                        <td align="center">Pertanyaan</td>
                        <td align="center">(akumulatif jawaban)<br> "Ya"</td>
                        <td align="center">(akumulatif jawaban)<br> "Tidak"</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">1</td>
                        <td>Apakah pangawas membacakan tata tertib pelaksanaan ujian ?</td>
                        <td align="center"><input type="number" name="1y" required value="<?php echo $value['1y'] ?>"> </td>
                        <td align="center"><input type="number" name="1t" required value="<?php echo $value['1t'] ?>"> </td>
                    </tr>
                    <tr>
                        <td align="center">2</td>
                        <td>Apakah pengawas ujian memperlihatkan amplop Soal Ujian dalam keadaan disegel kepada peserta ujian?</td>
                        <td align="center"><input type="number" name="2y" required value="<?php echo $value['2y'] ?>"> </td>
                        <td align="center"><input type="number" name="2t" required value="<?php echo $value['2t'] ?>"> </td>
                    </tr>
                    <tr>
                        <td align="center">3</td>
                        <td>Apakah pengawas ujian menjelaskan cara pengisian biodata peserta sebelum ujian dimulai?</td>
                        <td align="center"><input type="number" name="3y" required value="<?php echo $value['3y'] ?>" ></td>
                        <td align="center"><input type="number" name="3t" required  value="<?php echo $value['3t'] ?>"></td>
                    </tr>
                    <tr>
                        <td align="center">4</td>
                        <td>Apakah soal ujian jelas terbaca?</td>
                        <td align="center"><input type="number" name="4y" value="<?php echo $value['4y'] ?>" required> </td>
                        <td align="center"><input type="number" name="4t" value="<?php echo $value['4t'] ?>" required> </td>
                    </tr>
                    <tr>
                        <td align="center">5</td>
                        <td>Apakah pengawas memeriksa kecocokan identitas diri peserta dengan fotocopy ijasah yang dilegalisir atau Surat Keterangan /Tanda Lulus Asli dan Kartu Tanda Peserta ?</td>
                        <td align="center"><input type="number" name="5y" value="<?php echo $value['5y'] ?>" required></td>
                        <td align="center"><input type="number" name="5t" value="<?php echo $value['5t'] ?>" required></td>
                    </tr>
                    <tr>
                        <td align="center">6</td>
                        <td>Apakah perilaku pengawas mengganggu konsentrasi peserta ujian ?</td>
                        <td align="center"><input type="number" name="6y" value="<?php echo $value['6y'] ?>" required></td>
                        <td align="center"><input type="number" name="6t" value="<?php echo $value['6t'] ?>" required></td>
                    </tr>
                    <tr>
                        <td align="center">6</td>
                        <td>Apakah perilaku pengawas mengganggu konsentrasi peserta ujian ?</td>
                        <td align="center"><input type="number" name="6y" value="<?php echo $value['7y'] ?>" required></td>
                        <td align="center"><input type="number" name="6t" value="<?php echo $value['7t'] ?>" required></td>
                    </tr>
                    <tr>
                        <td align="center">6</td>
                        <td>Apakah perilaku pengawas mengganggu konsentrasi peserta ujian ?</td>
                        <td align="center"><input type="number" name="6y" value="<?php echo $value['8y'] ?>" required></td>
                        <td align="center"><input type="number" name="6t" value="<?php echo $value['8t'] ?>" required></td>
                    </tr>
                </tbody>
            </table>
            
            <input type="submit" class="btn btn-success btn-block" align="center" value="Update">
            </form>
            </div>
            </div>
        </div>
        </section>
 <?php endforeach ?> 