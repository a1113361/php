<meta charset='utf8'>

<?php
$No=$_GET["No"];
?>

<?php
//連接資料庫
$link = @mysqli_connect( 
            'localhost',  // MySQL主機名稱 
            'root',       // 使用者名稱 
            '',  // 密碼
            'school');  // 預設使用的資料庫名稱
//SQL語法
$SQL="SELECT * FROM student0509 WHERE No='$No'";
//送出查詢
if($result = mysqli_query($link, $SQL)){
    $row = mysqli_fetch_assoc($result);
    $Name = $row["Name"];
    $Department = $row["Department"];
}
?>

<form action="updatecheck.php" method="post">

編號:<?php echo $No ?><input type="hidden" name="uNo" value="<?php echo $No ?>"><br/>
姓名:<input type="text" name="uName"><br/>
系所:<input type="test" name="uDept"><br/>
<input type="submit">

</form>