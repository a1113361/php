<?php
//連接資料庫
$link = @mysqli_connect( 
  'localhost',
  'root',
  '',
  'city');  // 預設使用的資料庫名稱+
    
    if (!$link)
            die("無法開啟資料庫!<br/>");
    else
            echo "資料庫:開啟成功!<br/>"; 
//SQL語法
$SQL="SELECT * FROM linechart0523";
//送出查詢
$result = mysqli_query($link, $SQL);
?>

<html>
  <head>
    <meta charset = "utf-8">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Age', 'Income', 'Expense'],
        <?php
          while($row=mysqli_fetch_assoc($result)){
            $age=$row['Age'];
            $income=$row['Income'];
            $expense=$row['Expense'];
            echo ",['$age', $income, $expense]";
          }
        ?>
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>
