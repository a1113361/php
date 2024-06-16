<meta charset='utf8'>
<?php
    $sName=$_POST["sName"];
    $sDept=$_POST["sDept"];
    //連接資料庫
    $link = @mysqli_connect( 
        'localhost',  // MySQL主機名稱 
        'root',       // 使用者名稱 
        '',  // 密碼
        'school');  // 預設使用的資料庫名稱s
    //SQL語法
    $SQL="INSERT INTO student0509(Name, Department) VALUES('$sName','$sDept')";
    //送出查詢
    if($result = mysqli_query($link, $SQL)){
        echo "<BR/>新增成功";
    }
    echo "<br/><a href='index.php'>查看資料庫資料</a>";
?>