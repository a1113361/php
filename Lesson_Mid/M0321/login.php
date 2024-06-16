<html>

<head>

<meta charest="utf-8">
<title>測試</title>

</head>

<form action="check.php" method="GET">

帳號: <input type="text" name="uID" value="" placeholder="請輸入帳號" required><br/>
密碼: <input type="password" name="uPwd" value=""  placeholder="請輸入密碼" required><br/>

<input type="submit" value="登入">
<input type="reset" value="清除">

</form>

<?php

//header("Refresh:1");
//date_default_timezone_set("Asia/Taipei");
//echo_date("Y/m/d h:m:s");

?>

</html>