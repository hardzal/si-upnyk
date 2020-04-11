<?php
$json1= '{
    "chart": {
        "caption": "Grafik Pengiriman, Total Loss dan Penerimaan KM3",
        "subCaption": "Tahun '. $tahun .'",
        "xAxisName": "Bulan",
        "yAxisName": "Volume (bbl)",
		"xAxisNameFontSize": "11",
		"yAxisNameFontSize": "11",
        "paletteColors": "#0080ff,#ff3030,#00961c",
        "bgColor": "#b9b9b9",
        "bgAlpha": "90",		
		"plotFillAlpha": "80",
		"formatNumber": "1",
		"decimals": "2",
        "showBorder": "0",
		"placeValuesInside": "0",
		"showValues": "0",
		"formatNumberScale": "0",
        "showCanvasBorder": "0",
        "usePlotGradientColor": "0",
        "plotBorderAlpha": "10",
        "legendBorderAlpha": "1",
        "legendBgAlpha": "40",
        "legendShadow": "1",
		"legendPosition": "right",
		"legendBgColor": "#d8d8d8",
		"legendBorderColor": "#555555",
		"chartLeftMargin": "5",
		"chartTopMargin": "5",
		"chartBottomMargin": "5",
        "showHoverEffect": "1",
        "divlineColor": "#999999",
        "divLineDashed": "1",
        "divLineDashLen": "1",
        "divLineGapLen": "1",
        "canvasBgColor": "#ffffff",
        "captionFontSize": "14",
        "subcaptionFontSize": "14",
        "subcaptionFontBold": "0"
    },
    "categories": [
        { "category": [
			{  "label": "Jan"  },
			{  "label": "Feb"  },
			{  "label": "Mar"  },
			{  "label": "Apr"  },
			{  "label": "May"  },
			{  "label": "Jun"  },
			{  "label": "Jul"  },
			{  "label": "Aug"  },
			{  "label": "Sep"  },
			{  "label": "Oct"  },
			{  "label": "Nov"  },
			{  "label": "Dec"  }
          ]
        }
    ],
    "dataset": [
        {  "seriesname": "Kirim",
           "data": [
                {  "value": "'.$arrKir[0].'"  },
                {  "value": "'.$arrKir[1].'"  },
                {  "value": "'.$arrKir[2].'"  },
                {  "value": "'.$arrKir[3].'"  },
                {  "value": "'.$arrKir[4].'"  },
                {  "value": "'.$arrKir[5].'"  },
                {  "value": "'.$arrKir[6].'"  },
                {  "value": "'.$arrKir[7].'"  },
                {  "value": "'.$arrKir[8].'"  },
                {  "value": "'.$arrKir[9].'"  },
                {  "value": "'.$arrKir[10].'" },
                {  "value": "'.$arrKir[11].'" }
            ]
        },
        {  "seriesname": "Losses",
           "data": [
                {  "value": "'.$arrLos[0].'"  },
                {  "value": "'.$arrLos[1].'"  },
                {  "value": "'.$arrLos[2].'"  },
                {  "value": "'.$arrLos[3].'"  },
                {  "value": "'.$arrLos[4].'"  },
                {  "value": "'.$arrLos[5].'"  },
                {  "value": "'.$arrLos[6].'"  },
                {  "value": "'.$arrLos[7].'"  },
                {  "value": "'.$arrLos[8].'"  },
                {  "value": "'.$arrLos[9].'"  },
                {  "value": "'.$arrLos[10].'" },
                {  "value": "'.$arrLos[11].'" }
            ]
        },
        {
            "seriesname": "Terima",
            "data": [
                {  "value": "'.$arrTer[0].'"  },
                {  "value": "'.$arrTer[1].'"  },
                {  "value": "'.$arrTer[2].'"  },
                {  "value": "'.$arrTer[3].'"  },
                {  "value": "'.$arrTer[4].'"  },
                {  "value": "'.$arrTer[5].'"  },
                {  "value": "'.$arrTer[6].'"  },
                {  "value": "'.$arrTer[7].'"  },
                {  "value": "'.$arrTer[8].'"  },
                {  "value": "'.$arrTer[9].'"  },
                {  "value": "'.$arrTer[10].'" },
                {  "value": "'.$arrTer[11].'" }
            ]
        }
    ]
}';
$array = json_decode($json1);
$jsonEncodedData = json_encode($array);
$columnChart1 = new FusionCharts("mscolumn3D", "Chart-1" , 1065, 415, "chart-1", "json", $jsonEncodedData);
$columnChart1->render();
?>
