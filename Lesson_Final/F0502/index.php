<meta charset = utf-8>

<?php
$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'school');  // 預設使用的資料庫名稱

if (!$link)
    die("無法開啟資料庫!<br/>");
else
    echo "資料庫開啟成功!<br/>";

//SQL語法
$sql = "SELECT * FROM book0502";

//送出查詢
$result = mysqli_query($link, $sql);

echo "<table border = '1'>";
//結果轉為陣列
while($row = mysqli_fetch_assoc($result)){
echo "<tr>";
    echo "<td>".$row["sName"]."</td><td>".$row["sDept"]."</td><td><a href = 'del.php'>刪除</a></td><td><a href = 'adddb.php'>修改</a></td><br/>";
echo "</tr>";
}
echo "</table>";

mysqli_close($link);
?>