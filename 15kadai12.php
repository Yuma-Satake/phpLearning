<!DOCTYPE html>
<html>
<head>
    <title>好きなだけ、入力するといい</title>
    <?php
        // POSTで来たかどうか
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // DB接続
            $mysqli = new mysqli('localhost', 'username', 'password', 'myFirstDB');

            if ($mysqli->connect_error) {
                echo "DB接続に失敗しました: " . $mysqli->connect_error;
                exit();
            }
            
            // SELECT発行
            $query = "SELECT code, price FROM ChuukamanTBL";
            $result = $mysqli->query($query);

            if (!$result) {
                echo "SQLの実行に失敗しました: " . $mysqli->error;
                exit();
            }

            // 各商品の単価を取得
            $prices = array();
            while ($row = $result->fetch_assoc()) {
                $prices[$row['code']] = $row['price'];
            }

            // 金額計算
            $total = 0;
            $total += $_POST["numAnman"] * $prices[100];
            $total += $_POST["numCurryman"] * $prices[200];
            $total += $_POST["numNikuman"] * $prices[300];

            // 合計金額を表示
            echo "<p>合計金額: " . $total . "円</p>";
            
            $mysqli->close();
        }
    ?>
</head>
<body>
    <h1>数量を入力してください</h1>
    <p>どんだけ入力してもいいぞ、見積もりだからな</p>
    <form method="POST" action="kadai12.php">
        <label for="numAnman">あんまん：</label>
        <input type="text" name="numAnman" id="numAnman" value="0" required>
        <br>
        <label for="numCurryman">かりまん：</label>
        <input type="text" name="numCurryman" id="numCurryman" value="0" required>
        <br>
        <label for="numNikuman">にくまん：</label>
        <input type="text" name="numNikuman" id="numNikuman" value="0" required>
        <br>
        <button type="submit">見積もり計算</button>
    </form>
</body>
</html>
