<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<body>
<div
id="myChart" style="width:100%; max-width:600px; height:500px;">
</div>

<script>
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
  ['Danh mục', 'Số lượng sản phẩm'],
  <?php

for ($i = 0; $i < count($list_statistic); $i++) {
    $countpro = $list_statistic[$i]['countpro'];
    $categoryName = $list_statistic[$i]['categoryName']; 
    if($i === ((count($list_statistic)) -1))  { $dauphay = "";}
    else{$dauphay = ",";}
  
?>
  ['<?= $categoryName ?>',<?= $countpro ?>]<?= $dauphay ?>

<?php } ?>
 
]);

var options = {
  title:'Dữ liệu thống kê sản phẩm shop Envidi',
  is3D:true
};

var chart = new google.visualization.PieChart(document.getElementById('myChart'));
  chart.draw(data, options);
}
</script>