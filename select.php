<?php

function h($str) {
  return htmlspecialchars($str, ENT_QUOTES, 'UFT-8')
}

//1.  DB接続します
// 練習環境データベース
$prod_db = "cheerpark_db_class";
// 練習環境ホスト
$prod_host = "localhost";
// 練習環境ID
$prod_id = "root";
// 練習環境PW

try {
    //ID:'root', Password: xamppは 空白 ''
    $pdo = new PDO('mysql:dbname=' . $prod_db . ';charset=utf8;host='. $prod_host, $prod_id, '');
} catch (PDOException $e) {
    exit('DBConnectError:'.$e->getMessage());
}

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM cheerpark_an_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if ($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
   while($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $view .= '<p>';
    $view .= h($result['date']) . h($result['birth'])  . h($result['name']) . h($result['email']) . h($result['sport']) . h($result['other']);    
    $view .= '</p>';        
    }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?= $view ?></div>
</div>
<!-- Main[End] -->

</body>
</html>
