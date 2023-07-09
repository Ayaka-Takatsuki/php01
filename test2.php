<?php
$name ="高槻";
$age =30;
//変数使いたいとき、jsみたいにletとか宣言する必要ない
echo $name;

//＋ではなく.で繋げていく
    //"私は" + name + "です" ←　JSの場合
echo "私は".$name."です";
// echo "私は $name です";

$message ="年齢は"; //js: message ="年齢は"
$message =$age;  //message += age
$message ="です"; // message += "です"
echo $message

?>