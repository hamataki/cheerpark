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
    <form action="login.php" method="post"><br>
        <h2 class="birth_title">生年月日を入力してください</h2>
        <input type="date" name="birth" class="birth_input" required><br>
        <button type="submit" class="btn">Send</button>
    </form>
    <footer>Copyright © 2024 CheerParK</footer>
</body>
</html>