<!DOCTYPE html>
<html>
<head>
    <title>好きな商品を入力するといい</title>
    <?php
        // POSTで来たかどうか
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // DB接続
            $mysqli = new mysqli('localhost', 'username', 'password', 'myFirstDB');

            if ($mysqli->connect_error) {
                echo "DB接続に失敗しました: " . $mysqli->connect_error;
                exit();
            }
            
            // 新商品情報
            $newCode = $mysqli->real_escape_string($_POST["newCode"]);
            $newName = $mysqli->real_escape_string($_POST["newName"]);
            $newPrice = $mysqli->real_escape_string($_POST["newPrice"]);

            // DML発行
            $query = "INSERT INTO ChuukamanTBL (code, name, price) VALUES ('$newCode', '$newName', '$newPrice')";
            if (!$mysqli->query($query)) {
                echo "商品の追加に失敗しました: " . $mysqli->error;
                exit();
            }

            // インサートできたかを確認するためSELECT文発行
            $query = "SELECT * FROM ChuukamanTBL WHERE code = '$newCode'";
            $result = $mysqli->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<p>新商品情報: 商品コード - {$row['code']}, 商品名 - {$row['name']}, 価格 - {$row['price']}円</p>";
                }
            } else {
                echo "新商品情報の取得に失敗しました";
            }

            $mysqli->close();
        }
    ?>
</head>
<body>
    <h1>商品データを入力してください</h1>
    <p>たくさん、追加してくれたまえ</p>
    <form method="POST" action="kadai13.php">
        <label for="newCode">商品コード</label>
        <input type="text" name="newCode" id="newCode" required>
        <br>
        <label for="newName">商品名</label>
        <input type="text" name="newName" id="newName" required>
        <br>
        <label for="newPrice">価格</label>
        <input type="text" name="newPrice" id="newPrice" required>
        <br>
        <button type="submit">登録</button>
    </form>
</body>
</html>
