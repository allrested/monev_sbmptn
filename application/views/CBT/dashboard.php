 <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/pie.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script><section class="content-header">

<div class="row">
<a href="<?php echo site_url('CBT/rekap_peserta') ?>">
<div class="col-md-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Download Rekap Excel Inputan Peserta SBMPTN</span>
              <span class="info-box-number">Peserta SBMPTN</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    Download
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
</div>
</a>
<a href="<?php echo site_url('CBT/rekap_penanggung_jawab') ?>">
<div class="col-md-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Download Rekap Excel Inputan Penanggung Jawab Lokasi</span>
              <span class="info-box-number">Penanggung Jawab Lokasi</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    Download
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
</div>
</a>
<a href="<?php echo site_url('CBT/rekap_monev') ?>">
<div class="col-md-12">
          <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Download Rekap Excel Inputan Petugas Monev</span>
              <span class="info-box-number">Petugas Monev</span>

              <div class="progress">
                <div class="progress-bar" style="width: 70%"></div>
              </div>
                  <span class="progress-description">
                    Download
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
</div>
</a>
</div>
<div class="col-md-12">
  <div class="box box-danger box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Jawaban Peserta SBMPTN  </h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
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
<?php foreach ($peserta as $key => $value): ?>
  
  var areaChartData = {
      labels: ["1", "2", "3", "4", "5", "6","7","8"],
      datasets: [
        {
          label: "Ya",
          data: [<?php echo $value['1y'] ?>, <?php echo $value['2y'] ?>, <?php echo $value['3y'] ?>, <?php echo $value['4y'] ?>, <?php echo $value['5y'] ?>, <?php echo $value['6y'] ?>, <?php echo $value['7y'] ?>, <?php echo $value['8y'] ?>]
        },
        {
          label: "Tidak",
          data: [<?php echo $value['1t'] ?>, <?php echo $value['2t'] ?>, <?php echo $value['3t'] ?>, <?php echo $value['4t'] ?>, <?php echo $value['5t'] ?>, <?php echo $value['6t'] ?>, <?php echo $value['7t'] ?>, <?php echo $value['8t'] ?>]
        },
        
      ]
    };
<?php endforeach ?>
  //- BAR CHART -
    //-------------
    var barChartCanvas = $("#barChart").get(0).getContext("2d");
    var barChart = new Chart(barChartCanvas);
    var barChartData = areaChartData;
    barChartData.datasets[0].fillColor = "#ff0000";
    barChartData.datasets[1].fillColor = "#FFFF00";
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

<div class="col-md-12">
  <div class="box box-warning box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Penanggung Jawab Lokasi</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <canvas id="barChart2" style="height:230px"></canvas>
         
            </div>
            <!-- /.box-body -->
          </div>
<script type="text/javascript">
<?php foreach ($penanggung_jawab as $key => $value): ?>
  
  var areaChartData2 = {
      labels: ["1", "2", "3", "4", "5","6","7","8","9","10"],
      datasets: [
        {
          label: "Ya ",
          data: [<?php echo $value['1y'] ?>, <?php echo $value['2y'] ?>, <?php echo $value['3y'] ?>, <?php echo $value['4y'] ?>, <?php echo $value['5y'] ?>, <?php echo $value['6y'] ?>,<?php echo $value['7y'] ?>, <?php echo $value['8y'] ?>, <?php echo $value['9y'] ?>, <?php echo $value['10y'] ?>]
        },
        {
          label: "Tidak ",
          data: [<?php echo $value['1n'] ?>, <?php echo $value['2n'] ?>, <?php echo $value['3n'] ?>, <?php echo $value['4n'] ?>, <?php echo $value['5n'] ?>, <?php echo $value['6n'] ?>,<?php echo $value['7n'] ?>, <?php echo $value['8n'] ?>, <?php echo $value['9n'] ?>, <?php echo $value['10n'] ?>]
        },
      ]
    };
