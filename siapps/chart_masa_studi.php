<?php
$json1= '{
  "chart": {
    "caption": "Masa Studi Anda (Tahun)",
    "lowerlimit": "0",
    "upperlimit": "7",
    "showvalue": "1",
    "showBorder": "0",
    "baseFont": "Verdana",
    "baseFontSize": "16",
    "baseFontColor": "#555",
	"valueBelowPivot": "1",    
	"theme": "fusion"
	
  },
  "colorrange": {
    "color": [
      {
        "minvalue": "0",
        "maxvalue": "1",
        "code": "#135834"
      },
      {
        "minvalue": "1",
        "maxvalue": "2",
        "code": "#1aa44f"
      },
      {
        "minvalue": "2",
        "maxvalue": "3",
        "code": "#2dc937"
      },
      {
        "minvalue": "3",
        "maxvalue": "4",
        "code": "#99c140"
      },
      {
        "minvalue": "4",
        "maxvalue": "5",
        "code": "#e7b416"
      },
      {
        "minvalue": "5",
        "maxvalue": "6",
        "code": "#db7b2b"
      },
      {
        "minvalue": "6",
        "maxvalue": "7",
        "code": "#ee0505"
      }
    ]
  },
  "dials": {
    "dial": [
      {
        "value": "'.$years.'"
      }
    ]
  }

}';
$array = json_decode($json1);
$jsonEncodedData = json_encode($array);
$columnChart1 = new FusionCharts("angulargauge", "Chart-1" , 800, 350, "chart-1", "json", $jsonEncodedData);
$columnChart1->render();
?>
