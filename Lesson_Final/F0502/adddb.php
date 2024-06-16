<meta charset = utf-8>

<?php
$sName = $_POST["sName"];
$sDept = $_POST["sDept"];

$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'school');  // 預設使用的資料庫名稱

//SQL語法
$sql = "INSERT INTO book0502(sName, sDept) VALUES('$sName', '$sDept')";

//送出查詢
if($result = mysqli_query($link, $sql)){
    echo "<br/>新增成功";
}
echo "<br/><a href = 'index.php'>查看資料庫完整資料</a>";

?>