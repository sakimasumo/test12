<?php
session_start();
if ($_SESSION["authenticated"] != true) {
    header("Location: index.php");
    exit;
}
$userid = $_SESSION["userid"]
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員専用ページ</title>
</head>
<body>
    <h1>会員専用ページへようこそ</h1>
    <p>あなたのユーザIDは<?= $userid ?>です。</p>
    <p>このページでは会員専用の情報が閲覧できます</p>
    <p><a href="logout.php">ログアウトする</a></p>
</body>
</html>