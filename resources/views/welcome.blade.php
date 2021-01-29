<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Statistic</title>
    <script src="https://cdn.amcharts.com/lib/version/4.10.13/core.js"></script>
<script src="https://cdn.amcharts.com/lib/version/4.10.13/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/version/4.10.13/themes/material.js"></script>
<script src="https://cdn.amcharts.com/lib/version/4.10.13/lang/de_DE.js"></script>
<script src="https://cdn.amcharts.com/lib/version/geodata/4.1.19/germanyLow.js"></script>
<script src="https://cdn.amcharts.com/lib/version/4.10.13/maps.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
    .content {
 margin-left:200px;
 margin-top:0px;
}
#chartdiv {
  margin-top:50px;
  width: 100%;
  height: 500px;
}
  </style>
</head>
<body>
  <br><br>
  <hr/>
<div class="alert alert-dark">
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<strong>Covid-19 tunisia Statistcs</strong>
  </div>
  <hr/>
<div class="content" id="chartdiv" style="width: 900px; height: 800px;"></div>

<script>
// Create chart instance in one go
var chart = am4core.createFromConfig({
  // Create pie series
  "series": [{
    "type": "PieSeries",
    "dataFields": {
      "value": "cases",
      "category": "country"
    }
  }],

  // Add data
  "data": [{
    "country": "Sfax",
    "cases": 11
  }, {
    "country": "Sousse",
    "cases": 50
  },{
    "country": "Ariana",
    "cases": 20
  },{
    "country": "Kairouan",
    "cases": 2
  },{
    "country": "Bizerte",
    "cases": 12
  },{
    "country": "Gabes",
    "cases": 12
  },{
    "country": "Beja",
    "cases": 13
},{
  "country": "Gafsa",
    "cases": 15
},{
  "country": "Monastir",
    "cases": 11
},{
  "country": "Kasserine",
    "cases": 10
},{
  "country": "Medenine",
    "cases": 10
},{
  "country": "Jendouba",
    "cases": 3
},{
  "country": "Tataouine ",
    "cases": 1
}
  ],

  // And, for a good measure, let's add a legend
  "legend": {}

}, "chartdiv", am4charts.PieChart);


</script>
  </body>
</html>
