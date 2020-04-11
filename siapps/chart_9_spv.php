<script>
	FusionCharts.ready(function () {
	var salesChart = new FusionCharts({
	type: 'cylinder',
	renderAt: 'chart-9',
	width: '100%',
	height: '100%',
	dataFormat: 'json',
	dataSource: {
		"chart": {
        "theme": "fint",
        "caption": "Pengiriman dari PPP",
		"subCaption": "Periode <?php echo $period ?>",
        "lowerLimit": "0",
        "upperLimit": "<?php echo $ulimprd ?>",
        "lowerLimitDisplay": "0 bbl",
        "upperLimitDisplay": "Top",
        "numberSuffix": " bbl",
        "showValue": "1",
        "chartBottomMargin": "5",
        "cylFillColor": "#ff1010",
        "cylFillHoverColor": "#ff6060",
        "cylFillHoverAlpha": "70",
        "bgColor": "#636363",
		"cylRadius": "80%",
		"cylHeight": "140%"
    },
    "value": "<?php echo $kirimp3prd ?>"
	}
  })
  .render();
});	
</script>