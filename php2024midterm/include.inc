<meta charset="utf-8">

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['zId']) && isset($_POST['zPwd'])) {
        $zId = $_POST['zId'];
        $zPwd = $_POST['zPwd'];

        setcookie('zId', $zId, time() + 7*24*60*60*);
        echo "您之前輸入過且已儲存的帳號:" .$zId. "<br/>";
        echo "您之前輸入過且已儲存的密碼:" .$zPwd. "<br/>";
        }
    } else {
        echo "<p>請先填寫完整資訊。</p>";
    }
?>

/*

不太會寫cookie，但他要放在開頭，以及<html>之外，再用以下方法標示
<?php
    include("include.inc");
?>

至於他要放在哪個檔案的開頭，我想應該是 check.php。

*/