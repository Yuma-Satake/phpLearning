<!DOCTYPE html>
<html>
<head>
    <title>電話番号の入力</title>
    <?php
        // パラメタがなかったら回避する（初回起動）のif文
        if (!empty($_POST["tel"])) {
            // $patternを作成
            $pattern = "/^(090|080|070)-\d{4}-\d{4}$/";

            // $telに受け取った電話番号を格納
            $tel = $_POST["tel"];

            // preg_matchの結果によって分岐して、結果を出力するコード
            if (preg_match($pattern, $tel)) {
                echo "<p>入力された電話番号は正しい形式です。</p>";
            } else {
                echo "<p>入力された電話番号は不正な形式です。</p>";
            }
        }
    ?>
</head>
<body>
    <h1>携帯電話の番号を入力してください</h1>
    <p>090, 080, 070から始まる電話番号でハイフンを必ず含む</p>
    <form method="POST" action="【ファイル名】.php">
        <label for="tel">電話番号：</label>
        <input type="text" name="tel" id="tel" required><br>
        <button type="submit">送信</button>
    </form>
</body>
</html>
