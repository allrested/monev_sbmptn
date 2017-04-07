 <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/pie.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<section class="content-header">
   
            <div class="col-md-12">
              <!-- DIRECT CHAT -->
              <div class="box box-primary box-solid direct-chat-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Masukkan-masukkan Terpenting</h3>

                  <div class="box-tools pull-right">
                    
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <!-- Conversations are loaded here -->
                  <div class="direct-chat-messages">
                    <!-- Message. Default to the left -->
                   <?php foreach ($isi as $isi){?><br>
                   <div class="direct-chat-msg">
                      <div class="direct-chat-info clearfix">
                        <span class="direct-chat-name pull-left alert-danger"><?php echo $isi['nama']?></span>
                      </div>
                    
                      <div class="direct-chat-text">
                        <?php echo $isi['isi1'];?>
                      </div>
                       <div class="direct-chat-text">
                        <?php echo $isi['isi2'];?>
                      </div>
                       <div class="direct-chat-text">
                        <?php echo $isi['isi3'];?>
                      </div><br>
                      <?php }?>
                      <!-- /.direct-chat-text -->
                    </div>
                    <!-- /.direct-chat-msg -->

                 
                </div>
                <!-- /.box-body -->
                </div>
              <!--/.direct-chat -->
            </div>
            <!-- /.col -->

            </section>
            <section class="content-header">
    
<div class="col-md-12">
  <div class="box box-danger box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Metode Sosialisasi</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
              </div>
            </div>
            <div class="box-body">
              <canvas id="barChart" style="height:230px"></canvas>
         
            </div>
            <!-- /.box-body -->
          </div>
          <script src="<?php echo base_url()?>assets/plugins/chartjs/Chart.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()?>assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()?>assets/dist/js/demo.js"></script>
<script type="text/javascript">
  var areaChartData = {
      labels: ["Mengundang Sasaran", "Mengunjungi Sasaran", "Media Cetak", "Baliho / Spanduk", "TV", "Radio"],
      <?php foreach($jumtott1 as $tot1){?>
      datasets: [
        {
          label: "Kepala Sekolah",
          data: [<?php echo $tot1['sum(mengundang_kepsek)']; ?>, <?php echo $tot1['sum(mengunjungi_kepsek)']; ?>, <?php echo $tot1['sum(media_kepsek)']; ?>, <?php echo $tot1['sum(baliho_kepsek)']; ?>, <?php echo $tot1['sum(tv_kepsek)']; ?>, <?php echo $tot1['sum(radio_kepsek)']; ?>]
        },
        {
          label: "Guru BK",
          data: [<?php echo $tot1['sum(mengundang_guru)']; ?>, <?php echo $tot1['sum(mengunjungi_guru)']; ?>, <?php echo $tot1['sum(media_guru)']; ?>, <?php echo $tot1['sum(baliho_guru)']; ?>, <?php echo $tot1['sum(tv_guru)']; ?>, <?php echo $tot1['sum(radio_guru)']; ?>]
        },
        {
          label: "Siswa",
          data: [<?php echo $tot1['sum(mengundang_siswa)']; ?>, <?php echo $tot1['sum(mengunjungi_siswa)']; ?>, <?php echo $tot1['sum(media_siswa)']; ?>, <?php echo $tot1['sum(baliho_siswa)']; ?>, <?php echo $tot1['sum(tv_siswa)']; ?>, <?php echo $tot1['sum(radio_siswa)']; ?>]
        },
        {
          label: "Lokasi",
          data: [<?php echo $tot1['sum(mengundang_lok)']; ?>, <?php echo $tot1['sum(mengunjungi_lok)']; ?>, <?php echo $tot1['sum(media_lok)']; ?>, <?php echo $tot1['sum(baliho_lok)']; ?>, <?php echo $tot1['sum(tv_lok)']; ?>, <?php echo $tot1['sum(radio_lok)']; ?>]
        },
      ]
      <?php } ?>
    };
  //- BAR CHART -
    //-------------
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    var barChart = new Chart(barChartCanvas);
    var barChartData = areaChartData;
    barChartData.datasets[0].fillColor = "#ff0000";
    barChartData.datasets[1].fillColor = "#FFFF00";
    barChartData.datasets[2].fillColor = "#0000ff";
    barChartData.datasets[3].fillColor = "#00ff00";
    var barChartOptions = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - If there is a stroke on each bar
      barShowStroke: true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth: 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing: 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing: 1,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to make the chart responsive
      responsive: true,
      maintainAspectRatio: true
    };

    barChartOptions.datasetFill = false;
    barChart.Bar(barChartData, barChartOptions);
