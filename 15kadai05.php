<!-- 連想配列を用いて構造体作成し（内容は自由） foreach文を用いて出力してください -->
<?php
$member = array(
    array(
        'name' => '田中',
        'age' => 20,
        'tall' => 170
    ),
    array(
        'name' => '鈴木',
        'age' => 30,
        'tall' => 160
    ),
    array(
        'name' => '佐藤',
        'age' => 40,
        'tall' => 150
    )
);
foreach ($member as $key => $value) {
    echo $key . '番目の人の情報<br>';
    foreach ($value as $key2 => $value2) {
        echo $key2 . 'は' . $value2 . 'です<br>';
    }
}
?>