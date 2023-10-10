<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <title>おみくじ</title>
  </head>
</html>
<body>
  <h1>おみくじ</h1>
  <p>おみくじの結果は...</p>
    <?php
        $omikuji = array("大吉", "中吉", "小吉", "吉", "凶", "大凶");
        $result = $omikuji[rand(0, count($omikuji) - 1)];
        echo "<h2>" . $result . "</h2>";
    ?>
</body>