</script>

</div></section>
<section class="content-header">
<div class="col-md-12">
  <div class="box box-warning box-solid ">
            <div class="box-header with-border ">
              <h3 class="box-title">Tanggapan Peserta/Sasaran Sosialisasi</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
              </div>
            </div>
            <div class="box-body">
              <canvas id="barChart2" style="height:230px"></canvas>
         
            </div>
            <!-- /.box-body -->
          </div>
<script type="text/javascript">
  var areaChartData2 = {
      labels: ["Tidak Jelas", "Kurang Jelas", "Cukup Jelas", "Jelas", "Sangat Jelas"],
      datasets: [
        {
          label: "Kepala Sekolah",
          data: [<?php foreach ($tott2tidakjelaskepsek as $tjks){ echo $tjks['sum(status_kepsek)'];}?>, <?php foreach ($tott2kurangkepsek as $tjks){ echo $tjks['sum(status_kepsek)'];}?>, <?php foreach ($tott2cukupkepsek as $tjks){ echo $tjks['sum(status_kepsek)'];}?>, <?php foreach ($tott2jelaskepsek as $tjks){ echo $tjks['sum(status_kepsek)'];}?>, <?php foreach ($tott2sangatjelaskepsek as $tjks){ echo $tjks['sum(status_kepsek)'];}?>]
        },
        {
          label: "Guru BK",
          data: [<?php foreach ($tott2tidakjelasgurubk as $tjks){ echo $tjks['sum(status_gurubk)'];}?>, <?php foreach ($tott2kuranggurubk as $tjks){ echo $tjks['sum(status_gurubk)'];}?>, <?php foreach ($tott2cukupgurubk as $tjks){ echo $tjks['sum(status_gurubk)'];}?>, <?php foreach ($tott2jelasgurubk as $tjks){ echo $tjks['sum(status_gurubk)'];}?>, <?php foreach ($tott2sangatjelasgurubk as $tjks){ echo $tjks['sum(status_gurubk)'];}?>]
        },
        {
          label: "Siswa",
          data: [<?php foreach ($tott2tidakjelassiswa as $tjks){ echo $tjks['sum(status_siswa)'];}?>, <?php foreach ($tott2kurangsiswa as $tjks){ echo $tjks['sum(status_siswa)'];}?>, <?php foreach ($tott2cukupsiswa as $tjks){ echo $tjks['sum(status_siswa)'];}?>, <?php foreach ($tott2jelassiswa as $tjks){ echo $tjks['sum(status_siswa)'];}?>, <?php foreach ($tott2sangatjelassiswa as $tjks){ echo $tjks['sum(status_siswa)'];}?>]
        },
        {
          label: "Orangtua Siswa",
          data: [<?php foreach ($tott2tidakjelasortu as $tjks){ echo $tjks['sum(status_ortu)'];}?>, <?php foreach ($tott2kurangortu as $tjks){ echo $tjks['sum(status_ortu)'];}?>, <?php foreach ($tott2cukuportu as $tjks){ echo $tjks['sum(status_ortu)'];}?>, <?php foreach ($tott2jelasortu as $tjks){ echo $tjks['sum(status_ortu)'];}?>, <?php foreach ($tott2sangatjelasortu as $tjks){ echo $tjks['sum(status_ortu)'];}?>]
        },
      ]
    };
  //- BAR CHART -
    //-------------
    var barChartCanvas = $("#barChart2").get(0).getContext("2d");
    var barChart = new Chart(barChartCanvas);
    var barChartData = areaChartData2;
    barChartData.datasets[0].fillColor = "#ff0000";
    barChartData.datasets[1].fillColor = "#FFFF00";
    barChartData.datasets[2].fillColor = "#0000ff";
    barChartData.datasets[3].fillColor = "#00ff00";
    var barChartOptions = {
      //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
      scaleBeginAtZero: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: true,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - If there is a stroke on each bar
      barShowStroke: true,
      //Number - Pixel width of the bar stroke
      barStrokeWidth: 2,
      //Number - Spacing between each of the X value sets
      barValueSpacing: 5,
      //Number - Spacing between data sets within X values
      barDatasetSpacing: 1,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to make the chart responsive
      responsive: true,
      maintainAspectRatio: true
    };

    barChartOptions.datasetFill = false;
    barChart.Bar(barChartData, barChartOptions);
