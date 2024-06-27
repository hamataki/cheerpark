

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

    <table>
    <tr>
    <?php
    // ファイルを変数に格納
    $filename = "data.txt";
    // ファイルを読み込み変数に格納
    $content = file_get_contents($filename);
    // ファイルの中身を出力
    echo $content;
    ?>
    </tr>
    </table>    
    
    <footer>Copyright © 2024 CheerParK</footer>
</body>
</html>