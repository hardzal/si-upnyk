<script>
	FusionCharts.ready(function () {
	var shipper = <?php echo json_encode($ship);?>;	
	var salesChart = new FusionCharts({
	type: 'scrollcombi2d',
	renderAt: 'chart-1',
	width: '100%',
	height: '100%',
	dataFormat: 'json',
	dataSource: {
		"chart": {
		"caption": "Grafik Pengiriman, Total Loss dan Penerimaan Shipper",
		"subCaption": "Tanggal <?php echo $tgl ?>",
		"xAxisName": "Shipper",
		"yAxisName": "Volume (bbl)",
		"xAxisNameFontSize": "11",
		"yAxisNameFontSize": "11",
        "paletteColors": "#0080ff,#ff3030,#00961c",
        "bgColor": "#b9b9b9",
        "bgAlpha": "90",		
		"plotFillAlpha": "60",
		"formatNumber": "1",
		"decimals": "3",
        "showBorder": "1",
		"placeValuesInside": "0",
		"showValues": "0",
		"formatNumberScale": "0",
        "showCanvasBorder": "1",
        "usePlotGradientColor": "0",
        "plotBorderAlpha": "50",
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
				{"label": shipper[1]}, {"label": shipper[2]}, {"label": shipper[3]},
				{"label": shipper[4]}, {"label": shipper[5]}, {"label": shipper[6]},
				{"label": shipper[7]}, {"label": shipper[8]}, {"label": shipper[9]},
				{"label": shipper[10]}, {"label": shipper[11]}, {"label": shipper[12]},
				{"label": shipper[13]}, {"label": shipper[14]}, {"label": shipper[15]},
				{"label": shipper[16]}, {"label": shipper[17]}, {"label": shipper[18]},
				{"label": shipper[19]}, {"label": shipper[20]}, {"label": shipper[21]},
				{"label": shipper[22]}, {"label": shipper[23]}, {"label": shipper[24]},
				{"label": shipper[25]}, {"label": shipper[26]}
			   ]
			}
		],
		"dataset": [
			{ "seriesname": "Kirim", "data": [
				{  "value": "<?php echo $arrKir[0] ?>" }, {  "value": "<?php echo $arrKir[1] ?>" },
				{  "value": "<?php echo $arrKir[2] ?>" }, {  "value": "<?php echo $arrKir[3] ?>" },
				{  "value": "<?php echo $arrKir[4] ?>" }, {  "value": "<?php echo $arrKir[5] ?>" },
				{  "value": "<?php echo $arrKir[6] ?>" }, {  "value": "<?php echo $arrKir[7] ?>" },
				{  "value": "<?php echo $arrKir[8] ?>" }, {  "value": "<?php echo $arrKir[9] ?>" },
				{  "value": "<?php echo $arrKir[10] ?>" },{  "value": "<?php echo $arrKir[11] ?>" },
				{  "value": "<?php echo $arrKir[12] ?>" },{  "value": "<?php echo $arrKir[13] ?>" },
				{  "value": "<?php echo $arrKir[14] ?>" },{  "value": "<?php echo $arrKir[15] ?>" },
				{  "value": "<?php echo $arrKir[16] ?>" },{  "value": "<?php echo $arrKir[17] ?>" },
				{  "value": "<?php echo $arrKir[18] ?>" },{  "value": "<?php echo $arrKir[19] ?>" },
				{  "value": "<?php echo $arrKir[20] ?>" },{  "value": "<?php echo $arrKir[21] ?>" },
				{  "value": "<?php echo $arrKir[22] ?>" },{  "value": "<?php echo $arrKir[23] ?>" },
				{  "value": "<?php echo $arrKir[24] ?>" },{  "value": "<?php echo $arrKir[25] ?>" }
			]
			},
			{ "seriesname": "Total Loss", "data": [
				{  "value": "<?php echo $arrLos[0] ?>" },{  "value": "<?php echo $arrLos[1] ?>" },
				{  "value": "<?php echo $arrLos[2] ?>" },{  "value": "<?php echo $arrLos[3] ?>" },
				{  "value": "<?php echo $arrLos[4] ?>" },{  "value": "<?php echo $arrLos[5] ?>" },
				{  "value": "<?php echo $arrLos[6] ?>" },{  "value": "<?php echo $arrLos[7] ?>" },
				{  "value": "<?php echo $arrLos[8] ?>" },{  "value": "<?php echo $arrLos[9] ?>" },
				{  "value": "<?php echo $arrLos[10] ?>" },{  "value": "<?php echo $arrLos[11] ?>" },
				{  "value": "<?php echo $arrLos[12] ?>" },{  "value": "<?php echo $arrLos[13] ?>" },
				{  "value": "<?php echo $arrLos[14] ?>" },{  "value": "<?php echo $arrLos[15] ?>" },
				{  "value": "<?php echo $arrLos[16] ?>" },{  "value": "<?php echo $arrLos[17] ?>" },
				{  "value": "<?php echo $arrLos[18] ?>" },{  "value": "<?php echo $arrLos[19] ?>" },
				{  "value": "<?php echo $arrLos[20] ?>" },{  "value": "<?php echo $arrLos[21] ?>" },
				{  "value": "<?php echo $arrLos[22] ?>" },{  "value": "<?php echo $arrLos[23] ?>" },
				{  "value": "<?php echo $arrLos[24] ?>" },{  "value": "<?php echo $arrLos[25] ?>" }
			]
			},
			{ "seriesname": "Terima KM3", "data": [
				{  "value": "<?php echo $arrTer[0] ?>" },{  "value": "<?php echo $arrTer[1] ?>" },
				{  "value": "<?php echo $arrTer[2] ?>" },{  "value": "<?php echo $arrTer[3] ?>" },
				{  "value": "<?php echo $arrTer[4] ?>" },{  "value": "<?php echo $arrTer[5] ?>" },
				{  "value": "<?php echo $arrTer[6] ?>" },{  "value": "<?php echo $arrTer[7] ?>" },
				{  "value": "<?php echo $arrTer[8] ?>" },{  "value": "<?php echo $arrTer[9] ?>" },
				{  "value": "<?php echo $arrTer[10] ?>" },{  "value": "<?php echo $arrTer[11] ?>" },
				{  "value": "<?php echo $arrTer[12] ?>" },{  "value": "<?php echo $arrTer[13] ?>" },
				{  "value": "<?php echo $arrTer[14] ?>" },{  "value": "<?php echo $arrTer[15] ?>" },
				{  "value": "<?php echo $arrTer[16] ?>" },{  "value": "<?php echo $arrTer[17] ?>" },
				{  "value": "<?php echo $arrTer[18] ?>" },{  "value": "<?php echo $arrTer[19] ?>" },
				{  "value": "<?php echo $arrTer[20] ?>" },{  "value": "<?php echo $arrTer[21] ?>" },
				{  "value": "<?php echo $arrTer[22] ?>" },{  "value": "<?php echo $arrTer[23] ?>" },
				{  "value": "<?php echo $arrTer[24] ?>" },{  "value": "<?php echo $arrTer[25] ?>" }
			]
			}
		]
        }
    })
    .render();
});	
</script>