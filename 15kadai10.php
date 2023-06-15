<!DOCTYPE html>
<html>
<head>
    <title>好きな色を選ぶ</title>
    <?php
        // 背景色を設定する
        // パラメタがなかったら回避する（初回起動）のif文
        if (!empty($_POST["color"])) {
            // $colorに送られてきた色の名前を受け取る
            $color = $_POST["color"];
            echo "<style>body { background-color: $color; }</style>";
        }
    ?>
</head>
<body>
    <h1>好きな色を選んでください</h1>
    <p>連想配列のキーはname、値はvalueに書いた{red,blue,green}のどれかが設定される</p>
    <form method="POST" action="00kadai10.php">
        <label for="color">色：</label>
        <select name="color" id="color">
            <option value="red">赤</option>
            <option value="blue">青</option>
            <option value="green">緑</option>
        </select>
        <button type="submit">選択</button>
    </form>
</body>
</html>
