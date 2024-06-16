<html>

<?php
include("setting.inc");
?>

<meta charset="utf-8">

<?php
if(isset($_SESSION["check"]) && $_SESSION["check"] == "Yes"){
        echo "歡迎進入網頁<br/>";
        echo "<a href='M0328_logout.php'>登出</a>";
}else{
    echo "非法網頁!";
}
?>

<?php
include("footer.inc");
?>

</html>