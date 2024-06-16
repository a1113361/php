<meta charset="utf-8">

<?php
require_once('tcpdf/tcpdf.php');
//緩衝區
ob_start();

//create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
//set font
$pdf->SetFont('msungstdlight', '', 10);
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->AddPage();

//連接資料庫
$link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'school');  // 預設使用的資料庫名稱
//SQL語法
$SQL="SELECT * FROM student0530";
//送出查詢
$result = mysqli_query($link, $SQL);

$html='<table border="1">';
$html.="<tr>";
$html.="<td>編號</td><td>姓名</td><td>系所</td>";
$html.="</tr>";
while($row=mysqli_fetch_assoc($result)){
    $html.="<tr>";
    $html.="<td>".$row["No"]."</td><td>".$row["Name"]."</td><td>".$row["Department"]."</td>";
    $html.="</tr>";
}
$html.="</table>";

//output the HTML content
$pdf->writeHTML($html);
//file send to file address
$path = "/123info.pdf";
//Close and output PDF document
$pdf->Output(__DIR__ .$path, 'D');
//$pdf->Output($No."-tableinfo.pdf", 'D');

ob_end_flush();
?>