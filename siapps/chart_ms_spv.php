<?php

/* Include the `fusioncharts.php` file that contains functions  to embed the charts. */

include("_script_phpgrid.php");
include("inc/fusioncharts.php");
?>

<!DOCTYPE html>
<head>
    <link  rel="stylesheet" type="text/css" href="css/style.css" />
  	<script src="fusioncharts/js/fusioncharts.js"></script>
</head>

<body>
<?php

$result = mysql_query("SELECT Tanggal, Terima FROM terima WHERE Kode='P01'");
$row   = mysql_fetch_row($result);

$arrData = Array ( 
	[chart] => Array ( 
		[caption] => "Harrys SuperMart",
		[subCaption] => "Sales by quarter", 
		[xAxisName] => "Quarter", 
		[yAxisName] => "Sales (In USD)",
		[numberPrefix] => "$", 
		[paletteColors] => "#0075c2,#1aaf5d,#f2c500",
		[bgColor] => "#ffffff",
		[showBorder] => "0",
		[showCanvasBorder] => "0", 
		[usePlotGradientColor] => "0", 
		[plotBorderAlpha] => "10",
		[legendBorderAlpha] => "0",
		[legendBgAlpha] => "0",
		[legendShadow] => "0", 
		[showHoverEffect] => "1", 
		[valueFontColor] => "#ffffff",
		[rotateValues] => "1", 
		[placeValuesInside] => "1", 
		[divlineColor] => "#999999",
		[divLineDashed] => "1", 
		[divLineDashLen] => "1",
		[divLineGapLen] => "1", 
		[canvasBgColor] => "#ffffff",
		[captionFontSize] => "14", 
		[subcaptionFontSize] => "14",
		[subcaptionFontBold] => "0", )
		);
		
	$arrData=array();

	[categories] => Array ( 
		[0] => Array ( 
		[category] => Array ( 
			[0] => Array ( [label] => "Q1" ), 
			[1] => Array ( [label] => "Q2" ), 
			[2] => Array ( [label] => "Q3" ), 
			[3] => Array ( [label] => "Q4" ) ) ) ), 
		[dataset] => Array ( 
			[0] => Array ( [seriesname] => "Previous Year",
			[data] => Array ( 
				[0] => Array ( [value] => "10000" ), 
				[1] => Array ( [value] => "11500" ), 
				[2] => Array ( [value] => "12500" ), 
				[3] => Array ( [value] => "15000" ) ) ),
			[1] => Array ( [seriesname] => "Current Year", 
			[data] => Array ( 
				[0] => Array ( [value] => "25400" ), 
				[1] => Array ( [value] => "29800" ), 
				[2] => Array ( [value] => "21800" ), 
				[3] => Array ( [value] => "26800" )
			) ) ) ;

$jsonEncodedData = json_encode($arrData);
print_r($jsonEncodedData);

$columnChart = new FusionCharts("mscolumn3D", "myFirstChart" , 600, 300, "chart-1", "json", $jsonEncodedData);

$columnChart->render();

?>
  	<div id="chart-1"><!-- Fusion Charts will render here--></div>

</body>

</html>

