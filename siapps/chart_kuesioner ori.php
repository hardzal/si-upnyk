<?php
session_start();
$judul1='Hasil Kuesioner '.$vmatkul;
$judul2='Dosen: '.$vdos;
$json1= '{
    "chart": {
        "caption": "'.$judul1.'",
        "subCaption": "'.$judul2.'",
        "yAxisName": "Score",
        "xAxisName": "Butir Pernyataan",
        "theme": "umber"
    },
    "data": [
        {
            "label": "Pernyataan 1 ",
            "value": "'.$score[1].'"
        },
        {
            "label": "Pernyataan 2 ",
            "value": "'.$score[2].'"
        },
        {
            "label": "Pernyataan 3 ",
            "value": "'.$score[3].'"
        },
        {
            "label": "Pernyataan 4 ",
            "value": "'.$score[4].'"
        },
        {
            "label": "Pernyataan 5 ",
            "value": "'.$score[5].'"
        }
    ]
}';
$array = json_decode($json1);
$jsonEncodedData = json_encode($array);
$columnChart1 = new FusionCharts("bar2d", "Chart-1" , 1020, 520, "chart-1", "json", $jsonEncodedData);
$columnChart1->render();
?>
