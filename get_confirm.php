<?php
$name = $_GET["name"];
$mail = $_GET["mail"];



?>
<html>
<head>
<meta charset="utf-8">
<title>GET練習（受信）</title>
</head>
<body>
        
お名前：<?php echo $name ?> <!--↓と同じ書き方-->
Mail：<?= $mail ?>  <!--↑と同じ書き方-->

<!--get通信はurlに入力内容が記載される（post通信との違い）-->

<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>