<?php endforeach ?>
  //- BAR CHART -
    //-------------
    var barChartCanvas = $("#barChart2").get(0).getContext("2d");
    var barChart = new Chart(barChartCanvas);
    var barChartData = areaChartData2;
    barChartData.datasets[0].fillColor = "#ff0000";
    barChartData.datasets[1].fillColor = "#FFFF00";
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
<div class="col-md-6">
 <div class="box box-info  box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">PTN Yang Sudah Update Peserta SBMPTN</h3>

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
                    
                  </tr>
                  </thead>
                  <tbody>
                  <?php  $asd = $this->db->query('select * from t_user left join cbt_peserta_sbm on cbt_peserta_sbm.update_id = t_user.kode where update_id = t_user.kode'); ?>
                  <?php foreach ($asd->result_array() as $sudah) {?>                  
                  <tr>
                    <td><?php echo $sudah['kode'] ?></td>
                    <td><?php echo $sudah['nama'] ?></td>                                   
                                       
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
 <div class="col-md-6">
 <div class="box box-info  box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">PTN Yang Belum Update SBMPTN</h3>

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
                  <?php $asd2 = $this->db->query('select * from t_user left join cbt_peserta_sbm on cbt_peserta_sbm.update_id = t_user.kode where update_id is null');
                  foreach($asd2->result_array() as $blm){ ?>
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
 <div class="col-md-6">
 <div class="box box-info  box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">PTN Yang Sudah Update Penanggung Jawab Lokasi</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="myTable3" class="table table-responsive table-border table-hover table-striped">
                  <thead>
                  <tr>
                    <th>Kode PTN</th>
                    <th>Nama PTN</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  <?php  $asd = $this->db->query('select * from t_user left join cbt_penanggung_jawab on cbt_penanggung_jawab.update_id = t_user.kode where update_id = t_user.kode'); ?>
                  <?php foreach ($asd->result_array() as $sudah) {?>                  
                  <tr>
                    <td><?php echo $sudah['kode'] ?></td>
                    <td><?php echo $sudah['nama'] ?></td>                                                  
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
 <div class="col-md-6">
 <div class="box box-info  box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">PTN Yang Belum Update Penanggung Jawab Lokasi</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="myTable4" class="table table-responsive table-border table-hover table-striped" >
                  <thead>
                  <tr>
                    <th>Kode PTN</th>
                    <th>Nama PTN</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $asd2 = $this->db->query('select * from t_user left join cbt_penanggung_jawab on cbt_penanggung_jawab.update_id = t_user.kode where update_id is null');
                  foreach($asd2->result_array() as $blm){ ?>
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
 <div class="col-md-6">
 <div class="box box-info  box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">PTN Yang Sudah Update Monev</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="myTable5" class="table table-responsive table-border table-hover table-striped">
                  <thead>
                  <tr>
                    <th>Kode PTN</th>
                    <th>Nama PTN</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  <?php  $asd = $this->db->query('select * from t_user left join cbt_petugas_monev on cbt_petugas_monev.update_id = t_user.kode where update_id = t_user.kode'); ?>
                  <?php foreach ($asd->result_array() as $sudah) {?>                  
                  <tr>
                    <td><?php echo $sudah['kode'] ?></td>
                    <td><?php echo $sudah['nama'] ?></td>                                                  
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
 <div class="col-md-6">
 <div class="box box-info  box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">PTN Yang Belum Update Monev</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="myTable6" class="table table-responsive table-border table-hover table-striped" >
                  <thead>
                  <tr>
                    <th>Kode PTN</th>
                    <th>Nama PTN</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $asd2 = $this->db->query('select * from t_user left join cbt_petugas_monev on cbt_petugas_monev.update_id = t_user.kode where update_id is null');
                  foreach($asd2->result_array() as $blm){ ?>
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
    $('#myTable3').DataTable();
    $('#myTable4').DataTable();
    $('#myTable5').DataTable();
    $('#myTable6').DataTable();
});
          </script>
</div>
</section>



<br/>
<br/>
<br/>