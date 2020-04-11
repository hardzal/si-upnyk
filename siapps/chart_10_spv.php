<script>
	FusionCharts.ready(function () {
	var salesChart = new FusionCharts({
	type: 'cylinder',
	renderAt: 'chart-10',
	width: '100%',
	height: '100%',
	dataFormat: 'json',
	dataSource: {
		"chart": {
        "theme": "fint",
        "caption": "Penerimaan di KM3",
		"subCaption": "Periode <?php echo $period ?>",
        "lowerLimit": "0",
        "upperLimit": "<?php echo $ulimprd ?>",
        "lowerLimitDisplay": "0 bbl",
        "upperLimitDisplay": "Top",
        "numberSuffix": " bbl",
        "showValue": "1",
        "chartBottomMargin": "5",
        "cylFillColor": "#1aaf2f",
        "cylFillHoverColor": "#2cc87a",
        "cylFillHoverAlpha": "85",
        "bgColor": "#636363",
		"cylRadius": "80%",
		"cylHeight": "140%"
    },
    "value": "<?php echo $terimakm3prd ?>"
	}
  })
  .render();
});	
</script>