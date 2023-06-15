<!DOCTYPE html>
<html>
<head>
    <title>好きな商品を入力するといい</title>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $host = 'your_host';
            $dbname = 'your_db_name';
            $username = 'your_username';
            $password = 'your_password';

            try {
                $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $newCode = $_POST['newCode'];
                $newName = $_POST['newName'];
                $newPrice = $_POST['newPrice'];

                $stmt = $pdo->prepare("INSERT INTO ChuukamanTBL (code, name, price) VALUES (:newCode, :newName, :newPrice)");
                $stmt->bindParam(':newCode', $newCode);
                $stmt->bindParam(':newName', $newName);
                $stmt->bindParam(':newPrice', $newPrice);
                $stmt->execute();

                echo "<p>商品が追加されました。</p>";

                // New product verification
                $stmt = $pdo->prepare("SELECT * FROM ChuukamanTBL WHERE code = :newCode");
                $stmt->bindParam(':newCode', $newCode);
                $stmt->execute();
                $product = $stmt->fetch();

                echo "<p>新しい商品: コード - {$product['code']}, 名前 - {$product['name']}, 価格 - {$product['price']} </p>";
            } catch(PDOException $e) {
                echo "<p>エラー: " . $e->getMessage() . "</p>";
            }
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