</script>

</div>
</section>


<section class="content-header">
<div class="col-md-6">
  <div class="box box-danger ">
            <div class="box-header with-border">
              <h3 class="box-title">Jenis Layanan Helpdesk</h3>
<style>
#chartdiv {
  width   : 100%;
  height    : 500px;
  font-size : 11px;
}             
</style>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
              </div>
            </div>
            <div class="box-body">
              <div id="chartdiv"></div>
         
            </div>
            <!-- /.box-body -->
          </div>
<script type="text/javascript">
  var chart = AmCharts.makeChart( "chartdiv", {
  "type": "pie",
  "theme": "light",
  "dataProvider": [ {
    "title": "Ada",
    "value": <?php foreach ($totadahelpdesk as $da){echo $da['sum'];} ?>
  }, {
    "title": "Tidak Ada",
    "value": <?php foreach ($tottidakadahelpdesk as $da){echo $da['sum'];} ?>
  } ],
  "titleField": "title",
  "valueField": "value",
  "labelRadius": 5,

  "radius": "42%",
  "innerRadius": "60%",
  "labelText": "[[title]]",
  "export": {
    "enabled": true
  }
} );
</script>

</section>


<section class="content-header">
<div class="col-md-6">
  <div class="box box-danger ">
            <div class="box-header with-border">
              <h3 class="box-title">Jenis Layanan Telpon (call center)</h3>
<style>
#chartdiv2 {
  width   : 100%;
  height    : 500px;
  font-size : 11px;
}             
</style>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
              </div>
            </div>
            <div class="box-body">
              <div id="chartdiv2"></div>
         
            </div>
            <!-- /.box-body -->
          </div>
<script type="text/javascript">
  var chart2 = AmCharts.makeChart( "chartdiv2", {
  "type": "pie",
  "theme": "light",
  "dataProvider": [ {
    "title": "Ada",
    "value": <?php foreach ($totadatelpon as $da){echo $da['sum'];} ?>
  }, {
    "title": "Tidak Ada",
    "value": <?php foreach ($tottidakadatelpon as $da){echo $da['sum'];} ?>
  } ],
  "titleField": "title",
  "valueField": "value",
  "labelRadius": 5,

  "radius": "42%",
  "innerRadius": "60%",
  "labelText": "[[title]]",
  "export": {
    "enabled": true
  }
} );
</script>

</section>


<section class="content-header">
<div class="col-md-6">
  <div class="box box-danger ">
            <div class="box-header with-border">
              <h3 class="box-title">Jenis Layanan SMS</h3>
<style>
#chartdiv3 {
  width   : 100%;
  height    : 500px;
  font-size : 11px;
}             
</style>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
              </div>
            </div>
            <div class="box-body">
              <div id="chartdiv3"></div>
         
            </div>
            <!-- /.box-body -->
          </div>
<script type="text/javascript">
  var chart = AmCharts.makeChart( "chartdiv3", {
  "type": "pie",
  "theme": "light",
  "dataProvider": [ {
    "title": "Ada",
    "value": <?php foreach ($totadasms as $da){echo $da['sum'];} ?>
  }, {
    "title": "Tidak Ada",
    "value": <?php foreach ($tottidakadasms as $da){echo $da['sum'];} ?>
  } ],
  "titleField": "title",
  "valueField": "value",
  "labelRadius": 5,

  "radius": "42%",
  "innerRadius": "60%",
  "labelText": "[[title]]",
  "export": {
    "enabled": true
  }
} );
</script>
</div>
</section>


