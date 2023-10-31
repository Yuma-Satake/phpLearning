<?php
function dbConnect()
{
    $host = 'localhost';
    $dbname = 'seminar2db';
    $username = 'root';
    $password = '';
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        return $pdo;
    } catch (PDOException $e) {
        echo "エラーメッセージ：" . $e->getMessage();
    }
}

function selectProducts()
{
    $pdo = dbConnect();
    try {
        $stmt = $pdo->prepare("SELECT * FROM PRODUCTS ORDER BY CODE");
        $stmt->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $products = [];
    $i = 0;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $products[$i] = [
            'pcode' => $row['pcode'],
            'pname' => $row['pname'],
            'pprice' => $row['pprice'],
            'pfilename' => $row['pfilename']
        ];
        $i++;
    }
    return $products;
}
