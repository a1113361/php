<html>

<head>

<meta charest="utf-8">
<title>資管晚會報名表</title>

</head>

<form action="info.php" method="post">
<h1>基本資料</h1>

姓名: <input type="text" name="sName" placeholder="在這輸入你的名字!"><br/>
系所: <input type="text" name="sMajor" placeholder="在這輸入你的系所!"><br/>
學號: <input type="text" name="sNumber" placeholder="在這輸入你的學號!"><br/>
<br/>
出生年月日: 
<input type="date" name="sDate" value="">
<input type="time" name="sTime" value="">
<br/><br/>
性別: <br/>
<input type="radio" name="sGender" value="male" checked>男性
<input type="radio" name="sGender" value="female">女性<br/>
<br/>
家鄉: <br/>
<input type="checkbox" name="sCity" value="Northern" checked>北部
<input type="checkbox" name="sCity" value="Center">中部
<input type="checkbox" name="sCity" value="Southern">南部
<input type="checkbox" name="sCity" value="Easthern">東部<br/>
<br/>
電子郵件: 
<input type="email" name="sEmail"><br/>
<br/>
報名資訊: 
<select name="sJoin">
    <option value="Yes" selected>那是一定要的
    <option value="No">我不要
</select>
<br/><br/><br/>
意見欄: 
<textarea name="sComment" value="" rows="5" cols="20">

</textarea><br/>
<br/>
<input type="submit" value="我填好了!">
<input type="reset" value="我再想想...">

</form>

</html>