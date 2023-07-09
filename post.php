<html>
<head>
<meta charset="utf-8">
<title>POST練習</title>
</head>
<body>
<!--write.phpに情報を飛ばす。誰が何時に飛ばしたか分かるようにする。-->
<form action="write.php" method="post">
	お名前: <input type="text" name="name">
	EMAIL: <input type="text" name="mail">
	<input type="submit" value="送信">
	<p id="choice1">好きな食事のジャンルは？</p>
      <ul>
        <li><input type="radio" name="genre" value="和食">和食</li>
        <li><input type="radio" name="genre" value="洋食">洋食</li>
        <li><input type="radio" name="genre" value="中華">中華</li>
      </ul>
	  <p id="choice2">その理由は？</p>
      <ul>
        <li><input type="radio" name="like" value="健康的だから">健康的だから</li>
        <li><input type="radio" name="like" value="とにかく美味しいから">とにかく美味しいから</li>
        <li><input type="radio" name="like" value="おなかにたまるから">おなかにたまるから</li>
      </ul>
</form>
<ul>
<li><a href="read.php">登録データ表示</a></li>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>