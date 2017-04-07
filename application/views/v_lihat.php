<style type="text/css">
  input[type=number]{
    width: 60px; !important
} 
</style>
 <style>
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
</style>       <!-- if sudah update -->

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                DASHBOARD FORM INSTRUMEN MONEV HUMAS PTN SNMPTN 2017
                <small></small>
            </h1>
        </section>

        <!-- Main content -->
        <section>
            <div class="col-md-12">
          <div class="box box-primary collapsed-box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">I. Pengisian PDSS & SNMPTN 2017</h3></br><br>1. Bagaimana cara pelaksanaan sosialisasi PDSS & SNMPTN 2017 di wilayah saudara?</h3><br><br></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: none;">
              <div class="row">
              <h2 class="box-title" align="center"> 1. Bagaimana cara pelaksanaan sosialisasi PDSS & SNMPTN 2017 di wilayah saudara?<h2>
            <form method="post" action="<?php echo base_url()?>input/update">
            <table class="table table-bordered" >
                    <tr>
                    <td colspan="1" rowspan="2" bgcolor="#39cccc">Aspek</td>
                    <td rowspan="1" colspan="8" align="center" bgcolor="#39cccc">Metode</td>
                    </tr>
                    <tr>
                        <td align="center" bgcolor="#39cccc">Mengundang <br>Peserta</td>
                        <td align="center" bgcolor="#39cccc">Mengunjungi <br> Sasaran</td>
                        <td align="center" bgcolor="#39cccc">Media Cetak Koran</td>
                        <td align="center" bgcolor="#39cccc">Leaflet / Pamflet</td>
                        <td align="center" bgcolor="#39cccc">Baliho / Spanduk</td>
                        <td align="center" bgcolor="#39cccc">TV</td>
                        <td align="center" bgcolor="#39cccc">Radio</td>
                        <td align="center" bgcolor="#39cccc">Lain-lain</td>
                    </tr>
                    <tr>
                        <td bgcolor="#39cccc">Sasaran/Peserta </td>
                        <?php foreach ($get1 as $data){ ?>
                        <td><input type="number" class="form-control" size="3" name="1" id="1" value="<?php echo $data['mengundang_kepsek'];?>"> &nbsp; Kepala Sekolah<br>
                          <input type="number" class="form-control" size="3" name="2"  id="2"   value="<?php echo $data['mengundang_guru'];?>"> &nbsp; Guru<br>
                          <input type="number" class="form-control" size="3" name="3"  id="3"  value="<?php echo $data['mengundang_siswa'];?>"> &nbsp; Siswa<br></td>
                        <td><input type="number" class="form-control" size="3" name="4"  id="4"  value="<?php echo $data['mengunjungi_kepsek'];?>"> &nbsp; Kepala Sekolah<br>
                          <input type="number" class="form-control" size="3" name="5" id="5" value="<?php echo $data['mengunjungi_guru'];?>"> &nbsp; Guru<br>
                          <input type="number" class="form-control" size="3" name="6" id="6"  value="<?php echo $data['mengunjungi_siswa'];?>"> &nbsp; Siswa<br></td>
                        <td><input type="number" class="form-control" size="3" name="7"  id="7" value="<?php echo $data['media_kepsek'];?>"> &nbsp; Kepala Sekolah<br>
                          <input type="number" class="form-control" size="3" name="8" id="8"  value="<?php echo $data['media_guru'];?>"> &nbsp; Guru<br>
                          <input type="number" class="form-control" size="3" name="9" id="9"  value="<?php echo $data['media_siswa'];?>"> &nbsp; Siswa<br></td>
                        <td><input type="number" class="form-control" size="3" name="10"  id="10" value="<?php echo $data['leaflet_kepsek'];?>"> &nbsp; Kepala Sekolah<br>
                          <input type="number" class="form-control" size="3" name="11" id="11"  value="<?php echo $data['leaflet_guru'];?> "> &nbsp; Guru<br>
                          <input type="number" class="form-control" size="3" name="12" id="12"  value="<?php echo $data['leaflet_siswa'];?>"> &nbsp; Siswa<br></td>
                        <td><input type="number" class="form-control" size="3" name="13"  id="13" value="<?php echo $data['baliho_kepsek'];?>"> &nbsp; Kepala Sekolah<br>
                          <input type="number" class="form-control" size="3" name="14" id="14"  value="<?php echo $data['baliho_guru'];?>"> &nbsp; Guru<br>
                          <input type="number" class="form-control" size="3" name="15" id="15"  value="<?php echo $data['baliho_siswa'];?>"> &nbsp; Siswa<br></td>
                        <td><input type="number" class="form-control" size="3" name="16" id="16"  value="<?php echo $data['tv_kepsek'];?>"> &nbsp; Kepala Sekolah<br>
                          <input type="number" class="form-control" size="3" name="17" id="17"  value="<?php echo $data['tv_guru'];?>"> &nbsp; Guru<br>
                          <input type="number" class="form-control" size="3" name="18" id="18"  value="<?php echo $data['tv_siswa'];?>"> &nbsp; Siswa<br></td>
                        <td><input type="number" class="form-control" size="3" name="19" id="19"  value="<?php echo $data['radio_kepsek'];?>"> &nbsp; Kepala Sekolah<br>
                          <input type="number" class="form-control" size="3" name="20" id="20"  value="<?php echo $data['radio_guru'];?>"> &nbsp; Guru<br>
                          <input type="number" class="form-control" size="3" name="21" id="21" value="<?php echo $data['radio_siswa'];?>"> &nbsp; Siswa<br></td>
                        <td align="center" style="vertical-align: middle;"><textarea name="222"  ><?php echo $data['lainya_pes']?></textarea></td>     
                    </tr>
                    <tr>
                        <td bgcolor="#39cccc">Jumlah</td>
                        <td><input type="number" name="22"  id="22" class="form-control" value="<?php echo $data['mengundang_jum'];?>"></td>
                        <td><input type="number" name="23"  id="23" class="form-control" value="<?php echo $data['mengunjungi_jum'];?>"></td>
                        <td><input type="number" name="24"  id="24" class="form-control" value="<?php echo $data['media_jum'];?>"></td>
                        <td><input type="number" name="25"  id="25" class="form-control" value="<?php echo $data['leaflet_jum'];?>"></td>
                        <td><input type="number" name="26"  id="26" class="form-control" value="<?php echo $data['baliho_jum'];?>"></td>
                        <td><input type="number" name="27"  id="27" class="form-control" value="<?php echo $data['tv_jum'];?>"></td>
                        <td><input type="number" name="28"  id="28" class="form-control" value="<?php echo $data['radio_jum'];?>"></td>
                     <td align="center"><textarea name="29"  > <?php echo $data['lainya_jum'];?></textarea></td>
                    </tr>
                    <script type="text/javascript">
    $(document).ready(function(){
    var $1 = $('#1'),
    $2 = $('#2'),
    $3 = $('#3'),
    $4 = $('#4'),
    $5 = $('#5'),
    $6 = $('#6'),
    $7 = $('#7'),
    $8 = $('#8'),
    $9 = $('#9'),
    $10 = $('#10'),
    $11 = $('#11'),
    $12 = $('#12'),
    $13 = $('#13'),
    $14 = $('#14'),
    $15 = $('#15'),
    $16 = $('#16'),
    $17 = $('#17'),
    $18 = $('#18'),
    $19 = $('#19'),
    $20 = $('#20'),
    $21 = $('#21'),
    $22 = $('#22');
    $23 = $('#23');
    $24 = $('#24');
    $25 = $('#25');
    $26 = $('#26');
    $27 = $('#27');
    $28 = $('#28');

  
  $1.on('change', function(e) {
    
  $22.val(
        Math.round(
          (parseInt($1.val()) + parseInt($2.val()) + parseInt($3.val())  ))
    );
  });
  $2.on('change', function(e) {
    
  $22.val(
        Math.round(
          (parseInt($1.val()) + parseInt($2.val()) + parseInt($3.val())  ))
    );
  });
  $3.on('change', function(e) {
    
  $22.val(
        Math.round(
          (parseInt($1.val()) + parseInt($2.val()) + parseInt($3.val())  ))
    );
  });

  $4.on('change', function(e) {
    
  $23.val(
        Math.round(
          (parseInt($4.val()) + parseInt($5.val()) + parseInt($6.val())  ))
    );
  });
  $5.on('change', function(e) {
    
  $23.val(
        Math.round(
          (parseInt($4.val()) + parseInt($5.val()) + parseInt($6.val())  ))
    );
  });
  $6.on('change', function(e) {
    
  $23.val(
        Math.round(
          (parseInt($4.val()) + parseInt($5.val()) + parseInt($6.val())  ))
    );
  });
  $7.on('change', function(e) {
    
  $24.val(
        Math.round(
          (parseInt($7.val()) + parseInt($8.val()) + parseInt($9.val())  ))
    );
  });
  $8.on('change', function(e) {
    
  $24.val(
        Math.round(
          (parseInt($7.val()) + parseInt($8.val()) + parseInt($9.val())  ))
    );
  });
  $9.on('change', function(e) {
    
  $24.val(
        Math.round(
          (parseInt($7.val()) + parseInt($8.val()) + parseInt($9.val())  ))
    );
  });
  $10.on('change', function(e) {
    
  $25.val(
        Math.round(
          (parseInt($10.val()) + parseInt($11.val()) + parseInt($12.val())  ))
    );
  });
  $11.on('change', function(e) {
    
  $25.val(
        Math.round(
          (parseInt($10.val()) + parseInt($11.val()) + parseInt($12.val())  ))
    );
  });
  $12.on('change', function(e) {
    
  $25.val(
        Math.round(
          (parseInt($10.val()) + parseInt($11.val()) + parseInt($12.val())  ))
    );
  });
  $13.on('change', function(e) {
    
  $26.val(
        Math.round(
          (parseInt($13.val()) + parseInt($14.val()) + parseInt($15.val())  ))
    );
  });
  $14.on('change', function(e) {
    
  $26.val(
        Math.round(
          (parseInt($13.val()) + parseInt($14.val()) + parseInt($15.val())  ))
    );
  });
  $15.on('change', function(e) {
    
  $26.val(
        Math.round(
          (parseInt($13.val()) + parseInt($14.val()) + parseInt($15.val())  ))
    );
  });
  $16.on('change', function(e) {
    
  $27.val(
        Math.round(
          (parseInt($16.val()) + parseInt($17.val()) + parseInt($18.val())  ))
    );
  });
  $17.on('change', function(e) {
    
  $27.val(
        Math.round(
          (parseInt($16.val()) + parseInt($17.val()) + parseInt($18.val())  ))
    );
  });
  $18.on('change', function(e) {
    
  $27.val(
        Math.round(
          (parseInt($16.val()) + parseInt($17.val()) + parseInt($18.val())  ))
    );
  });
  $19.on('change', function(e) {
    
  $28.val(
        Math.round(
          (parseInt($19.val()) + parseInt($20.val()) + parseInt($21.val())  ))
    );
  });
  $20.on('change', function(e) {
    
  $28.val(
        Math.round(
          (parseInt($19.val()) + parseInt($20.val()) + parseInt($21.val())  ))
    );
  });
  $21.on('change', function(e) {
    
  $28.val(
        Math.round(
          (parseInt($19.val()) + parseInt($20.val()) + parseInt($21.val())  ))
    );
  });
});
</script>
                    <tr>
                        <td bgcolor="#39cccc">Berapa Lokasi/Kota</td>
                        <td><input type="number" name="30" class="form-control" value="<?php echo $data['mengundang_lok'];?>"></td>
                        <td><input type="number" name="31" class="form-control" value="<?php echo $data['mengunjungi_lok'];?>"></td>
                        <td><input type="number" name="32" class="form-control" value="<?php echo $data['media_lok'];?>"></td>
                        <td><input type="number" name="33" class="form-control" value="<?php echo $data['leaflet_lok'];?>"></td>
                        <td><input type="number" name="34" class="form-control" value="<?php echo $data['baliho_lok'];?>"></td>
                        <td><input type="number" name="35" class="form-control" value="<?php echo $data['tv_lok'];?>"></td>
                        <td><input type="number" name="36" class="form-control" value="<?php echo $data['radio_lok'];?>"></td>
                         <td align="center"><textarea name="37"  > <?php echo $data['lainya_lok'];?></textarea></td>
                    </tr>
                     <tr>
                        <td bgcolor="#39cccc">Diluar Ketiga Asepek Diatas</td>
                         <td align="center" colspan="8"><textarea name="38"   class="textarea form-control"><?php echo $data['lainya_lainya']; ?></textarea></td>
                         <?php } ?>
                    </tr>
                </table>
            </div>
              <!-- /.row -->
            </div>
