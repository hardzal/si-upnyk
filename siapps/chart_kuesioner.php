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
        "yAxisMaxValue": "6",
        "theme": "umber"
    },
    "data": [
        {
            "label": " 1 ",
            "value": "'.$score[1].'"
        },
        {
            "label": " 2 ",
            "value": "'.$score[2].'"
        },
        {
            "label": " 3 ",
            "value": "'.$score[3].'"
        },
        {
            "label": " 4 ",
            "value": "'.$score[4].'"
        },
        {
            "label": " 5 ",
            "value": "'.$score[5].'"
        },
        {
            "label": " 6 ",
            "value": "'.$score[6].'"
        },
        {
            "label": " 7 ",
            "value": "'.$score[7].'"
        },
        {
            "label": " 8 ",
            "value": "'.$score[7].'"
        },
        {
            "label": " 9 ",
            "value": "'.$score[9].'"
        },
        {
            "label": " 10 ",
            "value": "'.$score[10].'"
        },
        {
            "label": " 11 ",
            "value": "'.$score[11].'"
        },
        {
            "label": " 12 ",
            "value": "'.$score[12].'"
        },
        {
            "label": " 13 ",
            "value": "'.$score[13].'"
        },
        {
            "label": " 14 ",
            "value": "'.$score[14].'"
        },
        {
            "label": " 15 ",
            "value": "'.$score[15].'"
        },
        {
            "label": " 16 ",
            "value": "'.$score[16].'"
        },
        {
            "label": " 17 ",
            "value": "'.$score[17].'"
        },
        {
            "label": " 18 ",
            "value": "'.$score[18].'"
        },
        {
            "label": " 19 ",
            "value": "'.$score[19].'"
        },
        {
            "label": " 20 ",
            "value": "'.$score[20].'"
        },
        {
            "label": " 21 ",
            "value": "'.$score[21].'"
        },
        {
            "label": " 22 ",
            "value": "'.$score[22].'"
        },
        {
            "label": " 23 ",
            "value": "'.$score[23].'"
        },
        {
            "label": " 24 ",
            "value": "'.$score[24].'"
        },
        {
            "label": " 25 ",
            "value": "'.$score[25].'"
        },
        {
            "label": " 26 ",
            "value": "'.$score[26].'"
        },
        {
            "label": " 27 ",
            "value": "'.$score[27].'"
        },
        {
            "label": " 28 ",
            "value": "'.$score[28].'"
        },
        {
            "label": " 29 ",
            "value": "'.$score[29].'"
        },
        {
            "label": " 30 ",
            "value": "'.$score[30].'"
        },
        {
            "label": " 31 ",
            "value": "'.$score[31].'"
        },
        {
            "label": " 32 ",
            "value": "'.$score[32].'"
        },
        {
            "label": " 33 ",
            "value": "'.$score[33].'"
        }		
    ]
}';
$array = json_decode($json1);
$jsonEncodedData = json_encode($array);
$columnChart1 = new FusionCharts("bar2d", "Chart-1" , 1020, 520, "chart-1", "json", $jsonEncodedData);
$columnChart1->render();
?>
