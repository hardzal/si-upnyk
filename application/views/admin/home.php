<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Administrator</title>

	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url('assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css'); ?>" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="<?php echo base_url('assets/admin/bower_components/metisMenu/dist/metisMenu.min.css'); ?>" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="<?php echo base_url('assets/admin/dist/css/sb-admin-2.css'); ?>" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="<?php echo base_url('assets/admin/bower_components/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- DataTables CSS -->
	<link href="<?php echo base_url('assets/admin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css'); ?>" rel="stylesheet">

	<!-- DataTables Responsive CSS -->
	<link href="<?php echo base_url('assets/admin/bower_components/datatables-responsive/css/dataTables.responsive.css'); ?>" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="<?php echo base_url('assets/admin/dist/css/sb-admin-2.css'); ?>" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="<?php echo base_url('assets/admin/bower_components/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

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
                            'width':400,
                            'height':300,
                            legend: { position: "none" }    
                  };
                var chart = new google.visualization.BarChart(document.getElementById(id.concat(i)));
              } else if(graph[i].type == "pie") {
                  var options = {'title': graph[i].title,
                            'width':400,
                            'height':300};
                  var chart = new google.visualization.PieChart(document.getElementById(id.concat(i)));
              } else if(graph[i].type == "column") {
                  var options = {'title': graph[i].title,
                            'width':400,
                            'height':300,
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

	<div id="wrapper">

		<?php include 'navbar.php'; ?>

		<!-- Page Content -->
		<div id="page-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<h3 class="page-header">Halo Admin..</h3>
						<?php $no=0; foreach($grafik as $row) : ?>
						<div id="chart_div<? echo $no;?>"></div>
						<?php $no++; endforeach; ?>
					</div>
					<!-- /.col-lg-12 -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container-fluid -->
		</div>
		<!-- /#page-wrapper -->

	</div>
	<!-- /#wrapper -->
	<?php include 'foot.php'; ?>

</body>

</html>