</section>
<section>
            <div class="col-md-12">
          <div class="box box-primary collapsed-box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">I. Pengisian PDSS & SNMPTN 2017</h3></br><br>2. Bagaimana Tanggapan Sasaran/Peserta Terkait Pelaksanaan Sosialisasi PDSS & SNMPTN 2017</h3><br><br></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: none;">
              <div class="row">

                   <h2 class="box-title" algin="center">2. Bagaimana Tanggapan Sasaran/Peserta Terkait Pelaksanaan Sosialisasi PDSS & SNMPTN 2017</h2>
                <table class="table table-bordered">
                    <tr>
                    <td align='center' colspan="1" rowspan="2" bgcolor="#39cccc">Sasaran Peserta</td>
                    <td rowspan="1" colspan="8" align="center" bgcolor="#39cccc">Aspek </td>
                    </tr>
                    <tr>
                        <td align="center" bgcolor="#39cccc">Tidak Jelas</td>
                        <td align="center" bgcolor="#39cccc">Kurang Jelas</td>
                        <td align="center" bgcolor="#39cccc">Cukup Jelas</td>
                        <td align="center" bgcolor="#39cccc">Jelas</td>
                        <td align="center" bgcolor="#39cccc">Sangat Jelas</td>
                        <td align="center" bgcolor="#39cccc">Keterangan</td>
                        
                    </tr>
                    <tr>
                    <?php foreach ($get2 as $data2){?>
                        
                        <td bgcolor="#39cccc">Kepala Sekolah </td>
                        <td align ='center'><input type="radio" value="1" name="39"  <?php if($data2['status_kepsek']==1){ echo "checked";}?> > &nbsp; </td>
                        <td align ='center'><input type="radio" value="2" name="39"  <?php if($data2['status_kepsek']==2){ echo "checked";}?> > &nbsp; </td>
                        <td align ='center'><input type="radio" value="3" name="39"  <?php if($data2['status_kepsek']==3){ echo "checked";}?> > &nbsp; </td>
                        <td align ='center'><input type="radio" value="4" name="39"  <?php if($data2['status_kepsek']==4){ echo "checked";}?> > &nbsp; </td>
                        <td align ='center'><input type="radio" value="5" name="39"  <?php if($data2['status_kepsek']==5){ echo "checked";}?> > &nbsp; </td>
                        <td align="center"><textarea name="40"   <?php echo $data2['ket_kepsek'];?>></textarea></td>     
                    </tr>
                    
                    <tr>
                        <td bgcolor="#39cccc">Guru (BK)</td>
                        <td align ='center'><input type="radio" value="1" name="44"  <?php if($data2['status_gurubk']==1){ echo "checked";}?> > &nbsp; </td>
                        <td align ='center'><input type="radio" value="2" name="44"  <?php if($data2['status_gurubk']==2){ echo "checked";}?> > &nbsp; </td>
                        <td align ='center'><input type="radio" value="3" name="44" <?php if($data2['status_gurubk']==3){ echo "checked";}?> > &nbsp; </td>
                        <td align ='center'><input type="radio" value="4" name="44"  <?php if($data2['status_gurubk']==4){ echo "checked";}?> > &nbsp; </td>
                        <td align ='center'><input type="radio" value="5" name="44"  <?php if($data2['status_gurubk']==5){ echo "checked";}?> > &nbsp; </td>
                        <td align="center"><textarea name="49"  > <?php echo $data2['ket_gurubk'];?></textarea></td>  
                    </tr>
                    <tr>
                        <td bgcolor="#39cccc">Siswa</td>
                        <td align ='center'><input type="radio" value="1" name="50"  <?php if($data2['status_siswa']==1){ echo "checked";}?> > &nbsp; </td>
                        <td align ='center'><input type="radio" value="2" name="50"  <?php if($data2['status_siswa']==2){ echo "checked";}?> > &nbsp; </td>
                        <td align ='center'><input type="radio" value="3" name="50"  <?php if($data2['status_siswa']==3){ echo "checked";}?> > &nbsp; </td>
                        <td align ='center'><input type="radio" value="4" name="50"  <?php if($data2['status_siswa']==4){ echo "checked";}?> > &nbsp; </td>
                        <td align ='center'><input type="radio" value="5" name="50"  <?php if($data2['status_siswa']==5){ echo "checked";}?> > &nbsp; </td>
                        <td align="center"><textarea name="55"  > <?php echo $data2['ket_siswa'];?></textarea></td>  
                    </tr>
                     <tr>
                        <td bgcolor="#39cccc">Orang Tua Siswa</td>
                        <td align ='center'><input type="radio" value="1" name="56"  <?php if($data2['status_ortu']==1){ echo "checked";}?> > &nbsp; </td>
                        <td align ='center'><input type="radio" value="2" name="56"  <?php if($data2['status_ortu']==2){ echo "checked";}?> > &nbsp; </td>
                        <td align ='center'><input type="radio" value="3" name="56"  <?php if($data2['status_ortu']==3){ echo "checked";}?> > &nbsp; </td>
                        <td align ='center'><input type="radio" value="4" name="56"  <?php if($data2['status_ortu']==4){ echo "checked";}?> > &nbsp; </td>
                        <td align ='center'><input type="radio" value="5" name="56"  <?php if($data2['status_ortu']==5){ echo "checked";}?> > &nbsp; </td>
                        <td align="center"><textarea name="61"  > <?php echo $data2['ket_ortu'];?></textarea></td>  
                    </tr> 
              
<?php } ?>
                </table>
            </div>
            </div>
            </div>
            </section>
             <section>
           <div class="col-md-12">
          <div class="box box-primary collapsed-box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">I. Pengisian PDSS & SNMPTN 2017</h3></br><br>3. Apakah pada PTN saudara memiliki pusat informasi dan layanan telfon untuk PDSS dan SNMPTN 2017 ?</h3><br><br></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
                
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: none;">
              <div class="row">
                   <h2 class="box-title" align="center">3. Apakah pada PTN saudara memiliki pusat informasi dan layanan telfon untuk PDSS dan SNMPTN 2017 ?</h2>
            <?php foreach ($get3 as $data3){ ?>
                
                <table class="table table-bordered">
                    <tr>
                    <td align='center' colspan="1" rowspan="2" bgcolor="#39cccc">Jenis Layanan Informasi PDSS dan SNMPTN</td>
                    <td rowspan="1" colspan="8" align="center" bgcolor="#39cccc">Aspek </td>
                    </tr>
                    <tr>
                        <td align="center" bgcolor="#39cccc">Ada</td>
                        <td align="center" bgcolor="#39cccc">Tidak Ada</td>
                        <td align="center" bgcolor="#39cccc">Keterangan</td>
                        
                    </tr>
                    <tr>
                        <td bgcolor="#39cccc">Helpdesk </td>
                        <td align ='center'><input type="radio" value="1" name="62" <?php if($data3['status_helpdesk']==1){echo "checked";}?>> &nbsp; </td>
                        <td align ='center'><input type="radio" value="0" name="62" <?php if($data3['status_helpdesk']==0){echo "checked";}?>> &nbsp; </td>
                       
                        <td align="center"><textarea name="63"  ><?php echo $data3['ket_helpdesk'];?></textarea></td>     
                    </tr>
                    
                    <tr>
                        <td bgcolor="#39cccc">Telpon (call center)</td>
                        <td align ='center'><input type="radio" value="1" name="64" <?php if($data3['status_telpon']==1){echo "checked";}?>> &nbsp; </td>
                        <td align ='center'><input type="radio" value="0" name="64" <?php if($data3['status_telpon']==0){echo "checked";}?>> &nbsp; </td>
                       
                        <td align="center"><textarea name="66"  ><?php echo $data3['ket_telpon'];?></textarea></td>  
                    </tr>
                    <tr>
                        <td bgcolor="#39cccc">SMS</td>
                        <td align ='center'><input type="radio" value="1" name="67" <?php if($data3['status_sms']==1){echo "checked";}?>> &nbsp; </td>
                        <td align ='center'><input type="radio" value="0" name="67" <?php if($data3['status_sms']==0){echo "checked";}?>> &nbsp; </td>

                        <td align="center"><textarea name="69"  ><?php echo $data3['ket_sms'];?></textarea></td>  
                    </tr>
                     <tr>
                        <td bgcolor="#39cccc">Twitter</td>
                        <td align ='center'><input type="radio" value="1" name="70" <?php if($data3['status_twitter']==1){echo "checked";}?>> &nbsp; </td>
                        <td align ='center'><input type="radio" value="0" name="70" <?php if($data3['status_twitter']==0){echo "checked";}?>> &nbsp; </td>
                        <td align="center"><textarea name="72"  ><?php echo $data3['ket_twitter'];?></textarea></td>  
                    </tr>
                     <tr>
                        <td bgcolor="#39cccc">Facebook</td>
                        <td align ='center'><input type="radio" value="1" name="73" <?php if($data3['status_fb']==1){echo "checked";}?>> &nbsp; </td>
                        <td align ='center'><input type="radio" value="0" name="73" <?php if($data3['status_fb']==0){echo "checked";}?>> &nbsp; </td>
                        <td align="center"><textarea name="75"  ><?php echo $data3['ket_fb'];?></textarea></td>  
                    </tr> 
              
<?php } ?>
                </table>
                </div>
                </div>
           </section>
           <section>
            <div class="col-md-12">
          <div class="box box-primary collapsed-box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">I. Pengisian PDSS & SNMPTN 2017</h3></br><br>4. Kendala yang dikeluhkan oleh sekolah terkair dengan pengisian PDSS dan pendaftaran SNMPTN 2017 ?</h3><br><br></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: none;">
              <div class="row">
                   <h2 class="box-title" align="center">4. Kendala yang dikeluhkan oleh sekolah terkair dengan pengisian PDSS dan pendaftaran SNMPTN 2017 ?</h2>
          
                <table class="table table-bordered">
                    <tr>
                    <td align='center' colspan="1" rowspan="2" bgcolor="#39cccc">Kendala</td>
                    <td rowspan="1" colspan="8" align="center" bgcolor="#39cccc">Aspek </td>
                    </tr>
                    <tr>
                        <td align="center" bgcolor="#39cccc">Ada</td>
                        <td align="center" bgcolor="#39cccc">Tidak Ada</td>
                        <td align="center" bgcolor="#39cccc">Penyelesaian (Jika ada)</td>
                        
                    </tr>
                    <tr>
                    <?php foreach ($get4 as $data4){ ?>
                        
                        <td bgcolor="#39cccc">Koneksi Internet </td>
                        <td align ='center'><input type="radio" value="1" name="76" <?php if($data4['status_koneksi']==1){ echo "checked";}?>> &nbsp; </td>
                        <td align ='center'><input type="radio" value="0" name="76" <?php if($data4['status_koneksi']==0){ echo "checked";}?>> &nbsp; </td>
                       
                        <td align="center"><textarea name="78"  ><?php echo $data4['ket_koneksi'] ?></textarea></td>     
                    </tr>
                    
                    <tr>
                        <td bgcolor="#39cccc">NPSN</td>
                        <td align ='center'><input type="radio" value="1" name="79" <?php if($data4['status_npsn']==1){ echo "checked";}?>> &nbsp; </td>
                        <td align ='center'><input type="radio" value="0" name="79" <?php if($data4['status_npsn']==0){ echo "checked";}?>> &nbsp; </td>
                       
                        <td align="center"><textarea name="81"  ><?php echo $data4['ket_npsn'] ?></textarea></td>  
                    </tr>
                    <tr>
                        <td bgcolor="#39cccc">NISN</td>
                        <td align ='center'><input type="radio" value="1" name="82" <?php if($data4['status_nisn']==1){ echo "checked";}?>> &nbsp; </td>
                        <td align ='center'><input type="radio" value="0" name="82" <?php if($data4['status_nisn']==0){ echo "checked";}?>> &nbsp; </td>

                        <td align="center"><textarea name="84"  ><?php echo $data4['ket_nisn']; ?></textarea></td>  
                    </tr>
                     <tr>
                        <td bgcolor="#39cccc">Akreditasi</td>
                        <td align ='center'><input type="radio" value="1" name="85" <?php if($data4['status_akreditasi']==1){ echo "checked";}?>> &nbsp; </td>
                        <td align ='center'><input type="radio" value="0" name="85" <?php if($data4['status_akreditasi']==0){ echo "checked";}?>> &nbsp; </td>
                        <td align="center"><textarea name="87"  ><?php echo $data4['ket_akreditasi']; ?></textarea></td>  
                    </tr>
                     <tr>
                        <td bgcolor="#39cccc">Cara Pengisian</td>
                        <td align ='center'><input type="radio" value="1" name="88" <?php if($data4['status_cara']==1){ echo "checked";}?>> &nbsp; </td>
                        <td align ='center'><input type="radio" value="0" name="88" <?php if($data4['status_cara']==0){ echo "checked";}?>> &nbsp; </td>
                        <td align="center"><textarea name="90"  ><?php echo $data4['ket_cara'] ?></textarea></td>  
                    </tr> 
                     <tr>
                        <td bgcolor="#39cccc">Kurikulum</td>
                        <td align ='center'><input type="radio" value="1" name="91" <?php if($data4['status_kurikulum']==1){ echo "checked";}?>> &nbsp; </td>
                        <td align ='center'><input type="radio" value="0" name="91" <?php if($data4['status_kurikulum']==0){ echo "checked";}?>> &nbsp; </td>
                        <td align="center"><textarea name="93"  ><?php echo $data4['ket_kurikulum'] ?></textarea></td>  
                    </tr> 
                     <tr>
                        <td bgcolor="#39cccc">Lainnya</td>
                        <td align ='center' colspan="5"><textarea name="94"   class="textarea form-control"><?php echo $data4['lainya']; ?></textarea></td>  
                    </tr> 
              
<?php } ?>
                </table>
           </div>
           </div>
           </div>
            </section><section>
            <div class="col-md-12">
          <div class="box box-primary collapsed-box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">I. Pengisian PDSS & SNMPTN 2017</h3></br><br>5. Apakah terdapat sekolah yang mendaftar PDSS di tahun 2016 tetapi tidak mendaftar di tahun 2017. Apa yang terjadi penyebabnya?</h3><br><br></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
               
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: none;">
              <div class="row">
                   <h2 class="box-title" align="center">5. Apakah terdapat sekolah yang mendaftar PDSS di tahun 2016 tetapi tidak mendaftar di tahun 2017. Apa yang terjadi penyebabnya?</h2>
            <?php foreach ($get5 as $data5){ ?>
                
         
                <textarea name="95"  class="textarea form-control"><?php echo $data5['isi']; }?></textarea>
           
           
         </div>
         </div>
           </section><section>
            <div class="col-md-12">
          <div class="box box-primary collapsed-box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">II. PORTOFOLIO</h3></br><br>Apakah PTN saudara memiliki fakultas / program studi seni & olahraga?</h3><br><br></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
                
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: none;">
              <div class="row">
              
            
           <h2 class="box-title" align="center">&nbsp;&nbsp;&nbsp;Apakah PTN saudara memiliki fakultas / program studi seni & olahraga?</h2>
            
            
                <table class="table table-bordered">
                    <tr>
                    <td align='center' colspan="1" rowspan="2" bgcolor="#39cccc">Program Studi</td>
                    <td rowspan="1" colspan="8" align="center" bgcolor="#39cccc">Aspek </td>
                    </tr>
                    <tr>
                        <td align="center" bgcolor="#39cccc">Ada</td>
                        <td align="center" bgcolor="#39cccc">Tidak Ada</td>
                        <td align="center" bgcolor="#39cccc">Usulan penting dari peserta selama sosialisasi portofolio berlangsung</td>
                        
                    </tr>
                    <tr>
                    <?php foreach ($getporto as $porto){ ?>
                        
                    
                        <td bgcolor="#39cccc">Keolahragaan </td>
                        <td align ='center'><input type="radio" value="1" name="96" <?php if($porto['status_keolahragaan']==1){echo "checked";} ?>> &nbsp; </td>
                        <td align ='center'><input type="radio" value="0" name="96" <?php if($porto['status_keolahragaan']==0){echo "checked";} ?>> &nbsp; </td>
                       
                        <td align="center"><textarea name="98"  ><?php echo $porto['masukan_keolahragaan']; ?></textarea></td>     
                    </tr>
                    
                    <tr>
                        <td bgcolor="#39cccc">Seni</td>
                        <td align ='center'><input type="radio" value="1" name="100" <?php if($porto['status_seni']==1){echo "checked";} ?>> &nbsp; </td>
                        <td align ='center'><input type="radio" value="0" name="100" <?php if($porto['status_seni']==0){echo "checked";} ?>> &nbsp; </td>
                       
                        <td align="center"><textarea name="101"  ><?php echo $porto['masukan_seni']; ?></textarea></td>  
                    </tr>
                </table>
           <?php } ?>
            </div>
            <!-- /.box-body -->
          </div>
        </section><section>
            <div class="col-md-12">
          <div class="box box-primary collapsed-box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">III. PENDAFTARAN SNMPTN</h3></br><br>Tuliskan Usulan penting dari Sasaran selama sosialisasi Pendaftaran SNMPTN ?</h3><br><br></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
                
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: none;">
              <div class="row">
              
          
           <h2 class="box-title" align="center">Tuliskan Usulan penting dari Sasaran selama sosialisasi Pendaftaran SNMPTN ?</h2>
            
            
                <table class="table table-bordered">
                    <tr>
                    <td align='center' colspan="1" rowspan="2" bgcolor="#39cccc">Sasaran</td>
                    <td rowspan="1" colspan="8" align="center" bgcolor="#39cccc">Aspek </td>
                    </tr>
                    <tr></td>
                        
                    </tr>
                    <tr>
                        <td bgcolor="#39cccc">Siswa </td>
                        <?php foreach ($getdaftar as $daftar){ ?>
                        <td align="center"><textarea name="102"  class="textarea form-control" ><?php echo $daftar['siswa']; ?></textarea></td>     
                    </tr>
                    
                    <tr>
                        <td bgcolor="#39cccc">Guru (BK)</td>
                        <td align="center"><textarea name="103"  class="textarea form-control"><?php echo $daftar['guru_bk']; ?></textarea></td>  
                    </tr>
                    <tr>
                        <td bgcolor="#39cccc">Kepala Sekolah</td>
                        <td align="center"><textarea name="104"  class="textarea form-control"><?php echo $daftar['kepsek']; ?></textarea></td>  
                    </tr>
                    <tr>
                        <td bgcolor="#39cccc">Orang tua Siswa</td>
                        <td align="center"><textarea name="105"  class="textarea form-control"><?php echo $daftar['ortu']; ?></textarea></td>  
                    </tr>
                </table>
           <?php } ?>
            </div>
            <!-- /.box-body -->
          </div>
        </section>
        <section>
            <div class="col-md-12">
          <div class="box box-primary collapsed-box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">IV. USULAN TERPENTING</h3></br><br>Tuliskan 3 (tiga) usulan terpenting terkait dengan kegiatan<br>sosialisasi PDSS dan SNMPTN ?</h3><br><br></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
                
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="display: none;">
              <div class="row">
                   <h2 class="box-title"></h2>
              
           
           <h2 class="box-title" align="center">Tuliskan 3 (tiga) usulan terpenting terkait dengan kegiatan<br>sosialisasi PDSS dan SNMPTN ?</h2>
            
          
                <table class="table table-bordered">
                      <h2 class="box-title" align="center">Isikan Data Pelaksanaan dan Tuliskan 3 (tiga) usulan terpenting terkait dengan kegiatan sosialisasi PDSS dan SNMPTN ?</h2>
                    <tr></td>
                        <?php foreach ($getmasukan as $masukan) {?>
                    </tr>
                     <tr>
                    <td>Tanggal Sosialisasi:</td>
                    <td align="left"><input type="date" name="tanggal_sos" value="<?php echo $masukan['tanggal_sos'];?>">      
                    </tr>
                     <tr>
                    <td>Lokasi Kegiatan :</td>
                 	 <td align="left"><textarea name="lokasikegiatan"><?php echo $masukan['lokasi_sos'];?></textarea></td>      
                    </tr>
                     <tr>
                    <td>Jumlah Biaya Yang Terpakai :</td>
                    <td align="left">Rp.<input type="number" name="biaya" style="width: 200px; !important" value="<?php echo $masukan['biaya'];?>"> Isikan nominal tanpa titik dan koma </td>     
                    </tr>
                    <tr>
                        <td align="center" bgcolor="#39cccc">1 </td>
                        <td align="center"><textarea name="106"  class="textarea form-control"><?php echo $masukan['isi1']; ?></textarea></td>     
                    </tr>
                    
                    <tr>
                        <td align="center" bgcolor="#39cccc">2</td>
                        <td align="center"><textarea name="107"  class="textarea form-control"><?php echo $masukan['isi2']; ?></textarea></td>  
                    </tr>
                    <tr>
                        <td align="center" bgcolor="#39cccc">3</td>
                        <td align="center"><textarea name="108"  class="textarea form-control"><?php echo $masukan['isi3']; }?></textarea></td>  
                    </tr>
                </table>
            </div>
            <!-- /.box-body -->
          </div>
          
          </div>
           </section>
          <section>
          <div class="col-md-12">
  <div class="box box-danger box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Foto Sosialisasi</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              </div>
               
         <div class="box-body">
          <?php foreach ($getfile as $file){?>
      <img id="Myimg<?php echo $file['id'];?>" src="<?php echo base_url()?>uploads/<?php echo $file['nama'];?>"  width="300" height="200">

<!-- The Modal -->
<div id="myModal<?php echo $file['id'];?>" class="modal">
  <span class="close" id="close<?php echo $file['id'];?>">&times;</span>
  <img class="modal-content" id="img<?php echo $file['id'];?>">
</div>
<script>
// Get the modal
var modal = document.getElementById('myModal<?php echo $file['id'];?>');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('Myimg<?php echo $file['id'];?>');
var modalImg = document.getElementById("img<?php echo $file['id'];?>");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
}

// Get the <span> element that closes the modal
var span = document.getElementById('close<?php echo $file['id'];?>');

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
           </form>
<?php }?></div></div></div>
        </section>
        <!-- /.content -->