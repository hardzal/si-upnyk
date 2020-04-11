<?php
$json2= '{
    "chart": {
        "caption": "Grafik Nilai Akademik",
        "subCaption": "IPK : '.$ipk.'",
        "xAxisName": "Nilai",
        "yAxisName": "Jumlah MKA",
		"xAxisNameFontSize": "14",
		"yAxisNameFontSize": "14",
		"baseFont": "Verdana",
		"baseFontSize": "13",
		"maxColWidth": "34",
        "bgColor": "#b9b9b9",
        "bgAlpha": "90",		
		"paletteColors": "#0075c2",
        "valueFontColor": "#ffffff",
        "baseFont": "Helvetica Neue,Arial",
        "captionFontSize": "14",
        "subcaptionFontSize": "14",
        "subcaptionFontBold": "1",
		"placeValuesInside": "0",
		"showValues": "0",
		"formatNumber": "1",
		"decimals": "2",
		"formatNumberScale": "0",
        "showShadow": "0",
        "canvasBorderThickness": "1",
        "divlineColor": "#999999",
        "divLineDashed": "1",
        "divlineThickness": "1",
        "divLineDashLen": "1",
        "divLineGapLen": "1",
        "canvasBgColor": "#ffffff",
		"chartLeftMargin": "5",
		"chartTopMargin": "5",
		"chartBottomMargin": "5",
        "theme": "fusion"
    },
    "data": [
		{ "label": "A", "value": " '.$jna.'", "color": "#0f6746", "Alpha": "70" },
		{ "label": "B+", "value": "'.$jnbp.'", "color": "#62BD49", "Alpha": "70" },
		{ "label": "B", "value": " '.$jnb.'", "color": "#0044b8", "Alpha": "70" },
		{ "label": "C+", "value": "'.$jncp.'", "color": "#1fccff", "Alpha": "70" },
		{ "label": "C", "value": " '.$jnc.'", "color": "#f4d35f", "Alpha": "70" },
		{ "label": "D", "value": " '.$jnd.'", "color": "#f98a00", "Alpha": "70" },
		{ "label": "E", "value": " '.$jne.'", "color": "#ff0000", "Alpha": "70" },
		{ "label": "K", "value": " '.$jnk.'", "color": "#ff00aa", "Alpha": "70" }
    ]
}';
$array = json_decode($json2);
$jsonEncodedData = json_encode($array);
$columnChart2 = new FusionCharts("column3D", "Chart-2" , 900, 440, "chart-2", "json", $jsonEncodedData);
$columnChart2->render();

?>
