<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="description" content="Gamma Gallery - A Responsive Image Gallery Experiment"/>
  <meta name="keywords" content="html5, responsive, image gallery, masonry, picture, images, sizes, fluid, history api, visibility api"/>
  <meta name="author" content="Codrops"/>
  

  <!-- ORIGINAL SOURCE -->
  <!-- START ORIGINAL SOURCE -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Sistem Informasi UPN 'Veteran' Yk</title>
  <!-- MDB icon -->
  <link rel="icon" href="<?php echo base_url('assets/assets2/img/logo_sisfo.ico')?>" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/assets2/css/bootstrap.min.css')?>">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/assets2/css/mdb.min.css')?>">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="<?php echo base_url('assets/assets2/css/style.css')?>">
  <!-- END OF ORIGINAL SOURCE -->

  <link rel="stylesheet" href="<?=base_url('assets/radius/css/main.css')?>" />

  <!-- Utk Galeri -->
    <link rel="stylesheet" href="<?=base_url('assets/assets_galeri/fonts/icomoon/style.css')?>">

    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?=base_url('assets/assets_galeri/css/magnific-popup.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/assets_galeri/css/jquery-ui.css')?>">
<!--     <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
 -->
    <link rel="stylesheet" href="<?=base_url('assets/assets_galeri/css/bootstrap-datepicker.css')?>">

    <!-- <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css"> -->

    <!-- <link rel="stylesheet" href="css/aos.css"> -->
    <link rel="stylesheet" href="<?=base_url('assets/assets_galeri/css/fancybox.min.css')?>">

    <link rel="stylesheet" href="<?=base_url('assets/assets_galeri/css/style.css')?>">

  <!-- Utk Template Fox -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?=base_url('assets/assets_fox/css/open-iconic-bootstrap.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/assets_fox/css/animate.css')?>">
  
  <link rel="stylesheet" href="<?=base_url('assets/assets_fox/css/owl.carousel.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/assets_fox/css/owl.theme.default.min.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/assets_fox/css/magnific-popup.css')?>">

  <link rel="stylesheet" href="<?=base_url('assets/assets_fox/css/aos.css')?>">

  <link rel="stylesheet" href="<?=base_url('assets/assets_fox/css/ionicons.min.css')?>">
  
  <link rel="stylesheet" href="<?=base_url('assets/assets_fox/css/flaticon.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/assets_fox/css/icomoon.css')?>">
  <link rel="stylesheet" href="<?=base_url('assets/assets_fox/css/style.css')?>">

  <!-- stylesheets -->
  <link href="<?=base_url('assets/photoarkwork/css/style.css')?>" rel="stylesheet" type="text/css">
  <link href="<?=base_url('assets/photoarkwork/css/portfolio_two.css')?>" rel="stylesheet" type="text/css">
  <link href="<?=base_url('assets/photoarkwork/css/dark.css')?>" rel="stylesheet" type="text/css">
  <style>.noscript { display: none; }</style>
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="<?=base_url('assets/photoarkwork/js/modernizr-1.5.min.js')?>"></script>
  
  <?php
        
        $graph = array();
        foreach ($grafik as $graf){
            $no = 0;
            $datanew = array();
            foreach($isi_grafik as $row){
                if($row->id_grafik == $graf->id){
                    $datanew[$no] = $row;
                    $no++;
                }
            }
            $arr = array("title" => $graf->title, "type" => $graf->type, "isi" => $datanew);
            $graph[] = $arr;
        }
        // echo json_encode($graph);
      ?>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      
      google.charts.setOnLoadCallback(drawChart);


      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      
      function drawChart() 
      {
          
            var graph = <?php echo json_encode($graph);?>;
            
            for(var i in graph){
              // Create the data table.
              var arr = [];
              var data = new google.visualization.DataTable();
              data.addColumn('string', 'Variabel');
              data.addColumn('number', 'Value');
              for(var j in graph[i].isi){
                arr.push
                ([
                  graph[i].isi[j].variable_name, 
                  Number(graph[i].isi[j].value)
                ]);
              }
              data.addRows(arr);

              // Set chart options
              

              var id = "chart_div";
              // Instantiate and draw our chart, passing in some options.
              if(graph[i].type == "bar"){
                  var options = {'title': graph[i].title,
                            'width':700,
                            'height':400,
                            legend: { position: "none" }    
                  };
                var chart = new google.visualization.BarChart(document.getElementById(id.concat(i)));
              } else if(graph[i].type == "pie") {
                  var options = {'title': graph[i].title,
                            'width':700,
                            'height':400,};
                  var chart = new google.visualization.PieChart(document.getElementById(id.concat(i)));
              } else if(graph[i].type == "column") {
                  var options = {'title': graph[i].title,
                            'width':700,
                            'height':400,
                            trendlines: {
                              0: {type: 'exponential', lineWidth: 10, opacity: .3}
                            },
                             legend: { position: "none" }
                  };
                  var chart = new google.visualization.ColumnChart(document.getElementById(id.concat(i)));
              }
              chart.draw(data, options);
            }
        
        
      }
    </script>
  
</head>
<body>

  <!-- Start your project here-->
 <?php $this->load->view("_partial/navbar.php") ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url(<?php echo base_url('assets/images/grafik.jpg') ?>);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Informasi Grafik</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Berita <i class="ion-ios-arrow-forward"></i></a></span> <span>Grafik <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
<!--Main layout-->
    

    <div class="container-fluid grey lighten-3">
      <div class="container badan">
        <hr>
        <div class="row" id="topSection">
          <div class="col-md-12 ftco-animate">
              <center>
            <?php $no=0; foreach($grafik as $row) : ?>
			    <div id="chart_div<? echo $no;?>"></div>
			    <br>
			<?php $no++; endforeach; ?>
              </center>
            <!-- <img class="w-100" src="<?php echo base_url('assets/images/struktur.png')?>"> -->
            <!-- <hr> -->
            <!-- Row kurikulum -->
            <!-- <div class="row"> -->
              
              <!-- data kurikulum -->
              <!-- <div class="col-md-6 mb-2">
                <a href="" class="text-capitalize"><i class="fas fa-download"></i> Kurikulum tahun ajaran</a>
              </div> -->
              
            <!-- </div> -->
            <!-- end Row kurikulum -->
            <!-- <hr> -->
            
          </div>
        </div>
      </div>
    </div>

<!--Back to Top-->
  <button onclick="topFunction()" id="backToTop" title="Go to top">
    <i class="fa fa-arrow-up"></i>
  </button> 
</div>
<!--End Main layout-->


<!-- Footer -->

<?php $this->load->view("_partial/footer.php") ?>
<!-- End Footer -->
<!-- End your project here-->

<!-- jQuery -->
<?php $this->load->view("_partial/js.php") ?>

</body>
</html>
