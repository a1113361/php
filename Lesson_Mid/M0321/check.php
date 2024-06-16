<?php
    session_start();
?>

<meta charset="utf-8">

<?php
$sID="nuk";
$sPwd="123";

$uID=$_GET["uID"];
echo "您的帳號:" .$uID. "<br/>";

$uPwd=$_GET["uPwd"];
echo "您的密碼:" .$uPwd. "<br/>";

if($sID==$uID && $sPwd==$uPwd){
    $_SESSION["check"]="Yes";
    header("Location:success.php");
}else{
    $_SESSION["check"]="No";
    header("Location:fail.php");
}