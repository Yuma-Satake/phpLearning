<!DOCTYPE html>
<html lang="jp">

<head>
    <title>課題01 基本構文の確認</title>
</head>

<body>
    <?php
    //1.
    echo "<h1>前期の復習</h1>";

    //2.
    $sum = 0;
    echo $sum;

    //3.
    $a = 100;
    $b = 50;

    //4.
    $sum = $a + $b;
    echo $sum;

    //5.
    if ($sum == 150) {
        echo "変数sumは150ぴったり";
    } else {
        echo "なんか違うみたい";
    }

    //6.
    for ($i = 0; $i < $sum; $i++) {
        echo "*";
    }

    //7.
    $name = array('okuda', 'mori', 'tsuchiya');

    //8.
    for ($i = 0; $i < count($name); $i++) {
        echo $name[$i];
    }

    //9.
    echo "<table>";
    echo "<tr><th>code</th><th>name</th></tr>";
    for ($i = 0; $i < count($name); $i++) {
        echo "<tr><td>" . ($i + 1) . "</td><td>" . $name[$i] . "</td></tr>";
    }
    echo "</table>";

    //10.
    $menu = array('pcode' => 1, 'pname' => '天津飯', 'price' => 780);
    echo $menu['pcode'] . " " . $menu['pname'] . " " . $menu['price'];

    //11.
    $menulist = array(
        array('pcode' => 1, 'pname' => '天津飯', 'price' => 780),
        array('pcode' => 2, 'pname' => '炒飯', 'price' => 650),
        array('pcode' => 3, 'pname' => '餃子', 'price' => 450)
    );

    //12.
    echo "<table>";
    echo "<tr><th>pcode</th><th>pname</th><th>price</th></tr>";
    foreach ($menulist as $menu) {
        echo "<tr><td>" . $menu['pcode'] . "</td><td>" . $menu['pname'] . "</td><td>" . $menu['price'] . "</td></tr>";
    }
    echo "</table>";

    ?>
</body>

</html>