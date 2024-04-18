<meta charest="utf-8">

<?php

if($_POST["sTitle"]!="" && $_POST["sName"]!="" && $_POST["sMail"]!="" && $_POST["sComment"]!=""){
    $sTitle=$_POST["sTitle"];
    echo "論文標題: " .$sTitle. "<br/>";

    $sName=$_POST["sName"];
    echo "作者姓名: " .$sName. "<br/>";

    $sMail=$_POST["sMail"];
    echo "作者Email: " .$sMail. "<br/>";

    $sComment=$_POST["sComment"];
    echo "論文摘要: " .$sComment. "<br/>";
    
}else{
    echo "輸入錯誤";
}

?>