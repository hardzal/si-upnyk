<script>
	FusionCharts.ready(function () {
	var salesChart = new FusionCharts({
	type: 'mscolumn3d',
	renderAt: 'chart-3',
	width: '100%',
	height: '100%',
	dataFormat: 'json',
	dataSource: {
		"chart": {
        "caption": "Grafik Total Pengiriman, Losses dan Penerimaan",
		"subCaption": "Bulan <?php echo $bulanz ?>",
        "yAxisName": "Volume (bbl)",
		"xAxisNameFontSize": "11",
		"yAxisNameFontSize": "11",
        "paletteColors": "#0075c2",
        "valueFontColor": "#ffffff",
        "baseFont": "Helvetica Neue,Arial",
        "bgColor": "#b9b9b9",
        "bgAlpha": "90",		
        "plotFillAlpha": "60",
		"usePlotGradientColor": "0",
        "captionFontSize": "14",
        "subcaptionFontSize": "14",
        "subcaptionFontBold": "0",
		"placeValuesInside": "0",
        "showCanvasBorder": "1",
		"showValues": "0",
		"formatNumber": "1",
		"decimals": "3",
		"formatNumberScale": "0",
        "showShadow": "0",
        "showLegend": "0",
        "showBorder": "0",
        "canvasBorderThickness": "1",
        "divlineColor": "#333333",
        "divLineDashed": "1",
        "divlineThickness": "1",
        "divLineDashLen": "1",
        "divLineGapLen": "1",
        "canvasBgColor": "#ffffff",
		"chartLeftMargin": "5",
		"chartTopMargin": "5",
		"chartBottomMargin": "5"
		
    },
    "categories": [
        { "category": [
			{  "label": "Kirim"  },
			{  "label": "Losses"  },
			{  "label": "Terima"  }
          ]
        }
    ],
    "dataset": [
        {  "seriesname": "Total",
           "data": [
                {  "value": "<?php echo $totalkir ?>", "color": "#0080ff", "Alpha": "70"  },
                {  "value": "<?php echo $totallos ?>", "color": "#ff1010", "Alpha": "70"  },
                {  "value": "<?php echo $totalter ?>", "color": "#00961c", "Alpha": "40"  }
			]
		}
	]
	}
})
.render();
});	
</script>