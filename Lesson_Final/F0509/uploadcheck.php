<meta charset='utf8'>

<?php
echo "檔案名稱: ".$_FILES["myFile"]["name"]."<br/>";
echo "暫存檔名: ".$_FILES["myFile"]["tmp_name"]."<br/>";
echo "檔案尺寸: ".$_FILES["myFile"]["size"]."<br/>";
echo "檔案種類: ".$_FILES["myFile"]["type"]."<br/>";

$ext=pathinfo($_FILES["myFile"]["name"], PATHINFO_EXTENSION);
$upname=time().".".$ext;
$upname="pic\\".$upname;
echo $upname;

if (copy($_FILES["myFile"]["tmp_name"], "text.png")) {
   echo "檔案上傳成功<br/>";
   unlink($_FILES["myFile"]["tmp_name"]);
}
?>