<?php
    session_start();
?>

<meta charset="utf-8">

<?php
$cId="chair";
$cPwd="123";

$rId="reviewer";
$rPwd="234";

$aId="author";
$aPwd="345";

$sJoin=$_POST["sJoin"];
echo "您的角色:" .$sJoin. "<br/>";

$uId=$_GET["uId"];
echo "您的帳號:" .$uId. "<br/>";

$uPwd=$_GET["uPwd"];
echo "您的密碼:" .$uPwd. "<br/>";

if($cId==$uId && $cPwd==$uPwd){
    $_SESSION["check"]="Yes";
    header("Location:chair.php");
}else if($rId==$uId && $rPwd==$uPwd){
    $_SESSION["check"]="Yes";
    header("Location:reviewer.php");
}else if($aId==$uId && $aPwd==$uPwd){
    $_SESSION["check"]="Yes";
    header("Location:author.php");
}else{
    $_SESSION["check"]="No";
    header("Location:fail.php");
}