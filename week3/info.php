<meta charest="utf-8">

<?php

if($_POST["sName"]!=""){
    $sName=$_POST["sName"];
    echo "姓名: " .$sName. "<br/>";

    $sMajor=$_POST["sMajor"];
    echo "系所: " .$sMajor. "<br/>";

    $sNumber=$_POST["sNumber"];
    echo "學號: " .$sNumber. "<br/>";

    $sDate=$_POST["sDate"];
    $sTime=$_POST["sTime"];
    echo "出生年月日: " .$sDate. "<br/>";

    $sGender=$_POST["sGender"];
    echo "性別: " .$sGender. "<br/>";

    $sCity=$_POST["sCity"];
    echo "家鄉: " .$sCity. "<br/>";

    $sEmail=$_POST["sEmail"];
    echo "電子郵件: " .$sEmail. "<br/>";

    $sJoin=$_POST["sJoin"];
    echo "報名意願: " .$sJoin. "<br/>";

    $sComment=$_POST["sComment"];
    echo "意見欄: " .$sComment. "<br/>";
    
}else{
    echo "輸入錯誤";
}

?>