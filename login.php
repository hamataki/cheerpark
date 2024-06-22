<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <title>ログイン画面</title>

    <!-- フォント -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada" rel="stylesheet">
</head>
<body>
    <h1 class="title">CheerParK</h1>
    <form action="write.php" method="post"><br>
        <h2 class="name">お名前</h2>
        <input type="text" name="name" class="name_input" required><br>
        <h2 class="email">Email</h2>
        <input type="text" name="email" class="email_input" required><br>
        <h2 class="passward">パスワード</h2>
        <input type="text" name="passward" class="passward_input" required><br>

        <h2 class="sports">好きなスポーツを選んでください</h2>
        <div class="sports_group">
            <div class="container">
                <input class="check" id="toggle1" type="checkbox" name="sport[]" value="サッカー">
                <label class="toggle" for="toggle1">サッカー</label>
                <input class="check" id="toggle2" type="checkbox" name="sport[]" value="野球">
                <label class="toggle" for="toggle2">野球</label>
                <input class="check" id="toggle3" type="checkbox" name="sport[]" value="バスケットボールl">
                <label class="toggle" for="toggle3">バスケットボール</label><br>
                <input class="check" id="toggle4" type="checkbox" name="sport[]" value="ゴルフ">
                <label class="toggle" for="toggle4">ゴルフ</label>
                <input class="check" id="toggle5" type="checkbox" name="sport[]" value="競馬">
                <label class="toggle" for="toggle5">競馬</label>
                <input class="check" id="toggle6" type="checkbox" name="sport[]" value="eスポーツ">
                <label class="toggle" for="toggle6">eスポーツ</label>
            </div>
        </div>
        <div class="other_group">
            <div class="other">
            その他：<input class="other_txst" type="txst" name="other">
            </div>
        </div>

        <button type="submit" class="btn">Send</button><br>
    </form>
    <footer>Copyright © 2024 CheerParK</footer>
</body>
</html>

<?php
$birth = $_POST['birth'];

$file = fopen("data.txt","a");
fwrite($file,$birth."\n");
fclose($file);
?>