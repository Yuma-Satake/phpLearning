<?php
include('../dbfunc.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $odata = [
        'pcode' => $_POST['pcode'], 'oquantity' => $_POST['oquantity'], 'odelidate' => $_POST['odelidate'], 'cname' => $_POST['cname'], 'cmail' => $_POST['cmail']
    ];
}

// YYYY-MM-DD HH:MM:DD形式で全パターン作成
$dates = ['2023-11-02', '2023-11-03', '2023-11-04'];
$hours = ['10', '11', '12', '13', '14', '15'];
$minutes = ['00', '10', '20', '30', '40', '50'];
$i = 0;
foreach ($dates as $d) {
    foreach ($hours as $h) {
        foreach ($minutes as $m) {
            //POSTで送れるように半角スペースは&nbsp;で記述
            $dhm[$i] = $d . '&nbsp;' . $h . ':' . $m . ':00';
            $i++;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>【公式】あなたの知らない揚げパンの世界</title>
    <!-- Bootstrap CSSの読み込み -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="container border border-3 border-primary bg-warning-subtle">
        <div class="row border border-3 border-info"><!-- ナビゲーションバー -->
            <?php readfile('../navbar.html') ?>
        </div>

        <div class="row border border-3 border-info">
            <div class="col-12 border border-3 border-success">
                <h1 class="p-2">よかったら注文していってね</h1>
            </div>
        </div>
        <div class="row border border-3 border-info p-5"><!-- 注文フォーム -->
            <form action="order.php" method="POST">
                <div id="nameHelp" class="form-text">お名前を入力してください</div>
                <input type="text" class="form-control" name="cname" aria-describedby="nameHelp">

                <div id="emailHelp" class="form-text">メールアドレスを入力してください</div>
                <input type="text" class="form-control" name="cmail" aria-describedby="emailHelp">

                <div id="pnameHelp" class="form-text">商品を選んでください</div>
                <select class="form-select" aria-label="prodSelect" name="pcode">
                    <option selected>商品を選んでください</option>
                    <?php foreach ($products as $record) {
                        echo "<option value={$record['pcode']}>{$record['pname']}</option>";
                    } ?>
                </select>

                <div id="quantHelp" class="form-text">数量を選んでください</div>
                <select class="form-select" aria-label="quantSelect" name="oquantity">
                    <option selected>数量を選んでください</option>
                    <option value="1">1個</option>;
                    <option value="2">2個</option>;
                    <option value="3">3個</option>;
                    <option value="4">4個</option>;
                    <option value="5">5個</option>;
                </select>

                <div id="quantHelp" class="form-text">引き渡し日を選んでください</div>
                <select class="form-select" aria-label="deliDateSelect" name="odelidate">
                    <option selected>引き渡し日時はいつにしますか</option>
                    <?php
                    foreach ($dhm as $delidate) {
                        echo "<option value={$delidate}>{$delidate}</option>";
                    }
                    ?>
                </select>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="row border border-3 border-info table-responsive">
            <table class="table table-warning table-striped table-hover align-middle">
                <thead>
                    <tr>
                        <th class="myTblPName">商品名</th>
                        <th class="myTblPDesc">商品概要</th>
                        <th class="myTblPPrice">商品単価</th>
                        <th class="myTblPImg">商品イメージ</th>
                        <th>注文数量</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $record) { ?>
                        <tr class="p-2">
                            <td><?php echo $record['pname']; ?></td>
                            <td><?php echo $record['pdesc']; ?></td>
                            <td><?php echo $record['pprice'] . '円'; ?></td>
                            <td><img class="img-fluid rounded myProdImg" src="../images/<?php echo $record['pfilename']; ?>" alt=商品イメージ></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-12"> (c) We are Unknown Fried Pan!!</div>
        </div>
    </div>
    <!-- Bootstrap JavaScriptの読み込み -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>