<section class="content-header">
<div class="col-md-6">
  <div class="box box-danger ">
            <div class="box-header with-border">
              <h3 class="box-title">Jenis Layanan Twitter</h3>
<style>
#chartdiv4 {
  width   : 100%;
  height    : 500px;
  font-size : 11px;
}             
</style>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
              </div>
            </div>
            <div class="box-body">
              <div id="chartdiv4"></div>
         
            </div>
            <!-- /.box-body -->
          </div>
<script type="text/javascript">
  var chart = AmCharts.makeChart( "chartdiv4", {
  "type": "pie",
  "theme": "light",
  "dataProvider": [ {
    "title": "Ada",
    "value": <?php foreach ($totadatwitter as $da){echo $da['sum'];} ?>
  }, {
    "title": "Tidak Ada",
    "value": <?php foreach ($tottidakadatwitter as $da){echo $da['sum'];} ?>
  } ],
  "titleField": "title",
  "valueField": "value",
  "labelRadius": 5,

  "radius": "42%",
  "innerRadius": "60%",
  "labelText": "[[title]]",
  "export": {
    "enabled": true
  }
} );
</script>

</section>


<section class="content-header">
<div class="col-md-12">
  <div class="box box-danger ">
            <div class="box-header with-border">
              <h3 class="box-title">Jenis Layanan Facebook</h3>
<style>
#chartdiv5 {
  width   : 100%;
  height    : 500px;
  font-size : 11px;
}             
</style>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
              </div>
            </div>
            <div class="box-body">
              <div id="chartdiv5"></div>
         
            </div>
            <!-- /.box-body -->
          </div>
<script type="text/javascript">
  var chart = AmCharts.makeChart( "chartdiv5", {
  "type": "pie",
  "theme": "light",
  "dataProvider": [ {
    "title": "Ada",
    "value": <?php foreach ($totadafb as $da){echo $da['sum'];} ?>
  }, {
    "title": "Tidak Ada",
    "value": <?php foreach ($tottidakadafb as $da){echo $da['sum'];} ?>
  } ],
  "titleField": "title",
  "valueField": "value",
  "labelRadius": 5,

  "radius": "42%",
  "innerRadius": "60%",
  "labelText": "[[title]]",
  "export": {
    "enabled": true
  }
} );
</script>

</section>
<section class="content-header">


<section class="content-header">
 <div class="col-md-6">
 <div class="box box-info  box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">PTN Yang Sudah Update</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="myTable1" class="table table-responsive table-border table-hover table-striped">
                  <thead>
                  <tr>
                    <th>Kode PTN</th>
                    <th>Nama PTN</th>
                    <th>Total Biaya</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($sudahupdate as $sudah) {?>                  
                  <tr>
                    <td><?php echo $sudah['kode'] ?></td>
                    <td><?php echo $sudah['nama'] ?></td>                  
                    <td><?php echo 'Rp '; echo number_format($sudah['biaya'],0,',','.'); ?></td>                    
                    <td><a class="btn btn-primary" href="<?php echo base_url()?>Welcome/Lihat/<?php echo $sudah['kode'] ?>">Lihat</a></td>                    
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
           
          </div>
          </div>
          </section>
<section class="content-header">          
 <div class="col-md-6">
 <div class="box box-info  box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">PTN Yang Belum Update</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="myTable2" class="table table-responsive table-border table-hover table-striped" >
                  <thead>
                  <tr>
                    <th>Kode PTN</th>
                    <th>Nama PTN</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach($belumupdate as $blm){ ?>
                  <tr>
                    <td><?php echo $blm['kode']; ?></td>
                    <td><?php echo $blm['nama']; ?></td>
                    
                  </tr>
                   <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
          </div>
          </div>

    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
    <script src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
          <script type="text/javascript">
            $(document).ready(function(){
    $('#myTable1').DataTable();
    $('#myTable2').DataTable();
});
          </script>
</div>
</section>

<br/>
<br/>
<br/>