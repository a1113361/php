<html>

<head>
    <meta charest="utf-8">
    <title>網站的首頁</title>
</head>

<form action="check.php" method="GET">
    <h1>高大資管論文投稿系統</h1>
    請選擇您的角色:
    <select name="sJoin">
        <option value="Chair" selected>Chair
        <option value="Reviewer">Reviewer
        <option value="Author">Author
    </select><br/>
    帳號: <input type="text" name="uId" value="" required><br/>
    密碼: <input type="password" name="uPwd" value="" required><br/>


    <input type="submit" value="提交">
</from>

</html>