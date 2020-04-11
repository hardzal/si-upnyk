<script>
	FusionCharts.ready(function () {
	var salesChart = new FusionCharts({
	type: 'cylinder',
	renderAt: 'chart-8',
	width: '100%',
	height: '100%',
	dataFormat: 'json',
	dataSource: {
		"chart": {
        "theme": "fint",
        "caption": "Penerimaan di PPP",
		"subCaption": "Periode <?php echo $period ?>",
        "lowerLimit": "0",
        "upperLimit": "<?php echo $ulimprd ?>",
        "lowerLimitDisplay": "0 bbl",
        "upperLimitDisplay": "Top",
        "numberSuffix": " bbl",
        "showValue": "1",
        "chartBottomMargin": "5",
        "cylFillColor": "#004fae",
        "cylFillHoverColor": "#0099fd",
        "cylFillHoverAlpha": "85",
        "bgColor": "#636363",
		"cylRadius": "80%",
		"cylHeight": "140%"
    },
    "value": "<?php echo $terimap3prd ?>"
	}
  })
  .render();
});	
</script>