<?php
    session_start();
?>

<html>

<meta charset="utf-8">

<?php
if(isset($_SESSION["check"]) && $_SESSION["check"] == "Yes"){
        echo "<h1>Reviewer您好，歡迎進入論文評論網頁</h1><br/>";
?>
    <form action="showreview.php" method="post">
    論文評審決定:
    <input type="radio" name="sDe" value="Accept" checked>Accept
    <input type="radio" name="sDe" value="Minor Revision">Minor Revision
    <input type="radio" name="sDe" value="Major Revision">Major Revision
    <input type="radio" name="sDe" value="Reject">Reject<br/><br/>
    論文評論評語:
    <textarea name="sCComment" value="" rows="20" cols="50">
    </textarea><br/>
    <input type="submit" value="提交">
    </form>
<?php
        echo "<a href='logout.php'>登出</a>";
}else{
    echo "非法網頁!";
}
?>

</html>