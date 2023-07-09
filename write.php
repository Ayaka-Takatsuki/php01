<!--writeを直接ブラウザで開くとエラーが起きるが、inputから数値を送るとエラー発生しない-->
<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>
<?php
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
}
$name = h($_POST["name"]); // POST通信のデータを受け取る
$mail = h($_POST["mail"]);
$genre = h($_POST["genre"]);
$like = h($_POST["like"]);


//文字作成
$str = date("Y-m-d H:i:s").",".$name.",".$mail.",".$genre.",".$like."\n";
//File書き込み
$file = fopen("data/data.txt","a"); // ファイル読み込み
fwrite($file, $str);
fclose($file);
?>


<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data.txt を確認しましょう！</h2>

<ul>
<li><a href="post.php">戻る</a></li>
</ul>
</body>
</html>