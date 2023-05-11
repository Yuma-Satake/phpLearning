<!DOCTYPE html>
<html>
<head>
    <title>今日の運勢</title>
</head>
<body>
    <h1>おみくじ1回1000円</h1>
    <?php
        $omikuji = rand(1, 3);
        if ($omikuji == 1) {
            echo "<p>大吉</p>";
        } elseif ($omikuji == 2) {
            echo "<p>中吉</p>";
        } else {
            echo "<p>凶</p>";
        }
    ?>
</body>
</html>
