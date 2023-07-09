<?php
$file = fopen('data/data.txt', 'r');
echo "<table>";
echo "<tr>";
echo "<th>日時</th>";
echo "<th>名前</th>";
echo "<th>メールアドレス</th>";
echo "<th>好きな食事のジャンル</th>";
echo "<th>理由</th>";
echo "</tr>";

while ($str = fgets($file)) {
    $data = explode(",", $str);
    echo "<tr>";
    foreach ($data as $value) {
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
fclose($file);
?>