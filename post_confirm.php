<?php

//htmlに関する文字やコードが入力されても、反映されないようにコーティングしてね
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
 }

$name =h($_POST["name"]); //上で作ったhで囲む。
$mail =h($_POST["mail"]); //上で作ったhで囲む。


?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
お名前： <?= $name ?>
EMAIL： <?= $mail ?>

<!--post通信はurlに入力内容が記載されない（get通信との違い）-->

<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>