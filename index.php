<?php
session_start();
$id = "";
$pass = "";

if ($_SESSION["authenticated"] == true) {
    header("Location: memberonly.php");
    exit;
}

$user = "";


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    if ($user === "taro" and $pass === "abcd") {
        $_SESSION["authenticated"] = true;
        $_SESSION["userid"] = $user;
        header("Location: memberonly.php");
        exit;
    }else {
        $loginError = "ユーザIDかパスワードがただしくありません";
    }
}


?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
</head>
<body>
    <h1>ログインしましょう</h1>
    <?php if(isset($loginError)): ?>
    <p　class="error"><?= $loginError ?></p>
    <?php endif; ?>
    <p>ユーザIDとパスワードを入力して「ログイン」ボタンを押してください</p>
    <form action="" method="post">
        <table>
        <tr><td>ユーザID </td><td><input type="text" name="user" value="<?= $id ?>"></td></tr>
        <tr><td>パスワード </td><td><input type="password" name="pass" value=""></td></tr>
        </table>
        <p><input type="submit" value="ログイン"></p>
    </form>
</body>
</html>