<?php
    session_start();
?>

<html>

<meta charset="utf-8">

<?php
if(isset($_SESSION["check"]) && $_SESSION["check"] == "Yes"){
        echo "<h1>Author您好，歡迎進入論文投稿網頁</h1><br/>";
?>
    <form action="showpaper.php" method="post">
    論文標題: <br/><input type="text" name="sTitle" requied><br/>
    作者姓名: <input type="text" name="sName" requied><br/>
    作者Email: <input type="text" name="sMail" requied><br/>
    論文摘要:
    <textarea name="sComment" value="" rows="20" cols="50">
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