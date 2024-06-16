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
$SQL="SELECT * FROM city0523";
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
          ['City', 'Population']
        <?php
          while($row=mysqli_fetch_assoc($result)){
            $city=$row['City'];
            $pop=$row['Pop'];
            echo ",['$city', $pop]";
          }
        ?>
        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>