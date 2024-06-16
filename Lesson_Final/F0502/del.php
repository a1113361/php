<meta charset = utf-8>

<?php
$sNo=$_GET["sNo"];

$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'school');  // 預設使用的資料庫名稱

//SQL語法
$sql = "DELETE FROM book0502 WHERE sNo='$sNo'";

//送出查詢
if($result = mysqli_query($link, $sql)){
    echo "<br/>刪除成功";
}
echo "<br/><a href = 'index.php'>查看資料庫完整資料</a>";

?>