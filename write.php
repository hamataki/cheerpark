<?php
$c = ",";
$name = $_POST["name"];
$email = $_POST["email"];
$passward = $_POST["passward"];

// 好きなスポーツの取得
if (isset($_POST['sport']) && is_array($_POST['sport'])) {$sport = implode("、", $_POST["sport"]);};
$other = $_POST["other"];

$str = $name.$c.$email.$c.$passward.$c.$sport.$c.$other;
// データをCSVファイルに書き込み
$file = fopen("data.txt","a");
fwrite($file,$str."\n");
// ファイルを閉じる
fclose($file);
header("Location: start.php");
exit;

?>