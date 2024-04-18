<meta charest="utf-8">

<?php

if($_POST["sDe"]!="" && $_POST["sCComment"]!=""){

    $sDe=$_POST["sDe"];
    echo "論文評審決定: " .$sDe. "<br/>";

    $scComment=$_POST["sCComment"];
    echo "論文評論評語: " .$sCcomment. "<br/>";
}else{
    echo "輸入錯誤";
}
?>